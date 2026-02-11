@extends('front.layout')

@section('blog')
    @php
        $posts = [
            [
                'slug' => 'prompt-patterns-reliable-agent-workflows',
                'title' => '5 prompt patterns for reliable agent workflows',
                'tag' => 'Prompting',
                'time' => '6 min read',
                'image' => 'https://images.unsplash.com/photo-1526379095098-d400fd0bf935?auto=format&fit=crop&w=1400&q=80',
            ],
            [
                'slug' => 'designing-alert-pipelines-teams-trust',
                'title' => 'Designing alert pipelines that teams actually trust',
                'tag' => 'Operations',
                'time' => '7 min read',
                'image' => 'https://images.unsplash.com/photo-1526379095098-d400fd0bf935?auto=format&fit=crop&w=1400&q=80',
            ],
            [
                'slug' => 'task-planner-v2-why-it-changed',
                'title' => 'What changed in our v2 task planner and why',
                'tag' => 'Product',
                'time' => '5 min read',
                'image' => 'https://images.unsplash.com/photo-1518773553398-650c184e0bb3?auto=format&fit=crop&w=1400&q=80',
            ],
            [
                'slug' => 'safer-automations-with-guardrails',
                'title' => 'Building safer automations with guardrails and scopes',
                'tag' => 'Security',
                'time' => '9 min read',
                'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&w=1400&q=80',
            ],
            [
                'slug' => 'ticket-to-merge-autonomous-dev-loop',
                'title' => 'From ticket to merge: an autonomous dev loop',
                'tag' => 'Engineering',
                'time' => '8 min read',
                'image' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=1400&q=80',
            ],
            [
                'slug' => 'ai-briefs-for-growth-campaigns',
                'title' => 'How growth teams use AI briefs to ship campaigns',
                'tag' => 'Marketing',
                'time' => '4 min read',
                'image' => 'https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=1400&q=80',
            ],
        ];

        $featuredPost = $posts[4];
    @endphp

    <main class="px-4 pb-10 md:px-16 lg:px-24">
        <div class="mx-auto mt-14 max-w-7xl rounded-3xl border border-slate-200/80 bg-slate-50/95 p-6 text-slate-900 shadow-xl md:mt-16 md:p-10 lg:p-12">
        <section class="mx-auto max-w-6xl text-center">
            <p class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1.5 text-xs tracking-wide text-emerald-700">
                <span class="size-2 rounded-full bg-emerald-500"></span>
                Insights and stories
            </p>
            <h1 class="mx-auto mt-6 max-w-3xl text-4xl/12 font-semibold tracking-tight md:text-6xl/18">
                The Genesis Blog
            </h1>
            <p class="mx-auto mt-5 max-w-2xl text-sm/7 text-slate-600 md:text-base/8">
                Explore practical guides, product updates, and AI workflows from our team. Built for makers shipping faster with autonomous tools.
            </p>
        </section>

        <section class="mx-auto mt-14 grid max-w-6xl gap-6 lg:grid-cols-3">
            <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm lg:col-span-2">
                <img src="{{ $featuredPost['image'] }}" alt="{{ $featuredPost['title'] }}" class="h-56 w-full object-cover md:h-72" />
                <div class="p-6">
                <p class="text-xs uppercase tracking-[0.24em] text-emerald-600">Featured story</p>
                <h2 class="mt-4 text-3xl/10 font-semibold md:text-4xl/12">{{ $featuredPost['title'] }}</h2>
                <p class="mt-4 max-w-2xl text-sm/7 text-slate-600">
                    A behind-the-scenes look at our engineering process, from prompt templates to auto-triaged pull requests, and what changed after adopting autonomous collaboration.
                </p>
                <div class="mt-6 flex flex-wrap items-center gap-3 text-xs text-slate-500">
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-700">{{ $featuredPost['tag'] }}</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-700">Automation</span>
                    <span>{{ $featuredPost['time'] }}</span>
                </div>
                <a href="{{ route('blog.show', $featuredPost['slug']) }}" class="mt-8 inline-flex rounded-full bg-slate-900 px-6 py-2.5 text-sm font-medium text-white transition hover:bg-slate-700">Read article</a>
                </div>
            </article>

            <aside class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <h3 class="text-lg font-semibold">Popular Topics</h3>
                <div class="mt-4 flex flex-wrap gap-2 text-xs">
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-700">Agents</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-700">Prompting</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-700">Product</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-700">Case Study</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-700">Security</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-slate-700">Integrations</span>
                </div>

                <div class="mt-8 border-t border-slate-200 pt-6">
                    <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Newsletter</p>
                    <p class="mt-2 text-sm/6 text-slate-600">Get one practical post every week. No spam, just useful tactics.</p>
                    <button class="mt-5 w-full rounded-full bg-slate-900 px-6 py-2.5 text-sm font-medium text-white transition hover:bg-slate-700">Subscribe</button>
                </div>
            </aside>
        </section>

        <section class="mx-auto mt-8 grid max-w-6xl gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                    <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="h-44 w-full object-cover" />
                    <div class="p-5">
                    <p class="text-xs uppercase tracking-[0.2em] text-slate-500">{{ $post['tag'] }}</p>
                    <h3 class="mt-3 text-xl/8 font-medium text-slate-900 transition group-hover:text-emerald-700">
                        {{ $post['title'] }}
                    </h3>
                    <p class="mt-5 text-xs text-slate-500">{{ $post['time'] }}</p>
                    <a href="{{ route('blog.show', $post['slug']) }}" class="mt-4 inline-flex items-center gap-2 text-sm text-slate-700 transition group-hover:text-slate-900">
                        Read more
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                    </div>
                </article>
            @endforeach
        </section>
        </div>
    </main>
@endsection
