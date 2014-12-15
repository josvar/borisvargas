@extends('frontend.layouts.master')

@section('title')
Boris' Portfolio
@stop

@section('body_opening')
<body class="project">
@stop

@section('menu')
    @include('frontend.partials.header_small')
@stop


@section('body')
<div class="l-content l-project" role="main">
@include('frontend.partials.sections.project')
</div>
@stop