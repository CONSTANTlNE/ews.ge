<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Genesis - PrebuiltUI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/png" href="./assets/favicon.png" />
    <style>
        .ews-text {
            /*font-family: "Inter", "Montserrat", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;*/
            /*font-weight: 800;*/
            /*letter-spacing: 0.06em;*/
            /*!*text-transform: uppercase;*!*/

            /*!* blue -> silver gradient *!*/
            /*background: linear-gradient(90deg,*/
            /*#0B3D91 0%,*/
            /*#13A8FF 40%,*/
            /*#D6DEE8 100%*/
            /*);*/

            /*-webkit-background-clip: text;*/
            /*background-clip: text;*/
            /*color: transparent;*/

            /*!* subtle depth *!*/
            /*text-shadow: 0 2px 10px rgba(19, 168, 255, 0.18);*/


            color: #1c0f4a;
            background-image: linear-gradient(45deg, #1c0f4a , #8e3cd9 50%, #f72cff 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        /*.ews-text {*/
        /*    font-family: "Inter", "Montserrat", system-ui, sans-serif;*/
        /*    font-weight: 800;*/
        /*    letter-spacing: 0.06em;*/
        /*    text-transform: uppercase;*/

        /*    color: #C9D3DF; !* cool silver *!*/
        /*    text-shadow:*/
        /*        0 1px 0 rgba(255,255,255,0.22),*/
        /*        0 10px 30px rgba(19,168,255,0.22);*/
        /*}*/

        /*.ews-wrap {*/
        /*    font-family: "Inter", "Montserrat", system-ui, sans-serif;*/
        /*    font-weight: 800;*/
        /*    letter-spacing: 0.05em;*/
        /*    text-transform: uppercase;*/
        /*}*/

        /*.ews-easy { color: #0B3D91; }     !* deep blue *!*/
        /*.ews-web { color: #13A8FF; }      !* electric blue *!*/
        /*.ews-solutions { color: #D6DEE8; }!* cool silver *!*/
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
