@extends('frontend.layouts.master')

@section('title')
Boris' Portfolio
@stop

@section('body')
<div class="page services">

    @include('frontend.partials.menu')

    <div class="row first-container">
        <div class="columns">
            <h1 class="title-service">Services</h1>
        </div>
    </div>
    <div class="row services-container">
        <div class="columns large-3">
            <img src="http://placehold.it/400x400" alt=""/>
            <h5>Service 1</h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores autem distinctio dolorem dolores ea eligendi.
            </p>
        </div>
        <div class="columns large-3">
            <img src="http://placehold.it/400x400" alt=""/>
            <h5>Service 1</h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores autem distinctio dolorem dolores ea eligendi.
            </p>
        </div>
        <div class="columns large-3">
            <img src="http://placehold.it/400x400" alt=""/>
            <h5>Service 1</h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores autem distinctio dolorem dolores ea eligendi.
            </p>
        </div>
        <div class="columns large-3">
            <img src="http://placehold.it/400x400" alt=""/>
            <h5>Service 1</h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores autem distinctio dolorem dolores ea eligendi.
            </p>
        </div>
    </div>

</div>
@stop