@extends('frontend.layouts.master')

@section('title')
Boris' Portfolio
@stop

@section('body')
<div class="page contact">

    @include('frontend.partials.menu')

    <div class="row title-container">
        <div class="columns">
            <h1>Say Hello</h1>
        </div>
    </div>
    <div class="row form-container">
        <div class="columns">
            <div class="row">
                <!-- Name Form Input -->
                <div class="columns large-6">
                    {{ Form::text('name', null, ['placeholder' => 'Your Name'] ) }}
                </div>
                <!-- Email Form Input -->
                <div class="columns large-6">
                    {{ Form::text('email', null, ['placeholder' => 'Your E-Mail'] ) }}
                </div>
            </div>

            <!-- Message Form Input -->
            <div class="row">
                <div class="columns">

                    {{ Form::textarea('message', null, ['placeholder' => 'Your Message'] ) }}

                </div>
            </div>

            <!-- Send Message Form Input -->
            <div class="row">
                <div class="columns">
                    {{ Form::submit('Send Message', ['class' => 'button medium'] ) }}
                </div>
            </div>

        </div>
    </div>
    <div class="container-footer">
        <div class="footer">
            <div class="columns">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid atque aut consequuntur
                    corporis, distinctio dolor earum, eum libero molestias nihil officia porro, quas reprehenderit
                    repudiandae sed soluta veniam veritatis!</p>
            </div>
        </div>
    </div>

</div>
@stop