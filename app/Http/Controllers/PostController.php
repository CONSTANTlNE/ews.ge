<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Services\ConversionService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    private const LOCALES = ['en', 'ka'];

    public function __construct(private readonly ConversionService $conversionService) {}

    public function index(Request $request)
    {
        $posts = Post::with(['categories', 'media'])
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $categories = Category::latest()->get();

        return view('admin.posts.index', [
            'posts' => $posts,
            'categories' => $categories,
            'editingPost' => $this->resolveEditingPost($request),
            'locales' => self::LOCALES,
        ]);
    }

    public function store(Request $request)
    {
        $payload = $this->validatedPayload($request);
        $categoryIds = $payload['categories'];
        unset($payload['categories']);

        $post = Post::create($payload);
        $post->categories()->sync($categoryIds);

        $this->handleFeaturedImage($request, $post);

        return redirect()
            ->route('admin.posts.index')
            ->with('status', 'Post created successfully.');
    }

    public function update(Request $request, Post $post)
    {
        $payload = $this->validatedPayload($request, $post);
        $categoryIds = $payload['categories'];
        unset($payload['categories']);

        $post->update($payload);
        $post->categories()->sync($categoryIds);

        $this->handleFeaturedImage($request, $post);

        return redirect()
            ->route('admin.posts.index')
            ->with('status', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('status', 'Post deleted successfully.');
    }

    private function resolveEditingPost(Request $request): ?Post
    {
        if (! $request->filled('edit')) {
            return null;
        }

        return Post::with(['categories', 'media'])->findOrFail($request->integer('edit'));
    }

    private function validatedPayload(Request $request, ?Post $post = null): array
    {
        $slugRule = Rule::unique('posts', 'slug');

        if ($post) {
            $slugRule->ignore($post->id);
        }

        $validated = $request->validate([
            'title' => ['required', 'array'],
            'title.en' => ['required', 'string', 'max:255'],
            'title.ka' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', $slugRule],
            'excerpt' => ['nullable', 'string'],
            'body' => ['required', 'array'],
            'body.en' => ['required', 'string'],
            'body.ka' => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,avif', 'max:5120'],
            'is_published' => ['nullable', 'boolean'],
            'published_at' => ['nullable', 'date'],
            'categories' => ['nullable', 'array'],
            'categories.*' => ['integer', Rule::exists('categories', 'id')],
        ]);

        $title = $this->requiredTranslations($validated['title'], 'title');
        $body = $this->requiredTranslations($validated['body'], 'body');

        $slugSource = $title['en'] ?? $title['ka'] ?? 'post';
        $excerpt = trim((string) ($validated['excerpt'] ?? ''));

        return [
            'title' => $title,
            'slug' => $this->resolveSlug($validated['slug'] ?? null, $slugSource, $post),
            'excerpt' => $excerpt === '' ? null : $excerpt,
            'body' => $body,
            'is_published' => $request->boolean('is_published'),
            'published_at' => $validated['published_at'] ?? null,
            'categories' => $validated['categories'] ?? [],
        ];
    }

    private function requiredTranslations(array $values, string $field): array
    {
        $translations = [];

        foreach (self::LOCALES as $locale) {
            $value = trim((string) ($values[$locale] ?? ''));

            if ($value === '') {
                throw ValidationException::withMessages([
                    "$field.$locale" => "The $field.$locale field is required.",
                ]);
            }

            $translations[$locale] = $value;
        }

        return $translations;
    }

    private function handleFeaturedImage(Request $request, Post $post): void
    {
        if (! $request->hasFile('featured_image')) {
            return;
        }

        $webp = $this->conversionService->convertToWebp($request->file('featured_image'));

        $post->addMediaFromString($webp['content'])
            ->usingFileName($webp['file_name'])
            ->withCustomProperties(['mime_type' => $webp['mime_type']])
            ->toMediaCollection(Post::FEATURED_IMAGE_COLLECTION);
    }

    private function resolveSlug(?string $slug, string $title, ?Post $post = null): string
    {
        $baseSlug = Str::slug($slug ?: $title);

        if ($baseSlug === '') {
            $baseSlug = 'post';
        }

        $resolvedSlug = $baseSlug;
        $counter = 2;

        while (
            Post::query()
                ->where('slug', $resolvedSlug)
                ->when($post, fn ($query) => $query->whereKeyNot($post->id))
                ->exists()
        ) {
            $resolvedSlug = "{$baseSlug}-{$counter}";
            $counter++;
        }

        return $resolvedSlug;
    }
}
