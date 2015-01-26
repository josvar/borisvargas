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
    <meta name="google-site-verification" content="CH9jdlCzACaTDv_C1CkGojXryqgK6A-IF4apIrGoCfU" />
    @section('seo')
        <title>Boris Vargas - Graphic Design</title>
        <meta name="description" content="I'm Boris Vargas. I'm a Graphic Designer currently based in Buenos Aires, Argentina. I work internationally as a full-time freelancer and always open for new projects and opportunities. I also sell high-end, ready to print Indesign templates to agencies and designers.">
    @show
    <meta name="viewport" content="width=device-width">

    @include('frontend.partials.favicons')

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
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-58834830-1', 'auto');
            ga('send', 'pageview');

        </script>
        <script data-main="{{ asset('assets/scripts/frontend/main') }}"
                src="{{ asset('assets/scripts/libs/require.js') }}"></script>

    @show
    </body>
</html>
