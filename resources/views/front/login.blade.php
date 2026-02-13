@extends('front.layout')

@section('auth')
    <main class="px-4 pb-16 pt-12 md:px-16 lg:px-24">
        <section class="mx-auto mt-10 w-full max-w-md rounded-2xl glass p-6 md:p-8">
            <div class="text-center">
                <p class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs tracking-[0.2em] text-gray-200">
                    <span class="size-2 rounded-full bg-cyan-300"></span>
                    Welcome back
                </p>
                <h1 class="mt-4 text-3xl font-semibold text-white">Sign in to your account</h1>
                <p class="mt-2 text-sm text-gray-200">Access your dashboard, projects, and activity.</p>
            </div>

            @if($errors->any())
                <div class="mt-6 rounded-xl border border-rose-400/30 bg-rose-500/15 px-4 py-3 text-sm text-rose-200">
                    <ul class="list-disc space-y-1 pl-4">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="mt-8 space-y-4" method="POST" action="{{route('login')}}">
                @csrf
                <label class="block">
                    <span class="mb-2 block text-sm text-gray-200">Email address</span>
                    <input
                        type="email"
                        name="email"
                        required
                        placeholder="you@example.com"
                        class="w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3 text-white outline-none placeholder:text-gray-400 focus:border-cyan-300"
                    />
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm text-gray-200">Password</span>
                    <input
                        type="password"
                        name="password"
                        required
                        placeholder="Enter your password"
                        class="w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3 text-white outline-none placeholder:text-gray-400 focus:border-cyan-300"
                    />
                </label>

                <div class="flex items-center justify-between gap-3 text-sm">
                    <label class="inline-flex items-center gap-2 text-gray-200">
                        <input type="checkbox" name="remember" class="size-4 rounded border border-white/20 bg-white/10" />
                        Remember me
                    </label>
                    <a href="#" class="text-cyan-300 transition hover:text-cyan-200">Forgot password?</a>
                </div>

                <button type="submit" class="btn mt-2 w-full bg-cyan-500 text-slate-900 hover:bg-cyan-300">Sign in</button>
            </form>

            <p class="mt-6 text-center text-sm text-gray-200">
                Don't have an account?
                <a href="#" class="text-cyan-300 transition hover:text-cyan-200">Create one</a>
            </p>
        </section>
    </main>
@endsection
