<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Easy Web Solutions</title>
    <link rel="canonical" href="{{url()->current()}}">
    <meta name="description" content="Web და Mobile დეველოპმენტი">
    <meta name="robots" content="index, follow">
    <meta property="og:site_name" content="ews.ge">
    <meta property="og:locale" content="{{app()->getLocale()}}">
    <meta property="og:title" content="EasyWebSolutions | Custom Web Development & Digital Strategy">
    <meta property="og:description" content="Web და Mobile დეველოპმენტი">
    <meta property="og:type" content="business.business">
    <meta property="og:image" content="{{asset('assets/images/cut_logo.png')}}">
    <meta property="og:url" content="{{url()->current()}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/png" href="{{asset('assets/images/logo.png')}}" />

    <style>
        .ews-text {

            color: #1c0f4a;
            background-image: linear-gradient(45deg, #1c0f4a , #8e3cd9 50%, #f72cff 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

    </style>
</head>

<body>

{{--<div class="fixed inset-0 overflow-hidden -z-20 pointer-events-none">--}}
{{--    <div class="absolute rounded-full top-80 left-2/5 -translate-x-1/2 size-130 bg-[#D10A8A] blur-[100px]"></div>--}}
{{--    <div class="absolute rounded-full top-80 right-0 -translate-x-1/2 size-130 bg-[#2E08CF] blur-[100px]"></div>--}}
{{--    <div class="absolute rounded-full top-0 left-1/2 -translate-x-1/2 size-130 bg-[#F26A06] blur-[100px]"></div>--}}
{{--</div>--}}


@include('front.components.header')

@yield('index')
@yield('main')
@yield('blog')
@yield('projects')
@yield('project')
@yield('auth')
@yield('admin_posts')
@yield('staticTranslation')

{{--@include('front.components.footer')--}}

</body>
</html>
