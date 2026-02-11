<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('front.blog');
})->name('blog.index');

Route::get('/blog/{slug}', function (string $slug) {
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
            'image' => 'https://images.unsplash.com/photo-1551281044-8b0f5f6f6f9b?auto=format&fit=crop&w=1400&q=80',
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

    $post = collect($posts)->firstWhere('slug', $slug);

    abort_if(! $post, 404);

    return view('front.blog-post', [
        'post' => $post,
        'relatedPosts' => collect($posts)->where('slug', '!=', $slug)->take(3)->values()->all(),
    ]);
})->name('blog.show');

Route::get('/projects', function () {
    $projects = [
        [
            'slug' => 'nova-commerce-platform',
            'title' => 'Nova Commerce Platform',
            'summary' => 'A high-performance multi-vendor e-commerce platform with real-time inventory and streamlined checkout.',
            'description' => 'We rebuilt the storefront and admin portal from scratch with a strong focus on speed, conversion, and maintainability for long-term growth.',
            'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?auto=format&fit=crop&w=1400&q=80',
            'stack' => ['Laravel', 'Tailwind CSS', 'Vite', 'MySQL'],
            'year' => '2025',
            'duration' => '14 weeks',
            'result' => '+38% conversion uplift',
        ],
        [
            'slug' => 'helix-saas-dashboard',
            'title' => 'Helix SaaS Dashboard',
            'summary' => 'A complete product dashboard for subscription analytics, user management, and billing operations.',
            'description' => 'The project delivered clean role-based UX and reusable front-end architecture to accelerate feature shipping cycles.',
            'image' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=1400&q=80',
            'stack' => ['Laravel', 'Blade', 'Alpine.js', 'PostgreSQL'],
            'year' => '2024',
            'duration' => '10 weeks',
            'result' => '52% faster internal workflows',
        ],
        [
            'slug' => 'aurora-learning-portal',
            'title' => 'Aurora Learning Portal',
            'summary' => 'A responsive education platform with course management, video lessons, and progress tracking.',
            'description' => 'Built with accessibility-first UI patterns and scalable content structures for instructors and students.',
            'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1400&q=80',
            'stack' => ['Laravel', 'Tailwind CSS', 'Redis', 'AWS S3'],
            'year' => '2025',
            'duration' => '12 weeks',
            'result' => '4.8/5 learner satisfaction',
        ],
        [
            'slug' => 'pulse-agency-website',
            'title' => 'Pulse Agency Website',
            'summary' => 'A conversion-focused agency website with CMS-driven pages and reusable content sections.',
            'description' => 'We designed and shipped a modern marketing stack with custom lead funnels and SEO-ready architecture.',
            'image' => 'https://images.unsplash.com/photo-1487014679447-9f8336841d58?auto=format&fit=crop&w=1400&q=80',
            'stack' => ['Laravel', 'Blade', 'Tailwind CSS', 'Cloudflare'],
            'year' => '2024',
            'duration' => '8 weeks',
            'result' => '+63% qualified leads',
        ],
    ];

    return view('front.projects', [
        'projects' => $projects,
        'featuredProject' => $projects[0],
    ]);
})->name('projects.index');

Route::get('/projects/{slug}', function (string $slug) {
    $projects = [
        [
            'slug' => 'nova-commerce-platform',
            'title' => 'Nova Commerce Platform',
            'summary' => 'A high-performance multi-vendor e-commerce platform with real-time inventory and streamlined checkout.',
            'description' => 'We rebuilt the storefront and admin portal from scratch with a strong focus on speed, conversion, and maintainability for long-term growth.',
            'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?auto=format&fit=crop&w=1400&q=80',
            'stack' => ['Laravel', 'Tailwind CSS', 'Vite', 'MySQL'],
            'year' => '2025',
            'duration' => '14 weeks',
            'result' => '+38% conversion uplift',
            'challenge' => 'Legacy checkout logic and inconsistent vendor inventory updates were causing abandoned carts and operational errors.',
            'approach' => 'We introduced modular checkout services, unified product schemas, and optimized database query paths for heavy catalog loads.',
            'impact' => 'The business saw stronger order completion rates and reduced manual support load from failed checkout edge cases.',
        ],
        [
            'slug' => 'helix-saas-dashboard',
            'title' => 'Helix SaaS Dashboard',
            'summary' => 'A complete product dashboard for subscription analytics, user management, and billing operations.',
            'description' => 'The project delivered clean role-based UX and reusable front-end architecture to accelerate feature shipping cycles.',
            'image' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=1400&q=80',
            'stack' => ['Laravel', 'Blade', 'Alpine.js', 'PostgreSQL'],
            'year' => '2024',
            'duration' => '10 weeks',
            'result' => '52% faster internal workflows',
            'challenge' => 'The team relied on fragmented tools for account lifecycle actions, causing delays and reporting inconsistencies.',
            'approach' => 'We centralized actions into one dashboard with clear role permissions, event-based updates, and standardized UI components.',
            'impact' => 'Support and operations teams handled more tasks per day with fewer errors and better visibility into subscription health.',
        ],
        [
            'slug' => 'aurora-learning-portal',
            'title' => 'Aurora Learning Portal',
            'summary' => 'A responsive education platform with course management, video lessons, and progress tracking.',
            'description' => 'Built with accessibility-first UI patterns and scalable content structures for instructors and students.',
            'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1400&q=80',
            'stack' => ['Laravel', 'Tailwind CSS', 'Redis', 'AWS S3'],
            'year' => '2025',
            'duration' => '12 weeks',
            'result' => '4.8/5 learner satisfaction',
            'challenge' => 'Course delivery slowed down during peak periods and the old UI was difficult for instructors to manage.',
            'approach' => 'We redesigned lesson flows, improved caching strategies, and built intuitive authoring tools for content teams.',
            'impact' => 'Students received smoother playback and instructors published content faster with less technical assistance.',
        ],
        [
            'slug' => 'pulse-agency-website',
            'title' => 'Pulse Agency Website',
            'summary' => 'A conversion-focused agency website with CMS-driven pages and reusable content sections.',
            'description' => 'We designed and shipped a modern marketing stack with custom lead funnels and SEO-ready architecture.',
            'image' => 'https://images.unsplash.com/photo-1487014679447-9f8336841d58?auto=format&fit=crop&w=1400&q=80',
            'stack' => ['Laravel', 'Blade', 'Tailwind CSS', 'Cloudflare'],
            'year' => '2024',
            'duration' => '8 weeks',
            'result' => '+63% qualified leads',
            'challenge' => 'The previous site looked dated and did not guide users effectively toward high-intent service inquiries.',
            'approach' => 'We introduced narrative landing sections, focused CTAs, and a flexible CMS block system for rapid updates.',
            'impact' => 'The sales pipeline gained higher-quality inbound leads and marketing teams could launch new pages faster.',
        ],
    ];

    $project = collect($projects)->firstWhere('slug', $slug);

    abort_if(! $project, 404);

    return view('front.project', [
        'project' => $project,
        'relatedProjects' => collect($projects)->where('slug', '!=', $slug)->take(3)->values()->all(),
    ]);
})->name('projects.show');
