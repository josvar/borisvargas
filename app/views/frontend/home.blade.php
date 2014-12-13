@extends('frontend.layouts.master')

@section('title')
Boris' Portfolio
@stop

@section('body_opening')
<body class="home">
@stop


@section('body')
<div class="l-content" role="main">
<div class="row"><div class="columns">
    @include('frontend.partials.sections.home')
</div></div>
</div>
@stop
