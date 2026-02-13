@extends('front.layout')

@section('blog')
    <main class="px-4 pb-10 md:px-16 lg:px-24">
        <div
            class="mx-auto mt-14 max-w-7xl rounded-3xl border border-slate-200/80 bg-slate-50/95 p-6 text-slate-900 shadow-xl md:mt-16 md:p-10 lg:p-12">
            <section class="mx-auto max-w-6xl text-center">
                <h1 class="mx-auto mt-6 max-w-3xl text-4xl/12 font-semibold tracking-tight md:text-6xl/18">
                    {{__('EWS Blog')}}
                </h1>
                <p class="mx-auto mt-5 max-w-2xl text-sm/7 text-slate-600 md:text-base/8">
                    {{__('blog_description')}}
                </p>
                <div class="mx-auto mt-6 flex max-w-3xl flex-wrap justify-center gap-2">
                    @foreach ($categories as $category)
                        <a href="#"
                           class="rounded-full border border-slate-200 bg-white px-3 py-1.5 text-xs font-medium text-slate-700 transition hover:border-emerald-300 hover:text-emerald-700">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </section>

            @if ($featuredPost)
                <section class="mx-auto mt-12 grid max-w-6xl gap-6 lg:grid-cols-1">
                    <article class="glass overflow-hidden rounded-2xl col-span-full">
                        <img
                            src="{{ $featuredPost->getFirstMediaUrl('featured_image', 'card') ?: $featuredPost->getFirstMediaUrl('featured_image') }}"
                            alt="{{ $featuredPost->title }}" class="h-56 w-full object-cover md:h-72"/>
                        <div class="p-6">
                            <p class="text-xs uppercase tracking-[0.24em] text-emerald-600 text-center">
                                {{__('Weekly Featured story')}}
                            </p>
                            <h2 class="mt-4 text-3xl/10 font-semibold md:text-4xl/12 text-center">
                                {{ $featuredPost->title }}
                            </h2>
                            @if ($featuredPost->excerpt)
                                <p class="mt-4 max-w-2xl text-sm/7 text-slate-600 text-center">{{ $featuredPost->excerpt }}</p>
                            @endif
                            <div class="mt-6 flex flex-wrap items-center justify-center gap-3 text-xs text-slate-500">
                                @foreach ($featuredPost->categories as $cat)
                                    <span
                                        class="rounded-full bg-slate-100 px-3 py-1 text-slate-700">{{ $cat->name }}</span>
                                @endforeach
                            </div>
                            <div class="flex justify-center">
                                <a href="{{ route('blog.show', $featuredPost->slug) }}"
                                   class="mt-8 inline-flex rounded-full bg-slate-900 px-6 py-2.5 text-sm font-medium text-white transition hover:bg-slate-700">
                                    {{__('Read article')}}
                                </a>
                            </div>
                        </div>
                    </article>
                </section>
            @endif

            <section class="mx-auto mt-8 grid max-w-6xl gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                    <article
                        class="group overflow-hidden rounded-2xl border border-slate-200 bg-white transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                        <img
                            src="{{ $post->getFirstMediaUrl('featured_image', 'thumb') ?: $post->getFirstMediaUrl('featured_image') }}"
                            alt="{{ $post->title }}" class="h-44 w-full object-cover"/>
                        <div class="p-5">
                            @if ($post->categories->isNotEmpty())
                                <p class="text-xs uppercase tracking-[0.2em] text-slate-500">{{ $post->categories->first()->name }}</p>
                            @endif
                            <a href="{{ route('blog.show', $post->slug) }}">
                                <h3 class="mt-3 text-xl/8 font-medium text-slate-900 transition group-hover:text-emerald-700">
                                    {{ $post->title }}
                                </h3>
                            </a>
                            {{--                            @if ($post->published_at)--}}
                            {{--                                <p class="mt-5 text-xs text-slate-500">{{ $post->published_at->format('M d, Y') }}</p>--}}
                            {{--                            @endif--}}
                            <a href="{{ route('blog.show', $post->slug) }}"
                               class="mt-4 inline-flex items-center gap-2 text-sm text-slate-700 transition group-hover:text-slate-900">
                                {{__('Read more')}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" aria-hidden="true">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </section>

            @if ($posts->hasPages())
                <div class="mx-auto mt-8 max-w-6xl">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
        @include('front.components.contact')
    </main>
@endsection
