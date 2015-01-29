@extends('frontend.layouts.master')

@section('body_opening')
<body class="contact">
@stop

@section('menu')
    @include('frontend.partials.header_small')
@stop


@section('body')
<div class="l-content l-contact" role="main">
@include('frontend.partials.sections.contact')
</div>
@stop