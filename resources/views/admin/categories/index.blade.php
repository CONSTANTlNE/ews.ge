@extends('front.layout')

@section('index')
    @php
        $isEditing = $editingCategory !== null;
        $editingName = $isEditing ? $editingCategory->getTranslations('name') : [];
        $editingDescription = $isEditing ? $editingCategory->getTranslations('description') : [];
    @endphp

    <main class="px-4 pb-10 md:px-16 lg:px-24">
        <div class="mx-auto mt-14 max-w-7xl rounded-3xl border border-slate-200/80 bg-slate-50/95 p-6 text-slate-900 shadow-xl md:mt-16 md:p-10 lg:p-12">
            <section class="mx-auto max-w-6xl text-center">
                <h1 class="mx-auto mt-6 max-w-3xl text-4xl/12 font-semibold tracking-tight md:text-6xl/18">Category Management</h1>
                <p class="mx-auto mt-5 max-w-2xl text-sm/7 text-slate-600 md:text-base/8">Manage English and Georgian category content from one page.</p>
            </section>

            @if (session('status'))
                <div class="mx-auto mt-8 max-w-6xl rounded-xl border border-emerald-300 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mx-auto mt-4 max-w-6xl rounded-xl border border-rose-300 bg-rose-50 px-4 py-3 text-sm text-rose-700">
                    <p class="font-medium">Please fix the following errors:</p>
                    <ul class="mt-2 list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mx-auto mt-10 grid max-w-6xl gap-6 lg:grid-cols-[minmax(0,1fr)_minmax(0,1.7fr)]">
                <section class="rounded-2xl border border-slate-200 bg-white p-5">
                    <div class="mb-4 flex items-center justify-between gap-3">
                        <h2 class="text-lg font-semibold">{{ $isEditing ? 'Edit Category' : 'Create Category' }}</h2>

                        @if ($isEditing)
                            <a href="{{ route('admin.categories.index') }}" class="rounded-full border border-slate-200 px-3 py-1.5 text-xs transition hover:bg-slate-100">Cancel</a>
                        @endif
                    </div>

                    <form method="POST" action="{{ $isEditing ? route('admin.categories.update', $editingCategory) : route('admin.categories.store') }}" class="space-y-4">
                        @csrf
                        @if ($isEditing)
                            @method('PUT')
                        @endif

                        @foreach ($locales as $locale)
                            <label class="space-y-2">
                                <span class="text-sm text-slate-700">Name ({{ strtoupper($locale) }})</span>
                                <input type="text" name="name[{{ $locale }}]" value="{{ old("name.$locale", $editingName[$locale] ?? '') }}" required class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500">
                            </label>
                        @endforeach

                        <label class="space-y-2">
                            <span class="text-sm text-slate-700">Slug (optional)</span>
                            <input type="text" name="slug" value="{{ old('slug', $isEditing ? $editingCategory->slug : '') }}" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500">
                        </label>

                        @foreach ($locales as $locale)
                            <label class="space-y-2">
                                <span class="text-sm text-slate-700">Description ({{ strtoupper($locale) }})</span>
                                <textarea name="description[{{ $locale }}]" rows="3" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500">{{ old("description.$locale", $editingDescription[$locale] ?? '') }}</textarea>
                            </label>
                        @endforeach

                        <button type="submit" class="rounded-full bg-slate-900 px-5 py-2 text-sm font-medium text-white transition hover:bg-slate-700">
                            {{ $isEditing ? 'Update Category' : 'Save Category' }}
                        </button>
                    </form>
                </section>

                <section>
                    <div class="mb-4 flex items-center justify-between gap-3">
                        <h2 class="text-lg font-semibold">Categories</h2>
                        <span class="text-xs text-slate-500">{{ $categories->total() }} total</span>
                    </div>

                    <div class="overflow-x-auto rounded-2xl border border-slate-200 bg-white">
                        <table class="min-w-full text-left text-sm">
                            <thead class="bg-slate-100 text-slate-700">
                                <tr>
                                    <th class="px-4 py-3">Name (EN / KA)</th>
                                    <th class="px-4 py-3">Slug</th>
                                    <th class="px-4 py-3">Posts</th>
                                    <th class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    @php
                                        $nameEn = $category->getTranslation('name', 'en', false);
                                        $nameKa = $category->getTranslation('name', 'ka', false);
                                        $descriptionEn = $category->getTranslation('description', 'en', false);
                                        $descriptionKa = $category->getTranslation('description', 'ka', false);
                                    @endphp
                                    <tr class="border-t border-slate-200 {{ $isEditing && $editingCategory->is($category) ? 'bg-cyan-50' : '' }}">
                                        <td class="px-4 py-3">
                                            <p class="font-medium text-slate-900">{{ $nameEn ?: '-' }}</p>
                                            <p class="text-xs text-slate-500">{{ $nameKa ?: '-' }}</p>
                                            @if ($descriptionEn || $descriptionKa)
                                                <p class="mt-1 text-xs text-slate-500">{{ $descriptionEn ?: $descriptionKa }}</p>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3 text-slate-600">{{ $category->slug }}</td>
                                        <td class="px-4 py-3">{{ $category->posts_count }}</td>
                                        <td class="px-4 py-3">
                                            <div class="flex flex-wrap gap-2">
                                                <a href="{{ route('admin.categories.index', ['edit' => $category->id]) }}" class="rounded-full border border-slate-200 px-3 py-1 text-xs transition hover:bg-slate-100">Edit</a>

                                                <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" onsubmit="return confirm('Delete this category?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="rounded-full border border-rose-300 px-3 py-1 text-xs text-rose-700 transition hover:bg-rose-50">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-6 text-center text-slate-500">No categories found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">{{ $categories->links() }}</div>
                </section>
            </div>
        </div>
    </main>
@endsection
