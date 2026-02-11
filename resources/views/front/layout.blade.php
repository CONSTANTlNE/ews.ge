<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Genesis - PrebuiltUI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/png" href="./assets/favicon.png" />
</head>

<body>
@include('front.components.header')

@yield('index')
@yield('blog')
@yield('projects')
@yield('project')

@include('front.components.footer')

</body>
</html>
