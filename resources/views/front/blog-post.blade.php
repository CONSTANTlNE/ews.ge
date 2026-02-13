@extends('front.layout')

@section('blog')
    <main class="px-2 pb-10 sm:px-4 md:px-16 lg:px-24">
{{--        bg-slate-50/95--}}
{{--        border-slate-200/80--}}
        <div class="mx-auto mt-14 max-w-7xl rounded-2xl border border-white/20 p-3 shadow-xl sm:p-5 md:mt-16 md:rounded-3xl md:p-10 lg:p-12 glass">
        <div class="mx-auto grid max-w-6xl gap-6 lg:grid-cols-4">
        <article class="min-w-0 lg:col-span-3">
            <p class="text-xs uppercase tracking-[0.2em] text-gray-300">
                @if ($post->categories->isNotEmpty())
                    {{ $post->categories->first()->name }}
                @endif
            </p>
            <h1 class="mt-4 text-3xl/10 font-semibold tracking-tight text-white sm:text-4xl/12 md:mt-5 md:text-5xl/14">{{ $post->title }}</h1>
            @if ($post->excerpt)
                <p class="mt-5 max-w-3xl text-sm/7 text-gray-200 md:text-base/8">{{ $post->excerpt }}</p>
            @endif

            @if ($post->getFirstMediaUrl('featured_image'))
                <img src="{{ $post->getFirstMediaUrl('featured_image', 'card') ?: $post->getFirstMediaUrl('featured_image') }}" alt="{{ $post->title }}" class="mt-7 h-64 w-full rounded-xl object-cover sm:h-72 sm:rounded-2xl md:mt-10 md:h-96" />
            @endif

            <div class="prose-body mt-6 rounded-xl border border-white/20 p-4 text-gray-100 sm:mt-8 sm:rounded-2xl sm:p-6 md:p-8 md:text-base/8 glass">
                {!! str_replace('&nbsp;', ' ', $post->body) !!}
            </div>
        </article>

        <aside class="rounded-xl border border-white/20 glass p-4 sm:p-5 lg:sticky lg:top-24 lg:h-max">
            <p class="text-xs uppercase tracking-[0.2em] text-gray-300">{{__('Categories')}}</p>
            <div class="mt-4 flex flex-wrap gap-2 lg:flex-col">
                @foreach ($categories as $category)
                    <a href="#" class="rounded-full border px-3 py-1.5 text-xs font-medium transition {{ $post->categories->contains($category->id) ? 'border-cyan-300/40 bg-cyan-400/15 text-cyan-200' : 'border-white/20 bg-white/10 text-gray-200 hover:border-cyan-300/40 hover:text-cyan-200' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </aside>
        </div>

        @if ($relatedPosts->isNotEmpty())
            <section class="mx-auto mt-12 max-w-6xl">
                <div class="flex items-end justify-between gap-4">
                    <h3 class="text-2xl font-semibold text-white">{{__('Related posts')}}</h3>
                    <a href="{{ route('blog.index') }}" class="text-sm text-gray-300 transition hover:text-white">{{__('Back to blog')}}</a>
                </div>

                <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($relatedPosts as $related)
                        <article class="group overflow-hidden rounded-2xl glass transition-all duration-300 hover:-translate-y-1 hover:bg-white/15">
                            <img src="{{ $related->getFirstMediaUrl('featured_image', 'thumb') ?: $related->getFirstMediaUrl('featured_image') }}" alt="{{ $related->title }}" class="h-44 w-full object-cover" />
                            <div class="p-5">
                                @if ($related->categories->isNotEmpty())
                                    <p class="text-xs uppercase tracking-[0.2em] text-gray-300">{{ $related->categories->first()->name }}</p>
                                @endif
                                <h4 class="mt-3 text-xl/8 font-medium text-white transition group-hover:text-cyan-200">
                                    {{ $related->title }}
                                </h4>
                                <a href="{{ route('blog.show', $related->slug) }}" class="mt-4 inline-flex items-center gap-2 text-sm text-gray-300 transition group-hover:text-white">
                                   {{__('Read more')}}
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

        @endif

        </div>
        @include('front.components.contact')
    </main>
@endsection
