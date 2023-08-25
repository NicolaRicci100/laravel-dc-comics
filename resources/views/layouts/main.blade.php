<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.header')
    <main class="container">
        @yield('main')
    </main>
    @yield('scripts')
</body>

</html>
