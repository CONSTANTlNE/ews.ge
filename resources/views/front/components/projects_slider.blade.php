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
