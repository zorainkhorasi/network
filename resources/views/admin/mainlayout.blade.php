<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>
<body>
        @include('admin.partials.sidenav')
        @yield('content')
        @include('admin.partials.footer')
</body>
</html>
