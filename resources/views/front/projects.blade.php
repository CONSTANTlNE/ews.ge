@extends('front.layout')

@section('projects')
    <main class="px-4 pb-10 md:px-16 lg:px-24">
        <section class="mx-auto mt-16 max-w-6xl text-center">
            <p class="inline-flex items-center gap-2 rounded-full glass px-4 py-1.5 text-xs tracking-wide text-gray-200">
                <span class="size-2 rounded-full bg-cyan-300"></span>
                Web development portfolio
            </p>
            <h1 class="mx-auto mt-6 max-w-3xl text-4xl/12 font-semibold tracking-tight md:text-6xl/18">Client Projects We Build to Scale</h1>
            <p class="mx-auto mt-5 max-w-2xl text-sm/7 text-gray-100 md:text-base/8">
                Production-ready websites and applications engineered for performance, maintainability, and business impact.
            </p>
        </section>

        <section class="mx-auto mt-12 grid max-w-6xl gap-6 lg:grid-cols-1">
            <article class="glass overflow-hidden rounded-2xl col-span-full">
            <img src="{{ $featuredProject['image'] }}" alt="{{ $featuredProject['title'] }}" class="h-56 w-full object-cover md:h-72" />
                <div class="p-6">
                    <p class="text-xs uppercase tracking-[0.24em] text-cyan-200">Featured project</p>
                    <h2 class="mt-4 text-3xl/10 font-semibold md:text-4xl/12">{{ $featuredProject['title'] }}</h2>
                    <p class="mt-4 max-w-2xl text-sm/7 text-gray-100">{{ $featuredProject['summary'] }}</p>
                    <div class="mt-6 flex flex-wrap items-center gap-2 text-xs text-gray-200">
                        @foreach ($featuredProject['stack'] as $tool)
                            <span class="rounded-full bg-white/10 px-3 py-1">{{ $tool }}</span>
                        @endforeach
                    </div>
                    <a href="{{ route('projects.show', $featuredProject['slug']) }}" class="btn glass mt-8 inline-flex">View case study</a>
                </div>
            </article>
        </section>

        <section class="mx-auto mt-8 grid max-w-6xl gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($projects as $item)
                <article class="group glass overflow-hidden rounded-2xl transition-all duration-300 hover:-translate-y-1">
                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="h-44 w-full object-cover" />
                    <div class="p-5">
                        <p class="text-xs uppercase tracking-[0.2em] text-gray-300">{{ $item['year'] }} . {{ $item['duration'] }}</p>
                        <h3 class="mt-3 text-xl/8 font-medium text-white transition group-hover:text-cyan-200">{{ $item['title'] }}</h3>
                        <p class="mt-3 text-sm/6 text-gray-100">{{ $item['description'] }}</p>
                        <p class="mt-4 text-xs text-cyan-200">{{ $item['result'] }}</p>
                        <a href="{{ route('projects.show', $item['slug']) }}" class="mt-4 inline-flex items-center gap-2 text-sm text-gray-100 transition group-hover:text-white">
                            Open project
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </section>
    </main>
@endsection
