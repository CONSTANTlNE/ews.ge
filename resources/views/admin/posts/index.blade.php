@extends('front.layout')

@section('index')
    @php
        $isEditing = $editingPost !== null;
        $editingTitle = $isEditing ? $editingPost->getTranslations('title') : [];
        $editingBody = $isEditing ? $editingPost->getTranslations('body') : [];
        $selectedCategoryIds = old('categories', $isEditing ? $editingPost->categories->pluck('id')->all() : []);
        $editingImageUrl = $isEditing ? ($editingPost->getFirstMediaUrl('featured_image', 'thumb') ?: $editingPost->getFirstMediaUrl('featured_image')) : null;
    @endphp

    <main class="px-4 pb-10 md:px-16 lg:px-24">
        <div class="mx-auto mt-14 max-w-7xl rounded-3xl border border-slate-200/80 bg-slate-50/95 p-6 text-slate-900 shadow-xl md:mt-16 md:p-10 lg:p-12">
            <section class="mx-auto max-w-6xl text-center">
                <h1 class="mx-auto mt-6 max-w-3xl text-4xl/12 font-semibold tracking-tight md:text-6xl/18">Post Management</h1>
                <p class="mx-auto mt-5 max-w-2xl text-sm/7 text-slate-600 md:text-base/8">Create, edit, and delete posts from one page.</p>
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

            <div class="mx-auto mt-10 max-w-6xl space-y-6">
                <section class="rounded-2xl border border-slate-200 bg-white p-5">
                    <div class="mb-4 flex items-center justify-between gap-3">
                        <h2 class="text-lg font-semibold">{{ $isEditing ? 'Edit Post' : 'Create Post' }}</h2>

                        @if ($isEditing)
                            <a href="{{ route('admin.posts.index') }}" class="rounded-full border border-slate-200 px-3 py-1.5 text-xs transition hover:bg-slate-100">Cancel</a>
                        @endif
                    </div>

                    <form method="POST" action="{{ $isEditing ? route('admin.posts.update', ['post' => $editingPost, 'edit' => $editingPost->id]) : route('admin.posts.store') }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        @if ($isEditing)
                            @method('PUT')
                        @endif

                        <div data-locale-tabs class="space-y-3 rounded-xl border border-slate-200 bg-slate-50 p-3" data-initial-locale="{{ old('active_locale', 'en') }}">
                            <div class="flex flex-wrap gap-2">
                                @foreach ($locales as $locale)
                                    <button type="button" data-locale-tab-button="{{ $locale }}" class="rounded-full border border-slate-300 px-3 py-1.5 text-xs font-medium text-slate-600 transition hover:bg-slate-100">
                                        {{ strtoupper($locale) }}
                                    </button>
                                @endforeach
                            </div>

                            <input type="hidden" name="active_locale" value="{{ old('active_locale', 'en') }}" data-locale-active-input>

                            @foreach ($locales as $locale)
                                <div data-locale-tab-panel="{{ $locale }}" class="space-y-3">
                                    <label class="space-y-2">
                                        <span class="text-sm text-slate-700">Title ({{ strtoupper($locale) }})</span>
                                        <input type="text" name="title[{{ $locale }}]" value="{{ old("title.$locale", $editingTitle[$locale] ?? '') }}" required class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500">
                                    </label>

                                    <div class="space-y-2">
                                        <span class="text-sm text-slate-700">Body ({{ strtoupper($locale) }})</span>
                                        <input type="hidden" name="body[{{ $locale }}]" value="{{ old("body.$locale", $editingBody[$locale] ?? '') }}" data-quill-input>
                                        <div data-quill-editor class="min-h-52 rounded-lg border border-slate-200 bg-white"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <label class="space-y-2">
                            <span class="text-sm text-slate-700">Slug (optional)</span>
                            <input type="text" name="slug" value="{{ old('slug', $isEditing ? $editingPost->slug : '') }}" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500">
                        </label>

                        <label class="space-y-2">
                            <span class="text-sm text-slate-700">Excerpt</span>
                            <textarea name="excerpt" rows="3" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500">{{ old('excerpt', $isEditing ? $editingPost->excerpt : '') }}</textarea>
                        </label>

                        <div class="space-y-2">
                            <span class="text-sm text-slate-700">Featured Image</span>
                            <input type="file" name="featured_image" accept="image/jpeg,image/png,image/webp,image/avif" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm outline-none focus:border-cyan-500">
                            <p class="text-xs text-slate-500">Uploading a new image will replace the old one.</p>

                            @if ($editingImageUrl)
                                <div class="overflow-hidden rounded-lg border border-slate-200 bg-slate-100">
                                    <img src="{{ $editingImageUrl }}" alt="Current featured image" class="h-40 w-full object-cover">
                                </div>
                            @endif
                        </div>

                        <label class="space-y-2">
                            <span class="text-sm text-slate-700">Publish At</span>
                            <input type="datetime-local" name="published_at" value="{{ old('published_at', $isEditing && $editingPost->published_at ? $editingPost->published_at->format('Y-m-d\TH:i') : '') }}" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 outline-none focus:border-cyan-500">
                        </label>

                        <label class="inline-flex items-center gap-2">
                            <input type="checkbox" name="is_published" value="1" {{ old('is_published', $isEditing ? $editingPost->is_published : false) ? 'checked' : '' }} class="size-4 rounded border border-slate-300">
                            <span class="text-sm text-slate-700">Published</span>
                        </label>

                        <div class="space-y-2">
                            <p class="text-sm text-slate-700">Categories</p>
                            <div class="grid gap-2 sm:grid-cols-2">
                                @foreach ($categories as $category)
                                    @php
                                        $categoryName = $category->getTranslation('name', app()->getLocale(), false)
                                            ?: $category->getTranslation('name', 'en', false)
                                            ?: $category->slug;
                                    @endphp
                                    <label class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2">
                                        <input type="checkbox" name="categories[]" value="{{ $category->id }}" {{ in_array($category->id, $selectedCategoryIds, true) ? 'checked' : '' }} class="size-4 rounded border border-slate-300">
                                        <span class="text-sm">{{ $categoryName }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <button type="submit" class="rounded-full bg-slate-900 px-5 py-2 text-sm font-medium text-white transition hover:bg-slate-700">
                            {{ $isEditing ? 'Update Post' : 'Save Post' }}
                        </button>
                    </form>
                </section>

                <section>
                    <div class="mb-4 flex items-center justify-between gap-3">
                        <h2 class="text-lg font-semibold">Posts</h2>
                        <span class="text-xs text-slate-500">{{ $posts->total() }} total</span>
                    </div>

                    <div class="overflow-x-auto rounded-2xl border border-slate-200 bg-white">
                        <table class="min-w-full text-left text-sm">
                            <thead class="bg-slate-100 text-slate-700">
                                <tr>
                                    <th class="px-4 py-3">Image</th>
                                    <th class="px-4 py-3">Title (EN / KA)</th>
                                    <th class="px-4 py-3">Slug</th>
                                    <th class="px-4 py-3">Categories</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    @php
                                        $titleEn = $post->getTranslation('title', 'en', false);
                                        $titleKa = $post->getTranslation('title', 'ka', false);
                                        $postImage = $post->getFirstMediaUrl('featured_image', 'thumb') ?: $post->getFirstMediaUrl('featured_image');
                                    @endphp
                                    <tr class="border-t border-slate-200 {{ $isEditing && $editingPost->is($post) ? 'bg-cyan-50' : '' }}">
                                        <td class="px-4 py-3">
                                            @if ($postImage)
                                                <img src="{{ $postImage }}" alt="{{ $titleEn ?: 'Post image' }}" class="h-14 w-20 rounded-md border border-slate-200 object-cover">
                                            @else
                                                <div class="flex h-14 w-20 items-center justify-center rounded-md border border-dashed border-slate-300 text-[10px] text-slate-400">No image</div>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3">
                                            <p>{{ $titleEn ?: '-' }}</p>
                                            <p class="text-xs text-slate-500">{{ $titleKa ?: '-' }}</p>
                                        </td>
                                        <td class="px-4 py-3 text-slate-600">{{ $post->slug }}</td>
                                        <td class="px-4 py-3">
                                            <div class="flex flex-wrap gap-1">
                                                @foreach ($post->categories as $category)
                                                    @php
                                                        $categoryName = $category->getTranslation('name', app()->getLocale(), false)
                                                            ?: $category->getTranslation('name', 'en', false)
                                                            ?: $category->slug;
                                                    @endphp
                                                    <span class="rounded-full bg-slate-100 px-2 py-0.5 text-xs text-slate-700">{{ $categoryName }}</span>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">{{ $post->is_published ? 'Published' : 'Draft' }}</td>
                                        <td class="px-4 py-3">
                                            <div class="flex flex-wrap gap-2">
                                                <a href="{{ route('admin.posts.index', ['edit' => $post->id]) }}" class="rounded-full border border-slate-200 px-3 py-1 text-xs transition hover:bg-slate-100">Edit</a>

                                                <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" onsubmit="return confirm('Delete this post?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="rounded-full border border-rose-300 px-3 py-1 text-xs text-rose-700 transition hover:bg-rose-50">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-4 py-6 text-center text-slate-500">No posts found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">{{ $posts->links() }}</div>
                </section>
            </div>
        </div>
    </main>
@endsection
