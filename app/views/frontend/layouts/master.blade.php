<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Boris Vargas')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}">
    @section('styles')
{{--    <link rel="stylesheet" href="{{ asset('assets/styles/vendor.css') }}"/>--}}
    <link rel="stylesheet" href="{{ asset('assets/styles/boris.css') }}"/>
{{--    <script src="{{ asset('assets/scripts/vendor/modernizr.js') }}"></script>--}}
    @show

</head>
<body class="">
<div id="preloader">
    <div class="spinner"></div>
</div>

@section('menu')
@include('frontend.partials.menu')
@show
<div class="content">
    @yield('body', '')
</div>
@section('scripts')
<script src="{{ asset('assets/scripts/vendor.js') }}"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
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

<script>
    $(document).foundation();
</script>
<script src="{{ asset('assets/scripts/boris.js') }}"></script>

@show
</body>
</html>