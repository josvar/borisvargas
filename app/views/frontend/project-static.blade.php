@extends('frontend.layouts.master')

@section('seo')
    <title>{{ $project['seo']['title'] }}</title>
    <meta name="description" content="{{ $project['seo']['description'] }}">
@stop

@section('body_opening')
    <body class="project">
    @stop

    @section('menu')
        @include('frontend.partials.header_small')
    @stop


    @section('body')
        <div class="l-content l-project" role="main">
            @include('frontend.partials.sections.project-static')
        </div>
@stop