
<nav id="navbar" class="sticky top-0 z-50 flex w-full items-center justify-between px-4 py-3.5 md:px-16 lg:px-24 transition-all duration-300">
    <a href="/">
        <img alt="logo" loading="lazy"  decoding="async" data-nimg="1" class=" w-auto" style="color: transparent;height: 50px" src="{{asset('assets/images/logo.png')}}" />
    </a>
    <div class="hidden items-center space-x-10 md:flex">
        <a class="transition hover:text-gray-300" href="{{route('blog.index',['locale'=>app()->getLocale()])}}">{{__('Blog')}}</a>
        <a class="transition hover:text-gray-300" href="{{route('projects.index',['locale'=>app()->getLocale()])}}">{{__('Projects')}}</a>
{{--        <a class="btn glass" href="{{ route('login') }}">Login</a>--}}
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
    <a href="/">{{__('Home')}}</a>
    <a href="{{route('projects.index',['locale'=>app()->getLocale()])}}">{{__('Projects')}}</a>
    <a href="{{route('projects.index',['locale'=>app()->getLocale()])}}">{{__('Blog')}}</a>
{{--    <a class="btn glass" href="{{ route('login') }}">Login</a>--}}
    <button id="close-btn" class="rounded-md p-2 glass">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
        </svg>
    </button>
</div>
