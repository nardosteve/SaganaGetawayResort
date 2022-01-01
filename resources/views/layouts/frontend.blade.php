<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sagana Getaway Resort</title>

    @include('partials.frontend.css')
    @include('partials.frontend.links')

</head>
<body>

    @include('partials.frontend.loader')
    @include('partials.frontend.navbar')

    <div class="main-home-page">
        @yield('content')
    </div>

</body>
    @include('partials.frontend.js')
</html>
