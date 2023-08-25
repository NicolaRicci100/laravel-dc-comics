<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ env('APP_NAME') }} | @yield('title')</title>
<link rel="icon" href="{{ Vite::asset('resources/images/dc-logo.png') }}" type="images/png">
@yield('cdns')
@vite('resources/js/app.js')
