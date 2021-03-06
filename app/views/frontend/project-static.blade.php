@extends('frontend.layouts.master')

@section('seo')
    <title>{{ $project['seo']['title'] }}</title>
    <meta name="description" content="{{ $project['seo']['description'] }}">
    <meta property="og:description" content="{{ $project['seo']['description'] }}" />
    <meta property="og:title" content="{{ $project['seo']['title'] }}" />
    <meta property="og:image" content="{{ canonical_url($project['thumb']) }}" />
    <link rel="canonical" href="{{ canonical_url($project['seo']['canonical']) }}" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@borisvargas21">
    <meta name="twitter:title" content="{{ $project['seo']['title'] }}">
    <meta name="twitter:description" content="{{ $project['seo']['description'] }}">
    <meta name="twitter:image:src" content="{{ canonical_url($project['thumb']) }}">
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