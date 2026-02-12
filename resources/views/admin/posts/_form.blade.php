@php
    $locales = $locales ?? ['en', 'ka'];
    $selectedCategoryIds = old('categories', isset($post) ? $post->categories->pluck('id')->all() : []);
    $titleTranslations = old('title', isset($post) ? $post->getTranslations('title') : []);
    $bodyTranslations = old('body', isset($post) ? $post->getTranslations('body') : []);
@endphp

<div class="grid gap-4 md:grid-cols-2">
    @foreach ($locales as $locale)
        <label class="space-y-2">
            <span class="text-sm text-white/90">Title ({{ strtoupper($locale) }})</span>
            <input type="text" name="title[{{ $locale }}]" value="{{ $titleTranslations[$locale] ?? '' }}" required class="w-full rounded-lg border border-white/20 bg-white/10 px-3 py-2 outline-none focus:border-cyan-300">
        </label>
    @endforeach

    <label class="space-y-2 md:col-span-2">
        <span class="text-sm text-white/90">Slug (optional)</span>
        <input type="text" name="slug" value="{{ old('slug', $post->slug ?? '') }}" class="w-full rounded-lg border border-white/20 bg-white/10 px-3 py-2 outline-none focus:border-cyan-300">
    </label>

    <label class="space-y-2 md:col-span-2">
        <span class="text-sm text-white/90">Excerpt</span>
        <textarea name="excerpt" rows="3" class="w-full rounded-lg border border-white/20 bg-white/10 px-3 py-2 outline-none focus:border-cyan-300">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
    </label>

    @foreach ($locales as $locale)
        <label class="space-y-2 md:col-span-2">
            <span class="text-sm text-white/90">Body ({{ strtoupper($locale) }})</span>
            <textarea name="body[{{ $locale }}]" rows="8" required class="w-full rounded-lg border border-white/20 bg-white/10 px-3 py-2 outline-none focus:border-cyan-300">{{ $bodyTranslations[$locale] ?? '' }}</textarea>
        </label>
    @endforeach

    <label class="space-y-2">
        <span class="text-sm text-white/90">Publish At</span>
        <input type="datetime-local" name="published_at" value="{{ old('published_at', isset($post) && $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}" class="w-full rounded-lg border border-white/20 bg-white/10 px-3 py-2 outline-none focus:border-cyan-300">
    </label>

    <label class="inline-flex items-center gap-2 md:col-span-2">
        <input type="checkbox" name="is_published" value="1" {{ old('is_published', $post->is_published ?? false) ? 'checked' : '' }} class="size-4 rounded border border-white/20 bg-white/10">
        <span class="text-sm text-white/90">Published</span>
    </label>

    <div class="space-y-2 md:col-span-2">
        <p class="text-sm text-white/90">Categories</p>
        <div class="grid gap-2 sm:grid-cols-2 md:grid-cols-3">
            @foreach ($categories as $category)
                @php
                    $categoryName = $category->getTranslation('name', app()->getLocale(), false)
                        ?: $category->getTranslation('name', 'en', false)
                        ?: $category->slug;
                @endphp
                <label class="inline-flex items-center gap-2 rounded-lg border border-white/20 bg-white/10 px-3 py-2">
                    <input type="checkbox" name="categories[]" value="{{ $category->id }}" {{ in_array($category->id, $selectedCategoryIds, true) ? 'checked' : '' }} class="size-4 rounded border border-white/20 bg-white/10">
                    <span class="text-sm">{{ $categoryName }}</span>
                </label>
            @endforeach
        </div>
    </div>
</div>
