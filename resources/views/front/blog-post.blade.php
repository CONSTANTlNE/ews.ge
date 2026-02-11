@extends('front.layout')

@section('blog')
    <main class="px-4 pb-10 md:px-16 lg:px-24">
        <div class="mx-auto mt-14 max-w-7xl rounded-3xl border border-slate-200/80 bg-slate-50/95 p-6 text-slate-900 shadow-xl md:mt-16 md:p-10 lg:p-12">
        <article class="mx-auto max-w-4xl">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">{{ $post['tag'] }} . {{ $post['time'] }}</p>
            <h1 class="mt-5 text-4xl/12 font-semibold tracking-tight md:text-5xl/14">{{ $post['title'] }}</h1>
            <p class="mt-5 max-w-3xl text-sm/7 text-slate-600 md:text-base/8">
                We share clear, practical notes from our product and engineering teams so you can adapt the same workflows in your own stack.
            </p>

            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="mt-10 h-72 w-full rounded-2xl object-cover md:h-96" />

            <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 text-sm/7 text-slate-700 md:p-8 md:text-base/8">
                <h2 class="text-2xl/9 font-semibold text-slate-900">Why this matters</h2>
                <p class="mt-4">
                    Teams often waste cycles switching between tools, status updates, and fragmented reviews. This approach keeps planning, execution,
                    and handoff in one loop so decisions are faster and quality stays high.
                </p>

                <h2 class="mt-8 text-2xl/9 font-semibold text-slate-900">How we apply it</h2>
                <p class="mt-4">
                    Start with a short prompt, define clear guardrails, and automate repetitive checks. Human review remains the final gate, but most
                    of the mechanical work is done before anyone opens the pull request.
                </p>

                <h2 class="mt-8 text-2xl/9 font-semibold text-slate-900">Takeaway</h2>
                <p class="mt-4">
                    Keep prompts focused, connect outputs to one source of truth, and measure cycle time weekly. Small improvements compound quickly
                    when your workflows are consistent.
                </p>
            </div>
        </article>

        <section class="mx-auto mt-12 max-w-6xl">
            <div class="flex items-end justify-between gap-4">
                <h3 class="text-2xl font-semibold">Related posts</h3>
                <a href="{{ route('blog.index') }}" class="text-sm text-slate-600 transition hover:text-slate-900">Back to blog</a>
            </div>

            <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($relatedPosts as $related)
                    <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                        <img src="{{ $related['image'] }}" alt="{{ $related['title'] }}" class="h-44 w-full object-cover" />
                        <div class="p-5">
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">{{ $related['tag'] }}</p>
                            <h4 class="mt-3 text-xl/8 font-medium text-slate-900 transition group-hover:text-emerald-700">
                                {{ $related['title'] }}
                            </h4>
                            <p class="mt-5 text-xs text-slate-500">{{ $related['time'] }}</p>
                            <a href="{{ route('blog.show', $related['slug']) }}" class="mt-4 inline-flex items-center gap-2 text-sm text-slate-700 transition group-hover:text-slate-900">
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
                                    <img src="{{ $related['image'] }}" alt="{{ $related['title'] }}" class="h-44 w-full object-cover" />
                                    <div class="p-5">
                                        <p class="text-xs uppercase tracking-[0.2em] text-slate-500">{{ $related['tag'] }}</p>
                                        <h4 class="mt-3 text-xl/8 font-medium text-slate-900 transition group-hover:text-emerald-700">
                                            {{ $related['title'] }}
                                        </h4>
                                        <p class="mt-5 text-xs text-slate-500">{{ $related['time'] }}</p>
                                        <a href="{{ route('blog.show', $related['slug']) }}" class="mt-4 inline-flex items-center gap-2 text-sm text-slate-700 transition group-hover:text-slate-900">
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

        </div>
    </main>
@endsection
