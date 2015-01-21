@extends('frontend.layouts.master')

@section('body_opening')
<body class="home">
@stop


@section('body')
<div class="l-content" role="main">
<div class="row"><div class="columns">
    @include('frontend.partials.sections.home-static')
</div></div>
</div>
@stop
