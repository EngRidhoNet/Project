<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head content goes here -->
    @yield('head')
</head>

<body id="page-top">
    <!-- Navigation -->
    @include('partials.navigation')

    <!-- Content Section -->
    <div id="content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    @yield('scripts')
</body>

</html>
