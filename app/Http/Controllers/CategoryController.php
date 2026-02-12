<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    private const LOCALES = ['en', 'ka'];

    public function index(Request $request)
    {
        $categories = Category::withCount('posts')
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.categories.index', [
            'categories' => $categories,
            'editingCategory' => $this->resolveEditingCategory($request),
            'locales' => self::LOCALES,
        ]);
    }

    public function store(Request $request)
    {
        Category::create($this->validatedPayload($request));

        return redirect()
            ->route('admin.categories.index')
            ->with('status', 'Category created successfully.');
    }

    public function update(Request $request, Category $category)
    {
        $category->update($this->validatedPayload($request, $category));

        return redirect()
            ->route('admin.categories.index')
            ->with('status', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('status', 'Category deleted successfully.');
    }

    private function resolveEditingCategory(Request $request): ?Category
    {
        if (! $request->filled('edit')) {
            return null;
        }

        return Category::findOrFail($request->integer('edit'));
    }

    private function validatedPayload(Request $request, ?Category $category = null): array
    {
        $slugRule = Rule::unique('categories', 'slug');

        if ($category) {
            $slugRule->ignore($category->id);
        }

        $validated = $request->validate([
            'name' => ['required', 'array'],
            'name.en' => ['required', 'string', 'max:255'],
            'name.ka' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', $slugRule],
            'description' => ['nullable', 'array'],
            'description.en' => ['nullable', 'string'],
            'description.ka' => ['nullable', 'string'],
        ]);

        $name = [];

        foreach (self::LOCALES as $locale) {
            $value = trim((string) ($validated['name'][$locale] ?? ''));

            if ($value === '') {
                throw ValidationException::withMessages([
                    "name.$locale" => "The name.$locale field is required.",
                ]);
            }

            $name[$locale] = $value;
        }

        $description = $this->cleanTranslations($validated['description'] ?? []);

        $slugSource = $name['en'] ?? $name['ka'] ?? 'category';

        return [
            'name' => $name,
            'slug' => $this->resolveSlug($validated['slug'] ?? null, $slugSource, $category),
            'description' => $description === [] ? null : $description,
        ];
    }

    private function cleanTranslations(array $values): array
    {
        $translations = [];

        foreach (self::LOCALES as $locale) {
            $value = trim((string) ($values[$locale] ?? ''));

            if ($value !== '') {
                $translations[$locale] = $value;
            }
        }

        return $translations;
    }

    private function resolveSlug(?string $slug, string $name, ?Category $category = null): string
    {
        $baseSlug = Str::slug($slug ?: $name);

        if ($baseSlug === '') {
            $baseSlug = 'category';
        }

        $resolvedSlug = $baseSlug;
        $counter = 2;

        while (
            Category::query()
                ->where('slug', $resolvedSlug)
                ->when($category, fn ($query) => $query->whereKeyNot($category->id))
                ->exists()
        ) {
            $resolvedSlug = "{$baseSlug}-{$counter}";
            $counter++;
        }

        return $resolvedSlug;
    }
}
