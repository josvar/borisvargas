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
    <link rel="stylesheet" href="{{ elixir('styles/boris.css') }}"/>
{{--    <script src="{{ asset('assets/scripts/vendor/modernizr.js') }}"></script>--}}
    @show

</head>
@section('body_opening')
<body class="page">
@show

@section('menu')
    @include('frontend.partials.header')
@show

@yield('body', '')

@section('footer')
    @include('frontend.partials.footer')
@show

@section('scripts')
{{--<script src="{{ asset('assets/scripts/vendor.js') }}"></script>--}}

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

{{--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.7/js/foundation.min.js"></script>--}}
{{--<script>--}}
    {{--$(document).foundation();--}}
{{--</script>--}}
<script data-main="{{ asset('assets/scripts/frontend/main') }}" src="{{ asset('assets/scripts/libs/require.js') }}"></script>

@show
</body>
</html>
