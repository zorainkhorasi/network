<!DOCTYPE html>
<html lang="en">
<head>
    @include('cart.partials.head')

</head>
<body>
        @include('cart.partials.sidenav')
        @yield('content')
        @include('cart.partials.footer')
</body>
</html>
