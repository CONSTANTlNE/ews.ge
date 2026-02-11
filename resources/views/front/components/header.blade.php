
<nav id="navbar" class="sticky top-0 z-50 flex w-full items-center justify-between px-4 py-3.5 md:px-16 lg:px-24 transition-all duration-300">
    <a href="/">
        <img alt="logo" loading="lazy" width="205" height="48" decoding="async" data-nimg="1" class="h-8.5 w-auto" style="color: transparent" src="{{asset('assets/images/logo.svg')}}" />
    </a>
    <div class="hidden items-center space-x-10 md:flex">
        <a class="transition hover:text-gray-300" href="/blog">Blog</a>
        <a class="transition hover:text-gray-300" href="/projects">Projects</a>
        <a class="transition hover:text-gray-300" href="#agents">Agents</a>
        <a class="transition hover:text-gray-300" href="#use-cases">Use Cases</a>
        <a class="transition hover:text-gray-300" href="#pricing">Pricing</a>
        <a class="transition hover:text-gray-300" href="#docs">Docs</a>
        <a class="btn glass" href="#!">Sign Up</a>
    </div>
    <button id="menu-btn" class="transition active:scale-90 md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu size-6.5" aria-hidden="true">
            <path d="M4 5h16"></path>
            <path d="M4 12h16"></path>
            <path d="M4 19h16"></path>
        </svg>
    </button>
</nav>
<div id="mobile-menu" class="fixed inset-0 z-50 flex flex-col items-center justify-center gap-6 bg-black/20 text-lg font-medium backdrop-blur-2xl transition duration-300 md:hidden -translate-x-full">
    <a href="#!">Home</a>
    <a href="/projects">Projects</a>
    <a href="/blog">Blog</a>
    <a href="#agents">Agents</a>
    <a href="#use-cases">Use Cases</a>
    <a href="#pricing">Pricing</a>
    <a href="#docs">Docs</a>
    <a class="btn glass" href="/">Sign Up</a>
    <button id="close-btn" class="rounded-md p-2 glass">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
        </svg>
    </button>
</div>

<div class="fixed inset-0 overflow-hidden -z-20 pointer-events-none">
    <div class="absolute rounded-full top-80 left-2/5 -translate-x-1/2 size-130 bg-[#D10A8A] blur-[100px]"></div>
    <div class="absolute rounded-full top-80 right-0 -translate-x-1/2 size-130 bg-[#2E08CF] blur-[100px]"></div>
    <div class="absolute rounded-full top-0 left-1/2 -translate-x-1/2 size-130 bg-[#F26A06] blur-[100px]"></div>
</div>
