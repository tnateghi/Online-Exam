<!doctype html>
<!--[if lte IE 9]>         <html lang="en" class="lt-ie10 lt-ie10-msg no-focus"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en" class="no-focus">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>آزمون آنلاین</title>

    <meta name="description" content="Online Exam project with laravel">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Online Exam project with laravel">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <link rel="shortcut icon" href="/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/all.css">

    {{-- Custom styles --}}
    @yield('styles')

    <!-- END Stylesheets -->
</head>

<body>
    <div id="page-loader" class="hide"></div>

    <!-- Page Container -->

    <div id="page-container" class="@yield('sidebar-class', " sidebar-o sidebar-r side-scroll page-header-modern
        main-content-boxed")">
        <!-- Side Overlay-->
        @include('layouts.sidebar-left')
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- END Sidebar -->

        <!-- Header -->
        @include('layouts.header')
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            @yield('content')
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        @include('layouts.footer')
        <!-- END Footer -->
    </div>
    
    <!-- END Page Container -->

    <!-- All JS Files -->
    <script src="/js/all.js"></script>

    {{-- custom scripts --}}
    @yield('scripts')
</body>

</html>