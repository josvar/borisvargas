<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'ChenkaCrud')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}">
    @section('styles')
        <link rel="stylesheet" href="{{ elixir('styles/backend.css') }}"/>
        {{--    <script src="{{ asset('assets/scripts/vendor/modernizr.js') }}"></script>--}}
    @show

</head>
<body class="backend">

<div class="l-wrap">
    <div id="admin-menu-background"></div>
    @include('backend.partials._sidebar')
    @include('backend.partials._topbar')
    <div class="l-content row">
        <div class="columns">
            {{-- Aca van columnas --}}
            @yield('title-box')
            {{-- Aca van columnas o filas y columnas --}}
            @yield('body-box', 'Content Body')
        </div>
    </div>
    <!-- end l-content -->
</div>
<!-- end l-wrap-->


@section('scripts')

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    @if (App::environment() == 'production')
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X');
            ga('send', 'pageview');
        </script>
    @endif

    <script data-main="{{ asset('assets/scripts/backend/main') }}"
            src="{{ asset('assets/scripts/libs/require.js') }}"></script>

@show
</body>
</html>
