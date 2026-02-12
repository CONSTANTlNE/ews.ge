@extends('front.layout')

@section('blog')
    <main class="px-2 pb-10 sm:px-4 md:px-16 lg:px-24">
        <div class="mx-auto mt-14 max-w-7xl rounded-2xl border border-slate-200/80 bg-slate-50/95 p-3 text-slate-900 shadow-xl sm:p-5 md:mt-16 md:rounded-3xl md:p-10 lg:p-12">
        <div class="mx-auto grid max-w-6xl gap-6 lg:grid-cols-4">
        <article class="min-w-0 lg:col-span-3">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">
                @if ($post->categories->isNotEmpty())
                    {{ $post->categories->first()->name }}
                @endif
                @if ($post->published_at)
                     {{ $post->published_at->format('M d, Y') }}
                @endif
            </p>
            <h1 class="mt-4 text-3xl/10 font-semibold tracking-tight sm:text-4xl/12 md:mt-5 md:text-5xl/14">{{ $post->title }}</h1>
            @if ($post->excerpt)
                <p class="mt-5 max-w-3xl text-sm/7 text-slate-600 md:text-base/8">{{ $post->excerpt }}</p>
            @endif

            @if ($post->getFirstMediaUrl('featured_image'))
                <img src="{{ $post->getFirstMediaUrl('featured_image', 'card') ?: $post->getFirstMediaUrl('featured_image') }}" alt="{{ $post->title }}" class="mt-7 h-64 w-full rounded-xl object-cover sm:h-72 sm:rounded-2xl md:mt-10 md:h-96" />
            @endif

            <div class="prose-body mt-6 rounded-xl border border-slate-200 bg-white p-4 text-slate-700 sm:mt-8 sm:rounded-2xl sm:p-6 md:p-8 md:text-base/8">
                {!! str_replace('&nbsp;', ' ', $post->body) !!}
            </div>
        </article>

        <aside class="rounded-xl border border-slate-200 bg-white p-4 sm:p-5 lg:sticky lg:top-24 lg:h-max">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Categories</p>
            <div class="mt-4 flex flex-wrap gap-2 lg:flex-col">
                @foreach ($categories as $category)
                    <a href="#" class="rounded-full border px-3 py-1.5 text-xs font-medium transition {{ $post->categories->contains($category->id) ? 'border-emerald-300 bg-emerald-50 text-emerald-700' : 'border-slate-200 bg-white text-slate-700 hover:border-emerald-300 hover:text-emerald-700' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </aside>
        </div>

        @if ($relatedPosts->isNotEmpty())
            <section class="mx-auto mt-12 max-w-6xl">
                <div class="flex items-end justify-between gap-4">
                    <h3 class="text-2xl font-semibold">Related posts</h3>
                    <a href="{{ route('blog.index') }}" class="text-sm text-slate-600 transition hover:text-slate-900">Back to blog</a>
                </div>

                <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($relatedPosts as $related)
                        <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                            <img src="{{ $related->getFirstMediaUrl('featured_image', 'thumb') ?: $related->getFirstMediaUrl('featured_image') }}" alt="{{ $related->title }}" class="h-44 w-full object-cover" />
                            <div class="p-5">
                                @if ($related->categories->isNotEmpty())
                                    <p class="text-xs uppercase tracking-[0.2em] text-slate-500">{{ $related->categories->first()->name }}</p>
                                @endif
                                <h4 class="mt-3 text-xl/8 font-medium text-slate-900 transition group-hover:text-emerald-700">
                                    {{ $related->title }}
                                </h4>
                                @if ($related->published_at)
                                    <p class="mt-5 text-xs text-slate-500">{{ $related->published_at->format('M d, Y') }}</p>
                                @endif
                                <a href="{{ route('blog.show', $related->slug) }}" class="mt-4 inline-flex items-center gap-2 text-sm text-slate-700 transition group-hover:text-slate-900">
                                    Read more
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="mx-auto mt-12 max-w-6xl">
                <div class="flex items-end justify-between gap-4">
                    <h3 class="text-2xl font-semibold">Similar Posts Slider</h3>
                    <p class="text-sm text-slate-500">Swipe or use arrows</p>
                </div>

                <div class="blog-post-splide splide mt-6" data-splide-posts>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($relatedPosts as $related)
                                <li class="splide__slide">
                                    <article class="group h-full overflow-hidden rounded-2xl border border-slate-200 bg-white transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                                        <img src="{{ $related->getFirstMediaUrl('featured_image', 'thumb') ?: $related->getFirstMediaUrl('featured_image') }}" alt="{{ $related->title }}" class="h-44 w-full object-cover" />
                                        <div class="p-5">
                                            @if ($related->categories->isNotEmpty())
                                                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">{{ $related->categories->first()->name }}</p>
                                            @endif
                                            <h4 class="mt-3 text-xl/8 font-medium text-slate-900 transition group-hover:text-emerald-700">
                                                {{ $related->title }}
                                            </h4>
                                            @if ($related->published_at)
                                                <p class="mt-5 text-xs text-slate-500">{{ $related->published_at->format('M d, Y') }}</p>
                                            @endif
                                            <a href="{{ route('blog.show', $related->slug) }}" class="mt-4 inline-flex items-center gap-2 text-sm text-slate-700 transition group-hover:text-slate-900">
                                                Read article
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </article>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>
        @endif

        </div>
    </main>
@endsection
