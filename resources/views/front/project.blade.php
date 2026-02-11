@extends('front.layout')

@section('project')
    <main class="px-4 pb-10 md:px-16 lg:px-24">
        <article class="mx-auto mt-16 max-w-6xl glass overflow-hidden rounded-2xl">
            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="h-64 w-full object-cover md:h-[420px]" />
            <div class="p-6 md:p-8">
                <p class="text-xs uppercase tracking-[0.2em] text-cyan-200">{{ $project['year'] }} . {{ $project['duration'] }}</p>
                <h1 class="mt-4 text-4xl/12 font-semibold tracking-tight md:text-5xl/14">{{ $project['title'] }}</h1>
                <p class="mt-5 max-w-3xl text-sm/7 text-gray-100 md:text-base/8">{{ $project['summary'] }}</p>

                <div class="mt-6 flex flex-wrap gap-2 text-xs text-gray-100">
                    @foreach ($project['stack'] as $tool)
                        <span class="rounded-full bg-white/10 px-3 py-1">{{ $tool }}</span>
                    @endforeach
                </div>
            </div>
        </article>

        <section class="mx-auto mt-8 grid max-w-6xl gap-6 lg:grid-cols-3">
            <div class="glass rounded-2xl p-6 lg:col-span-2">
                <h2 class="text-2xl/9 font-semibold">Project Description</h2>
                <p class="mt-4 text-sm/7 text-gray-100 md:text-base/8">{{ $project['description'] }}</p>

                <h3 class="mt-8 text-xl font-semibold text-cyan-200">Challenge</h3>
                <p class="mt-3 text-sm/7 text-gray-100 md:text-base/8">{{ $project['challenge'] }}</p>

                <h3 class="mt-8 text-xl font-semibold text-cyan-200">Approach</h3>
                <p class="mt-3 text-sm/7 text-gray-100 md:text-base/8">{{ $project['approach'] }}</p>

                <h3 class="mt-8 text-xl font-semibold text-cyan-200">Impact</h3>
                <p class="mt-3 text-sm/7 text-gray-100 md:text-base/8">{{ $project['impact'] }}</p>
            </div>

            <aside class="glass rounded-2xl p-6">
                <h3 class="text-lg font-semibold">Outcome</h3>
                <p class="mt-3 text-2xl font-semibold text-cyan-200">{{ $project['result'] }}</p>

                <div class="mt-8 border-t border-white/20 pt-6">
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-300">Need similar results?</p>
                    <p class="mt-3 text-sm/6 text-gray-100">We design and build business-focused web products with speed and quality.</p>
                    <a href="{{ route('projects.index') }}" class="btn glass mt-5 inline-flex w-full justify-center">See more projects</a>
                </div>
            </aside>
        </section>

        <section class="mx-auto mt-10 max-w-6xl">
            <div class="flex items-end justify-between gap-4">
                <h3 class="text-2xl font-semibold">Related Projects</h3>
                <a href="{{ route('projects.index') }}" class="text-sm text-gray-200 transition hover:text-white">Back to projects</a>
            </div>

            <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($relatedProjects as $item)
                    <article class="group glass overflow-hidden rounded-2xl transition-all duration-300 hover:-translate-y-1">
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="h-40 w-full object-cover" />
                        <div class="p-5">
                            <p class="text-xs uppercase tracking-[0.2em] text-gray-300">{{ $item['year'] }} . {{ $item['duration'] }}</p>
                            <h4 class="mt-3 text-xl/8 font-medium text-white transition group-hover:text-cyan-200">{{ $item['title'] }}</h4>
                            <p class="mt-3 text-sm/6 text-gray-100">{{ $item['summary'] }}</p>
                            <a href="{{ route('projects.show', $item['slug']) }}" class="mt-4 inline-flex items-center gap-2 text-sm text-gray-100 transition group-hover:text-white">
                                View details
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
    </main>
@endsection
