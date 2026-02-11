@extends('front.layout')

@section('index')
    <main class="px-4">
        <section class="flex flex-col items-center">
            <div class="flex items-center gap-3 mt-32">
                <p>Smart, Fast, Always Active.</p>
                <button class="btn glass py-1 px-3 text-xs">Launch App</button>
            </div>
            <h1 class="text-center text-4xl/13 md:text-6xl/19 mt-4 font-semibold tracking-tight max-w-3xl">Build, Deploy &amp; Talk to AI Agents in Seconds.</h1>
            <p class="text-center text-gray-100 text-base/7 max-w-md mt-6">Design AI assistants that research, plan, and execute tasks — all powered by your prompts.</p>
            <div class="flex flex-col md:flex-row max-md:w-full items-center gap-4 md:gap-3 mt-6">
                <button class="btn max-md:w-full glass py-3">Create Agent</button>
                <button class="btn max-md:w-full glass flex items-center justify-center gap-2 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-play size-4.5" aria-hidden="true">
                        <path d="M9 9.003a1 1 0 0 1 1.517-.859l4.997 2.997a1 1 0 0 1 0 1.718l-4.997 2.997A1 1 0 0 1 9 14.996z"></path>
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                    Watch Demo
                </button>
            </div>
        </section>
        <section class="mt-14">
            <p class="py-6 mt-14 text-center">Trusting by leading brands, including —</p>
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
                <h2 class="text-3xl font-semibold max-w-lg mx-auto mt-4 text-white">Agent features</h2>
                <p class="mt-4 text-center text-sm/7 text-gray-100 max-w-md mx-auto">Design AI assistants that research, plan, and execute tasks — all powered by your prompts.</p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-6 mt-10 px-6">
                <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
                    <!-- prettier-ignore -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bot size-8.5" aria-hidden="true">
                        <path d="M12 8V4H8"></path><rect width="16" height="12" x="4" y="8" rx="2"></rect><path d="M2 14h2"></path><path d="M20 14h2"></path><path d="M15 13v2"></path><path d="M9 13v2"></path>
                    </svg>
                    <h3 class="text-base font-medium text-white">Autonomous Agents</h3>
                    <p class="text-gray-100 line-clamp-2 pb-2">Agents that plan, execute &amp; think step-by-step.</p>
                </div>
                <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
                    <!-- prettier-ignore -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brain size-8.5" aria-hidden="true">
                        <path d="M12 18V5"></path><path d="M15 13a4.17 4.17 0 0 1-3-4 4.17 4.17 0 0 1-3 4"></path><path d="M17.598 6.5A3 3 0 1 0 12 5a3 3 0 1 0-5.598 1.5"></path><path d="M17.997 5.125a4 4 0 0 1 2.526 5.77"></path><path d="M18 18a4 4 0 0 0 2-7.464"></path><path d="M19.967 17.483A4 4 0 1 1 12 18a4 4 0 1 1-7.967-.517"></path><path d="M6 18a4 4 0 0 1-2-7.464"></path><path d="M6.003 5.125a4 4 0 0 0-2.526 5.77"></path>
                    </svg>
                    <h3 class="text-base font-medium text-white">Memory &amp; Learning</h3>
                    <p class="text-gray-100 line-clamp-2 pb-2">Agents retain memory and improve over time.</p>
                </div>
                <div class="hover:-translate-y-0.5 transition duration-300 p-6 rounded-xl space-y-4 glass max-w-80 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap size-8.5" aria-hidden="true">
                        <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                    </svg>
                    <h3 class="text-base font-medium text-white">Real-time Execution</h3>
                    <p class="text-gray-100 line-clamp-2 pb-2">Fast responses with async task processing.</p>
                </div>
            </div>
        </section>

        <section class="mt-32 relative">
            <div class="text-center">
                <h2 class="text-3xl font-semibold max-w-lg mx-auto mt-4 text-white">From idea to autonomous agent quickly and effortlessly.</h2>
                <p class="mt-4 text-center text-sm/7 text-gray-100 max-w-md mx-auto">Empower your business with AI agents that optimize processes and accelerate performance.</p>
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
                    <img src="{{asset('assets/images/workflow1.png')}}" alt="step" class="flex-1 h-auto w-full max-w-sm rounded-2xl" />
                    <div class="flex-1 flex flex-col gap-6 md:px-6 max-w-md">
                        <h3 class="text-2xl font-medium text-white">Start with a prompt</h3>
                        <p class="text-gray-100 text-sm/6 line-clamp-3 pb-2">Start with a simple prompt describing what you want your agent to do. Our builder interprets your idea and creates the structure for you in seconds</p>
                        <a href="https://prebuiltui.com/tailwind-templates" class="flex items-center gap-2">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link size-4" aria-hidden="true">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-6 md:gap-20 flex-col md:flex-row-reverse">
                    <img src="{{asset('assets/images/workflow2.png')}}" alt="step" class="flex-1 h-auto w-full max-w-sm rounded-2xl" />
                    <div class="flex-1 flex flex-col gap-6 md:px-6 max-w-md">
                        <h3 class="text-2xl font-medium text-white">Adjust and personalize</h3>
                        <p class="text-gray-100 text-sm/6 line-clamp-3 pb-2">Adjust tasks, actions and integrations. Add personality, rules and data sources to make the agent work exactly the way you want.</p>
                        <a href="https://prebuiltui.com/tailwind-templates" class="flex items-center gap-2">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link size-4" aria-hidden="true">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-6 md:gap-20 flex-col md:flex-row">
                    <img src="{{asset('assets/images/workflow1.png')}}" alt="step" class="flex-1 h-auto w-full max-w-sm rounded-2xl" />
                    <div class="flex-1 flex flex-col gap-6 md:px-6 max-w-md">
                        <h3 class="text-2xl font-medium text-white">Launch &amp; Automate</h3>
                        <p class="text-gray-100 text-sm/6 line-clamp-3 pb-2">Deploy your agent and let it run. It executes tasks autonomously, reports results, and continues working in the background.</p>
                        <a href="https://prebuiltui.com/tailwind-templates" class="flex items-center gap-2">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link size-4" aria-hidden="true">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-32 flex flex-col items-center">
            <div class="text-center">
                <h2 class="text-3xl font-semibold max-w-lg mx-auto mt-4 text-white">Here what aur trusted users about our best AI agents.</h2>
                <p class="mt-4 text-center text-sm/7 text-gray-100 max-w-md mx-auto">Empower your business with AI agents that optimize processes and accelerate performance.</p>
            </div>
            <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <p class="font-medium">Founder &amp; CEO</p>
                        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&amp;w=200" alt="Richard Nelson" />
                    </div>
                    <p class="line-clamp-3">“Super clean and easy to use. These Tailwind + React components saved me hours of dev time and countless lines of extra code!”</p>
                    <p class="text-gray-300">- Richard Nelson</p>
                </div>
                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <p class="font-medium">Founder &amp; CEO</p>
                        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&amp;w=200" alt="Sophia Martinez" />
                    </div>
                    <p class="line-clamp-3">“The design quality is top-notch. Perfect balance between simplicity and style. Highly recommend for any creative developer!”</p>
                    <p class="text-gray-300">- Sophia Martinez</p>
                </div>
                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <p class="font-medium">Founder &amp; CEO</p>
                        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?w=200&amp;auto=format&amp;fit=crop&amp;q=60" alt="Ethan Roberts" />
                    </div>
                    <p class="line-clamp-3">“Absolutely love the reusability of these components. My workflow feels 10x faster now with cleaner and more consistent layouts.”</p>
                    <p class="text-gray-300">- Ethan Roberts</p>
                </div>
                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <p class="font-medium">Founder &amp; CEO</p>
                        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=200&amp;auto=format&amp;fit=crop&amp;q=60" alt="Isabella Kim" />
                    </div>
                    <p class="line-clamp-3">“Clean, elegant, and efficient. These components are a dream for any modern web developer who values beautiful code.”</p>
                    <p class="text-gray-300">- Isabella Kim</p>
                </div>
                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <p class="font-medium">Founder &amp; CEO</p>
                        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&amp;w=100&amp;h=100&amp;auto=format&amp;fit=crop" alt="Liam Johnson" />
                    </div>
                    <p class="line-clamp-3">“I've tried dozens of UI kits, but this one just feels right. Everything works seamlessly and looks incredibly polished.”</p>
                    <p class="text-gray-300">- Liam Johnson</p>
                </div>
                <div class="w-full max-w-88 space-y-5 rounded-lg glass p-5 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <p class="font-medium">Founder &amp; CEO</p>
                        <img class="size-10 rounded-full" src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/userImage/userImage1.png" alt="Ava Patel" />
                    </div>
                    <p class="line-clamp-3">“Brilliantly structured components with clean, modern styling. Makes development a joy and design updates super quick.”</p>
                    <p class="text-gray-300">- Ava Patel</p>
                </div>
            </div>
        </section>

        <section class="mt-32">
            <div class="text-center">
                <h2 class="text-3xl font-semibold max-w-lg mx-auto mt-4 text-white">FAQ's</h2>
                <p class="mt-4 text-center text-sm/7 text-gray-100 max-w-md mx-auto">Looking for answers to your frequently asked questions? Check out our FAQ's section below to find.</p>
            </div>
            <div data-accordion data-accordion-single="true" class="mx-auto mt-12 w-full max-w-xl space-y-4">
                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">
                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">
                        Do I need coding or design experience to use PrebuiltUI?
                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6" />
                        </svg>
                    </button>
                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">
                        Basic coding knowledge (HTML/CSS, Tailwind) helps, but advanced design skills are not required. You can use components as-is or customize them.
                    </p>
                </div>

                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">
                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">
                        What is PrebuiltUI and how does it help developers and designers?
                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6" />
                        </svg>
                    </button>
                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">
                        PrebuiltUI provides ready-to-use, customizable UI components and templates, saving time for developers and designers.
                    </p>
                </div>

                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">
                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">
                        Can I use PrebuiltUI components in my existing project?
                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6" />
                        </svg>
                    </button>
                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">
                        Yes, components can be integrated into HTML, React, Next.js, Vue, and other projects using Tailwind CSS.
                    </p>
                </div>

                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">
                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">
                        How customizable are the generated components?
                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6" />
                        </svg>
                    </button>
                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">
                        Components are highly customizable with Tailwind utility classes, theming, and structural adjustments.
                    </p>
                </div>

                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">
                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">
                        Does PrebuiltUI support team collaboration?
                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6" />
                        </svg>
                    </button>
                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">
                        There is no clear documentation on built-in collaboration features. Check their support for team options.
                    </p>
                </div>

                <div data-accordion-item class="faq-item flex flex-col glass rounded-md">
                    <button type="button" data-accordion-trigger aria-expanded="false" class="faq-header flex w-full cursor-pointer items-start justify-between gap-4 p-4 text-left font-medium transition hover:bg-white/10">
                        Can I try PrebuiltUI before purchasing a plan?
                        <svg data-accordion-icon class="chevron size-5 shrink-0 transition-all duration-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6" />
                        </svg>
                    </button>
                    <p data-accordion-content hidden class="faq-content max-h-0 overflow-hidden px-4 text-sm/6 transition-all duration-400">
                        Yes, you can try PrebuiltUI with full access to features.
                    </p>
                </div>
            </div>
        </section>

        <section class="mt-32">
            <div class="text-center">
                <h2 class="text-3xl font-semibold max-w-lg mx-auto mt-4 text-white">Our Pricing Plans</h2>
                <p class="mt-4 text-center text-sm/7 text-gray-100 max-w-md mx-auto">A visual collection of our most recent works - each piece crafted with intention, emotion and style.</p>
            </div>
            @php
                $plans = [
                    [
                        'icon' => 'rocket',
                        'title' => 'Starter',
                        'description' => 'For individuals and small teams',
                        'price' => '$19',
                        'button_text' => 'Get Started',
                        'features' => [
                            'Up to 10 projects',
                            '10 AI tasks/month',
                            'Basic text generation',
                            'Simple chatbot access',
                            'Email support only',
                            'Community resources',
                        ],
                    ],
                    [
                        'icon' => 'zap',
                        'title' => 'Professional',
                        'description' => 'For growing teams and startups',
                        'price' => '$49',
                        'button_text' => 'Upgrade Now',
                        'most_popular' => true,
                        'features' => [
                            'Unlimited AI tasks',
                            'API integration',
                            'Text & image outputs',
                            'Priority chat & email support',
                            'Detailed analytics',
                            'Team collaboration',
                        ],
                    ],
                    [
                        'icon' => 'crown',
                        'title' => 'Enterprise',
                        'description' => 'For enterprises and agencies',
                        'price' => '$149',
                        'button_text' => 'Contact Sales',
                        'features' => [
                            'Custom AI models',
                            'Team access control',
                            'Dedicated account manager',
                            'Secure private API',
                            'SLA uptime guarantee',
                            '24/7 premium support',
                        ],
                    ],
                ];
            @endphp

            <div class="mt-12 flex flex-wrap items-center justify-center gap-6">
                @foreach ($plans as $plan)
                    <div class="group w-full max-w-80 glass rounded-xl p-6 transition-all duration-300 hover:-translate-y-0.5">
                        <div class="ml-auto flex w-max items-center gap-2 rounded-full glass px-3 py-1 text-xs">
                            @if ($plan['icon'] === 'rocket')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket size-3.5" aria-hidden="true">
                                    <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09"></path>
                                    <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
                                    <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                    <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                                </svg>
                            @elseif ($plan['icon'] === 'zap')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap size-3.5" aria-hidden="true">
                                    <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-crown size-3.5" aria-hidden="true">
                                    <path d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z"></path>
                                    <path d="M5 21h14"></path>
                                </svg>
                            @endif
                            <span>{{ $plan['title'] }}</span>
                        </div>

                        <h3 class="mt-4 text-2xl font-semibold">
                            {{ $plan['price'] }}
                            <span class="text-sm font-normal">/month</span>
                        </h3>
                        <p class="mt-3 text-gray-200">{{ $plan['description'] }}</p>

                        <button class="btn mt-7 w-full rounded-md {{ !empty($plan['most_popular']) ? 'bg-white text-gray-800' : 'glass' }}">
                            {{ $plan['button_text'] }}
                        </button>

                        <div class="mt-6 flex flex-col">
                            @foreach ($plan['features'] as $feature)
                                <div class="flex items-center gap-2 py-2">
                                    <div class="rounded-full border-0 glass p-1">
                                        <svg class="size-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                            <path d="M5 12l5 5L20 7"></path>
                                        </svg>
                                    </div>
                                    <p>{{ $feature }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
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
    </main>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <h1 class="text-3xl font-semibold text-center mx-auto">Our Latest Creations</h1>
    <p class="text-sm text-slate-500 text-center mt-2 max-w-lg mx-auto">A visual collection of our most recent works -
        each piece crafted with intention, emotion, and style.</p>

    <div class="flex items-center gap-6 h-[400px] w-full max-w-5xl mt-10 mx-auto">
        <div class="relative group flex-grow transition-all w-56 h-[400px] duration-500 hover:w-full">
            <img class="h-full w-full object-cover object-center"
                 src="https://images.unsplash.com/photo-1543269865-0a740d43b90c?q=80&w=800&h=400&auto=format&fit=crop"
                 alt="image">
            <div
                class="absolute inset-0 flex flex-col justify-end p-10 text-white bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300">
                <h1 class="text-3xl">Prompt engineers</h1>
                <p class="text-sm">Bridging the gap between human intent and machine understanding through expert prompt design.</p>

            </div>
        </div>
        <div class="relative group flex-grow transition-all w-56 h-[400px] duration-500 hover:w-full">
            <img class="h-full w-full object-cover object-right"
                 src="https://images.unsplash.com/photo-1714976326351-0ecf0244f0fc?q=80&w=800&h=400&auto=format&fit=crop"
                 alt="image">
            <div
                class="absolute inset-0 flex flex-col justify-end p-10 text-white bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300">
                <h1 class="text-3xl">Data scientists</h1>
                <p class="text-sm">Bridging the gap between human intent and machine understanding through expert prompt design.</p>

            </div>
        </div>
        <div class="relative group flex-grow transition-all w-56 h-[400px] duration-500 hover:w-full">
            <img class="h-full w-full object-cover object-center"
                 src="https://images.unsplash.com/photo-1736220690062-79e12ca75262?q=80&w=800&h=400&auto=format&fit=crop"
                 alt="image">
            <div
                class="absolute inset-0 flex flex-col justify-end p-10 text-white bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300">
                <h1 class="text-3xl">Software engineers</h1>
                <p class="text-sm">Bridging the gap between human intent and machine understanding through expert prompt design.</p>

            </div>
        </div>
    </div>

@endsection
