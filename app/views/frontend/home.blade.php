@extends('frontend.layouts.master')

@section('title')
Boris' Portfolio
@stop

@section('body')
<div class="page home">

    @include('frontend.partials.menu')

    <div class="row first-container">
        <div class="columns">
            <h1>Boris Vargas</h1>
        </div>
    </div>
    <div class="container-footer">
        <div class="footer">
            <div class="columns">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid atque aut consequuntur corporis, distinctio dolor earum, eum libero molestias nihil officia porro, quas reprehenderit repudiandae sed soluta veniam veritatis!</p>
            </div>
        </div>
    </div>

</div>
@stop
