<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ config('app.name') }}</title>
    <meta name="author" content="Muhammad Sumon Molla Selim">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" id="css-main" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
    <link rel="stylesheet" id="css-theme" href="{{ mix('css/dashmix.css') }}">

@yield('css_after')

<!-- Scripts -->
    <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
</head>
<body>
<div id="page-container" class="sidebar-o side-scroll page-header-fixed page-header-dark main-content-narrow">
    @include('backend.partials._sidebar')

    @include('backend.partials._header')

    <!-- Main Container -->
    <main id="main-container">
        @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row font-size-sm">
                <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                    <a class="font-w600" href="{{ url('/') }}">{{ config('app.name') }}</a>
                    &copy; <span data-toggle="year-copy">{{ date('Y') }}</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<script src="{{ mix('js/dashmix.app.js') }}"></script>
<script src="{{ mix('js/laravel.app.js') }}"></script>
@yield('js_after')
</body>
</html>
