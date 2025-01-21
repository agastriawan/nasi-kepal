<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pantau Tumbuh</title>
    @include('template/styles')
    @yield('template_styles')
</head>

<body class="menu-layer">
    @include('template/header')
    @yield('content')
    @include('template/footer')

    @include('template/scripts')
    @yield('template_scripts')
</body>

</html>
