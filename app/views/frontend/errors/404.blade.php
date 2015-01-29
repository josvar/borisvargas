@extends('frontend.layouts.master')

@section('body_opening')
    <body class="error">
    @stop


    @section('menu')
        @include('frontend.partials.header_small')
    @stop

    @section('body')
        <div class="l-content l-error" role="main">
            <div class="row">
                <div class="columns medium-6 medium-centered large-6 large-centered">
                    <div class="text_presentation">
                        <h1 class="section-heading-ssf text-center">404 PAGE NOT FOUND</h1>
                        <hr class="text_presentation-hr"/>
                        <p class="text_presentation-p text_presentation-p-contact">
                            Nothing to see here. Sorry, the page you are looking for doesn’t exist.
                            Please use the navigation above. Thanks :)
                        </p>

                        <div class="text_presentation-vr"></div>
                    </div>
                </div>
            </div>
        </div>
@stop
