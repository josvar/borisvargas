@extends('frontend.layouts.master')

@section('title')
Boris' Portfolio
@stop


@section('body_opening')
<body class="about">
@stop

@section('menu')
    @include('frontend.partials.header_small')
@stop

@section('body')
<div class="l-content l-about" role="main">
@include('frontend.partials.sections.about')
</div>
@stop