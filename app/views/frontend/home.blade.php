@extends('frontend.layouts.master')

@section('title')
Boris' Portfolio
@stop

@section('body_opening')
<body class="home">
@stop


@section('body')
<div class="l-content" role="main">
    @include('frontend.partials.sections.home')
</div>
@stop
