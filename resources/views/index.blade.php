@extends('front.layout')

@section('main')
    @php
        $exploreProjects = [
            [
                'slug' => 'nova-commerce-platform',
                'title' => 'Nova Commerce Platform',
                'summary' => 'A high-performance multi-vendor commerce platform with real-time inventory and streamlined checkout.',
                'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?auto=format&fit=crop&w=1400&q=80',
                'meta' => '2025 . 14 weeks',
            ],
            [
                'slug' => 'helix-saas-dashboard',
                'title' => 'Helix SaaS Dashboard',
                'summary' => 'A complete subscription operations dashboard with role-based access and strong analytics workflows.',
                'image' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=1400&q=80',
                'meta' => '2024 . 10 weeks',
            ],
            [
                'slug' => 'aurora-learning-portal',
                'title' => 'Aurora Learning Portal',
                'summary' => 'A responsive education platform with course management, progress tracking, and content workflows.',
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1400&q=80',
                'meta' => '2025 . 12 weeks',
            ],
            [
                'slug' => 'pulse-agency-website',
                'title' => 'Pulse Agency Website',
                'summary' => 'A conversion-focused agency website built with reusable CMS sections and SEO-ready architecture.',
                'image' => 'https://images.unsplash.com/photo-1487014679447-9f8336841d58?auto=format&fit=crop&w=1400&q=80',
                'meta' => '2024 . 8 weeks',
            ],
        ];

    @endphp

    <main class="px-4">
        <section class="flex flex-col items-center">
            <div class="flex items-center gap-3 mt-32">
{{--                <p>Smart, Fast, Always Active.</p>--}}
{{--                <button class="btn glass py-1 px-3 text-xs">Launch App</button>--}}
            </div>
{{--            text-center text-4xl/13 md:text-6xl/19 mt-4 font-semibold tracking-tight max-w-3xl--}}
            <h1 class=" text-center text-4xl/13 md:text-6xl/19 mt-4 font-semibold tracking-tight max-w-3xl text-neutral-100">
                Easy Web Solutions
            </h1>
            <p style="font-size: 18px" class="text-center text-gray-100 text-base/7 max-w-md mt-6">
                {{__('slogan')}}
            </p>
{{--            <div class="flex flex-col md:flex-row max-md:w-full items-center gap-4 md:gap-3 mt-6">--}}
{{--                <button class="btn max-md:w-full glass py-3">Create Agent</button>--}}
{{--                <button class="btn max-md:w-full glass flex items-center justify-center gap-2 py-3">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-play size-4.5" aria-hidden="true">--}}
{{--                        <path d="M9 9.003a1 1 0 0 1 1.517-.859l4.997 2.997a1 1 0 0 1 0 1.718l-4.997 2.997A1 1 0 0 1 9 14.996z"></path>--}}
{{--                        <circle cx="12" cy="12" r="10"></circle>--}}
{{--                    </svg>--}}
{{--                    Watch Demo--}}
{{--                </button>--}}
{{--            </div>--}}
        </section>

        <section class="mt-14">
            <div class="relative mx-auto w-full max-w-5xl overflow-hidden py-4" id="logo-container">
                <div class="tech-marquee-track flex w-max items-center gap-4">
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="size-5" />
                        <span class="text-sm text-white/90">Laravel</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript" class="size-5" />
                        <span class="text-sm text-white/90">TypeScript</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kotlin/kotlin-original.svg" alt="Kotlin" class="size-5" />
                        <span class="text-sm text-white/90">Kotlin</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/swift/swift-original.svg" alt="Swift" class="size-5" />
                        <span class="text-sm text-white/90">Swift</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="size-5" />
                        <span class="text-sm text-white/90">React</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js" class="size-5" />
                        <span class="text-sm text-white/90">Vue.js</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js" class="size-5" />
                        <span class="text-sm text-white/90">Node.js</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="PostgreSQL" class="size-5" />
                        <span class="text-sm text-white/90">PostgreSQL</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker" class="size-5" />
                        <span class="text-sm text-white/90">Docker</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind CSS" class="size-5" />
                        <span class="text-sm text-white/90">Tailwind CSS</span>
                    </div>

                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="size-5" />
                        <span class="text-sm text-white/90">Laravel</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript" class="size-5" />
                        <span class="text-sm text-white/90">TypeScript</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kotlin/kotlin-original.svg" alt="Kotlin" class="size-5" />
                        <span class="text-sm text-white/90">Kotlin</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/swift/swift-original.svg" alt="Swift" class="size-5" />
                        <span class="text-sm text-white/90">Swift</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="size-5" />
                        <span class="text-sm text-white/90">React</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js" class="size-5" />
                        <span class="text-sm text-white/90">Vue.js</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js" class="size-5" />
                        <span class="text-sm text-white/90">Node.js</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="PostgreSQL" class="size-5" />
                        <span class="text-sm text-white/90">PostgreSQL</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker" class="size-5" />
                        <span class="text-sm text-white/90">Docker</span>
                    </div>
                    <div class="flex items-center gap-2 rounded-full border border-white/20 bg-white/8 px-4 py-2 whitespace-nowrap">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind CSS" class="size-5" />
                        <span class="text-sm text-white/90">Tailwind CSS</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-32">
            <div class="text-center">
                <h2 class="text-3xl font-semibold max-w-lg mx-auto mt-4 text-white">{{__('We Offer')}}</h2>
{{--                <p class="mt-4 text-center text-sm/7 text-gray-100 max-w-md mx-auto">--}}
{{--                    Design AI assistants that research, plan, and execute tasks — all powered by your prompts.--}}
{{--                </p>--}}
            </div>
            <div class="grid grid-cols-1 gap-6 mt-10 px-6 md:grid-cols-2 max-w-4xl mx-auto">
                <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass">
                    <!-- prettier-ignore -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bot size-8.5" aria-hidden="true">
                        <path d="M12 8V4H8"></path><rect width="16" height="12" x="4" y="8" rx="2"></rect><path d="M2 14h2"></path><path d="M20 14h2"></path><path d="M15 13v2"></path><path d="M9 13v2"></path>
                    </svg>
                    <h3 class="text-base font-medium text-white">Web Design</h3>
                    <p class="text-gray-100 line-clamp-2 pb-2">Agents that plan, execute &amp; think step-by-step.</p>
                </div>
                <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass">
                    <!-- prettier-ignore -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bot size-8.5" aria-hidden="true">
                        <path d="M12 8V4H8"></path><rect width="16" height="12" x="4" y="8" rx="2"></rect><path d="M2 14h2"></path><path d="M20 14h2"></path><path d="M15 13v2"></path><path d="M9 13v2"></path>
                    </svg>
                    <h3 class="text-base font-medium text-white">Web Development</h3>
                    <p class="text-gray-100 line-clamp-2 pb-2">Agents that plan, execute &amp; think step-by-step.</p>
                </div>
                <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass">
                    <!-- prettier-ignore -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brain size-8.5" aria-hidden="true">
                        <path d="M12 18V5"></path><path d="M15 13a4.17 4.17 0 0 1-3-4 4.17 4.17 0 0 1-3 4"></path><path d="M17.598 6.5A3 3 0 1 0 12 5a3 3 0 1 0-5.598 1.5"></path><path d="M17.997 5.125a4 4 0 0 1 2.526 5.77"></path><path d="M18 18a4 4 0 0 0 2-7.464"></path><path d="M19.967 17.483A4 4 0 1 1 12 18a4 4 0 1 1-7.967-.517"></path><path d="M6 18a4 4 0 0 1-2-7.464"></path><path d="M6.003 5.125a4 4 0 0 0-2.526 5.77"></path>
                    </svg>
                    <h3 class="text-base font-medium text-white">Mobile Development</h3>
                    <p class="text-gray-100 line-clamp-2 pb-2">Agents retain memory and improve over time.</p>
                </div>
                <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap size-8.5" aria-hidden="true">
                        <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                    </svg>
                    <h3 class="text-base font-medium text-white">AI integration & Automatization</h3>
                    <p class="text-gray-100 line-clamp-2 pb-2">Fast responses with async task processing.</p>
                </div>
            </div>
        </section>

        <section class="mt-32 relative">
            <div class="text-center">
                <h2 class="text-3xl font-semibold max-w-lg mx-auto mt-4 text-white text-uppercase">{{__('3 Steps for successful project')}}</h2>
{{--                <p class="mt-4 text-center text-sm/7 text-gray-100 max-w-md mx-auto">Empower your business with AI agents that optimize processes and accelerate performance.</p>--}}
            </div>
            <div class="relative space-y-20 md:space-y-30 mt-20">
                <div class="flex-col items-center hidden md:flex absolute left-1/2 -translate-x-1/2">
                    <p class="flex items-center justify-center font-medium my-10 aspect-square bg-black/15 p-2 rounded-full">01</p>
                    <div class="h-72 w-0.5 bg-linear-to-b from-transparent via-white to-transparent"></div>
                    <p class="flex items-center justify-center font-medium my-10 aspect-square bg-black/15 p-2 rounded-full">02</p>
                    <div class="h-72 w-0.5 bg-linear-to-b from-transparent via-white to-transparent"></div>
                    <p class="flex items-center justify-center font-medium my-10 aspect-square bg-black/15 p-2 rounded-full">03</p>
                </div>
                <div class="flex items-center justify-center gap-6 md:gap-20 flex-col md:flex-row">
                    <img src="{{asset('assets/images/planning2.png')}}" alt="step" class="flex-1 h-auto w-full max-w-sm rounded-2xl" />
                    <div class="flex-1 flex flex-col gap-6 md:px-6 max-w-md">
                        <h3 class="text-2xl font-medium text-white">{{__('Project planning')}}</h3>
                        <p class="text-gray-100 text-sm/6 pb-2 text-pretty text-justify">
                            {{__('step_one')}}
                        </p>
{{--                        <a href="https://prebuiltui.com/tailwind-templates" class="flex items-center gap-2">--}}
{{--                            Learn More--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link size-4" aria-hidden="true">--}}
{{--                                <path d="M15 3h6v6"></path>--}}
{{--                                <path d="M10 14 21 3"></path>--}}
{{--                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
                    </div>
                </div>
                <div class="flex items-center justify-center gap-6 md:gap-20 flex-col md:flex-row-reverse">
                    <img src="{{asset('assets/images/prototyping.jpg')}}" alt="step" class="flex-1 h-auto w-full max-w-sm rounded-2xl" />
                    <div class="flex-1 flex flex-col gap-6 md:px-6 max-w-md">
                        <h3 class="text-2xl font-medium text-white">{{__('Working on prototype')}}</h3>
                        <p class="text-gray-100 text-sm/6 pb-2 text-pretty text-justify">
                           {{__('step_two')}}
                        </p>
{{--                        <a href="https://prebuiltui.com/tailwind-templates" class="flex items-center gap-2">--}}
{{--                            Learn More--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link size-4" aria-hidden="true">--}}
{{--                                <path d="M15 3h6v6"></path>--}}
{{--                                <path d="M10 14 21 3"></path>--}}
{{--                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
                    </div>
                </div>
                <div class="flex items-center justify-center gap-6 md:gap-20 flex-col md:flex-row">
                    <img src="{{asset('assets/images/launch.jpg')}}" alt="step" class="flex-1 h-auto w-full max-w-sm rounded-2xl" />
                    <div class="flex-1 flex flex-col gap-6 md:px-6 max-w-md">
                        <h3 class="text-2xl font-medium text-white">{{__('Launch')}}</h3>
                        <p class="text-gray-100 text-sm/6 pb-2 text-pretty text-justify">
                            {{__('step_three')}}
                        </p>
{{--                        <a href="https://prebuiltui.com/tailwind-templates" class="flex items-center gap-2">--}}
{{--                            Learn More--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link size-4" aria-hidden="true">--}}
{{--                                <path d="M15 3h6v6"></path>--}}
{{--                                <path d="M10 14 21 3"></path>--}}
{{--                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </section>

{{--        <section class="mt-32 flex flex-col items-center">--}}
{{--            <div class="text-center">--}}
{{--                <h2 class="text-3xl font-semibold max-w-lg mx-auto mt-4 text-white">Here what aur trusted users about our best AI agents.</h2>--}}
{{--                <p class="mt-4 text-center text-sm/7 text-gray-100 max-w-md mx-auto">Empower your business with AI agents that optimize processes and accelerate performance.</p>--}}
{{--            </div>--}}
{{--            <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">--}}
{{--                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">--}}
{{--                    <div class="flex items-center justify-between">--}}
{{--                        <p class="font-medium">Founder &amp; CEO</p>--}}
{{--                        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&amp;w=200" alt="Richard Nelson" />--}}
{{--                    </div>--}}
{{--                    <p class="line-clamp-3">“Super clean and easy to use. These Tailwind + React components saved me hours of dev time and countless lines of extra code!”</p>--}}
{{--                    <p class="text-gray-300">- Richard Nelson</p>--}}
{{--                </div>--}}
{{--                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">--}}
{{--                    <div class="flex items-center justify-between">--}}
{{--                        <p class="font-medium">Founder &amp; CEO</p>--}}
{{--                        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&amp;w=200" alt="Sophia Martinez" />--}}
{{--                    </div>--}}
{{--                    <p class="line-clamp-3">“The design quality is top-notch. Perfect balance between simplicity and style. Highly recommend for any creative developer!”</p>--}}
{{--                    <p class="text-gray-300">- Sophia Martinez</p>--}}
{{--                </div>--}}
{{--                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">--}}
{{--                    <div class="flex items-center justify-between">--}}
{{--                        <p class="font-medium">Founder &amp; CEO</p>--}}
{{--                        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?w=200&amp;auto=format&amp;fit=crop&amp;q=60" alt="Ethan Roberts" />--}}
{{--                    </div>--}}
{{--                    <p class="line-clamp-3">“Absolutely love the reusability of these components. My workflow feels 10x faster now with cleaner and more consistent layouts.”</p>--}}
{{--                    <p class="text-gray-300">- Ethan Roberts</p>--}}
{{--                </div>--}}
{{--                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">--}}
{{--                    <div class="flex items-center justify-between">--}}
{{--                        <p class="font-medium">Founder &amp; CEO</p>--}}
{{--                        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=200&amp;auto=format&amp;fit=crop&amp;q=60" alt="Isabella Kim" />--}}
{{--                    </div>--}}
{{--                    <p class="line-clamp-3">“Clean, elegant, and efficient. These components are a dream for any modern web developer who values beautiful code.”</p>--}}
{{--                    <p class="text-gray-300">- Isabella Kim</p>--}}
{{--                </div>--}}
{{--                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">--}}
{{--                    <div class="flex items-center justify-between">--}}
{{--                        <p class="font-medium">Founder &amp; CEO</p>--}}
{{--                        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&amp;w=100&amp;h=100&amp;auto=format&amp;fit=crop" alt="Liam Johnson" />--}}
{{--                    </div>--}}
{{--                    <p class="line-clamp-3">“I've tried dozens of UI kits, but this one just feels right. Everything works seamlessly and looks incredibly polished.”</p>--}}
{{--                    <p class="text-gray-300">- Liam Johnson</p>--}}
{{--                </div>--}}
{{--                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">--}}
{{--                    <div class="flex items-center justify-between">--}}
{{--                        <p class="font-medium">Founder &amp; CEO</p>--}}
{{--                        <img class="size-10 rounded-full" src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/userImage/userImage1.png" alt="Ava Patel" />--}}
{{--                    </div>--}}
{{--                    <p class="line-clamp-3">“Brilliantly structured components with clean, modern styling. Makes development a joy and design updates super quick.”</p>--}}
{{--                    <p class="text-gray-300">- Ava Patel</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <section class="mt-32">--}}
{{--            <div class="text-center">--}}
{{--                <h2 class="text-3xl font-semibold max-w-lg mx-auto mt-4 text-white">FAQ's</h2>--}}
{{--                <p class="mt-4 text-center text-sm/7 text-gray-100 max-w-md mx-auto">Looking for answers to your frequently asked questions? Check out our FAQ's section below to find.</p>--}}
{{--            </div>--}}
{{--            <div data-accordion data-accordion-single="true" class="mx-auto mt-12 w-full max-w-xl space-y-4">--}}
{{--                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">--}}
{{--                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">--}}
{{--                        Do I need coding or design experience to use PrebuiltUI?--}}
{{--                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">--}}
{{--                            <path d="M6 9l6 6 6-6" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">--}}
{{--                        Basic coding knowledge (HTML/CSS, Tailwind) helps, but advanced design skills are not required. You can use components as-is or customize them.--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">--}}
{{--                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">--}}
{{--                        What is PrebuiltUI and how does it help developers and designers?--}}
{{--                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">--}}
{{--                            <path d="M6 9l6 6 6-6" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">--}}
{{--                        PrebuiltUI provides ready-to-use, customizable UI components and templates, saving time for developers and designers.--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">--}}
{{--                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">--}}
{{--                        Can I use PrebuiltUI components in my existing project?--}}
{{--                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">--}}
{{--                            <path d="M6 9l6 6 6-6" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">--}}
{{--                        Yes, components can be integrated into HTML, React, Next.js, Vue, and other projects using Tailwind CSS.--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">--}}
{{--                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">--}}
{{--                        How customizable are the generated components?--}}
{{--                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">--}}
{{--                            <path d="M6 9l6 6 6-6" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">--}}
{{--                        Components are highly customizable with Tailwind utility classes, theming, and structural adjustments.--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">--}}
{{--                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">--}}
{{--                        Does PrebuiltUI support team collaboration?--}}
{{--                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">--}}
{{--                            <path d="M6 9l6 6 6-6" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">--}}
{{--                        There is no clear documentation on built-in collaboration features. Check their support for team options.--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">--}}
{{--                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">--}}
{{--                        Can I try PrebuiltUI before purchasing a plan?--}}
{{--                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">--}}
{{--                            <path d="M6 9l6 6 6-6" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">--}}
{{--                        Yes, you can try PrebuiltUI with full access to features.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <section class="mx-auto mt-16 w-full max-w-6xl">
            <div class="mt-14">
                <div class="flex items-end justify-between gap-4">
                    <div>
                        <p class="text-xs uppercase tracking-[0.22em] text-emerald-200">{{__('Blog')}}</p>
                        <h3 class="mt-2 text-sm md:text-2xl font-semibold text-white">{{__('Latest Blog Posts')}}</h3>
                    </div>
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-sm text-white/90 hover:text-white">
                        {{__('View all articles')}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="home-explore-splide splide mt-5" data-splide-posts>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($latestPosts as $post)
                                <li class="splide__slide">
                                    <a href="{{ route('blog.show', $post->slug) }}" class="group block overflow-hidden rounded-2xl glass transition-all duration-300 hover:-translate-y-1 hover:bg-white/15">
                                        <img src="{{ $post->getFirstMediaUrl('featured_image', 'card') ?: $post->getFirstMediaUrl('featured_image') }}" alt="{{ $post->title }}" class="h-52 w-full object-cover" />
                                        <div class="p-6">
                                            @if ($post->categories->isNotEmpty())
                                                <p class="text-xs uppercase tracking-[0.2em] text-emerald-200">{{ $post->categories->first()->name }}</p>
                                            @endif
                                            <h4 class="mt-2 text-xl font-semibold text-white">{{ $post->title }}</h4>
{{--                                            @if ($post->published_at)--}}
{{--                                                <p class="mt-3 text-sm/7 text-gray-100">{{ $post->published_at->format('M d, Y') }}</p>--}}
{{--                                            @endif--}}
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
{{--            <div class="text-center mt-14">--}}
{{--                <h2 class="text-3xl font-semibold text-white">Explore More</h2>--}}
{{--                <p class="mx-auto mt-3 max-w-2xl text-sm/7 text-gray-100">Browse our project work and practical web engineering articles built for real business outcomes.</p>--}}
{{--            </div>--}}

            <div class="mt-14">
                <div class="flex items-end justify-between gap-4">
                    <div>
                        <p class="text-xs uppercase tracking-[0.22em] text-cyan-200">{{__('Portfolio')}}</p>
                        <h3 class="mt-2 text-sm md:text-2xl font-semibold text-white">{{__('Project Highlights')}}</h3>
                    </div>
                    <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-sm text-white/90 hover:text-white">
                        {{__('View all projects')}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="home-explore-splide splide mt-5" data-splide-projects>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($exploreProjects as $project)
                                <li class="splide__slide">
                                    <a href="{{ route('projects.show', $project['slug']) }}" class="group block overflow-hidden rounded-2xl glass transition-all duration-300 hover:-translate-y-1 hover:bg-white/15">
                                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="h-52 w-full object-cover" />
                                        <div class="p-6">
                                            <p class="text-xs uppercase tracking-[0.2em] text-cyan-200">{{ $project['meta'] }}</p>
                                            <h4 class="mt-2 text-xl font-semibold text-white">{{ $project['title'] }}</h4>
                                            <p class="mt-3 text-sm/7 text-gray-100">{{ $project['summary'] }}</p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>


        </section>



        <div class="flex flex-col max-w-5xl px-4 mt-40 mx-auto items-center justify-center text-center py-16 rounded-xl glass">
            <h2 class="text-2xl md:text-4xl font-medium mt-2">Ready to build?</h2>
            <p class="mt-4 text-sm/7 max-w-md">See how fast you can turn your ideas into reality. Get started for free, no credit card required.</p>
            <button class="btn glass flex items-center gap-2 mt-8">
                Try now
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right size-4" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </button>
        </div>
        <div style="height:200px"></div>
    </main>


@endsection
