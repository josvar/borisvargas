@extends('frontend.layouts.master')

@section('title')
Boris' Portfolio
@stop

@section('body')
<div class="page work">

    @include('frontend.partials.menu')
    <div class="body-container">
        <div class="row first-container">
            <div class="columns medium-7 large-6">
                <img class="img-project" src="http://placehold.it/600x400" alt=""/>
            </div>
            <div class="columns medium-5 large-6">
                <h6 class="subtitle-project">Our Work</h6>
                <h1 class="title-project">Illustration Design Vol. 1</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at culpa esse fugiat fugit harum inventore molestiae possimus soluta totam? Architecto asperiores ex itaque labore porro quis repudiandae voluptas voluptatibus!</p>
                <a href="#" class="button tiny">Watch Project</a>
            </div>
        </div>

        <div class="row">
            <div class="columns">
                <dl class="sub-nav">
                    <dt>Filter:</dt>
                    <dd class="active"><a href="#">All</a></dd>
                    <dd><a href="#">Editorial</a></dd>
                    <dd><a href="#">Branding</a></dd>
                    <dd><a href="#">Web</a></dd>
                    <dd><a href="#">Illustration</a></dd>
                </dl>
            </div>
            <div class="columns large-4 medium-6 thumb-project">
                <img src="http://placehold.it/600x400" alt=""/>
            </div>
            <div class="columns large-4 medium-6 thumb-project">
                <img src="http://placehold.it/600x400" alt=""/>
            </div>
            <div class="columns large-4 medium-6 thumb-project">
                <img src="http://placehold.it/600x400" alt=""/>
            </div>
            <div class="columns large-4 medium-6 thumb-project">
                <img src="http://placehold.it/600x400" alt=""/>
            </div>
            <div class="columns large-4 medium-6 thumb-project">
                <img src="http://placehold.it/600x400" alt=""/>
            </div>
            <div class="columns large-4 medium-6 thumb-project">
                <img src="http://placehold.it/600x400" alt=""/>
            </div>
        </div>

        <div class="row">
            <div class="columns large-4 medium-6 thumb-project">
                <img src="http://placehold.it/600x400" alt=""/>
            </div>
            <div class="columns large-4 medium-6 thumb-project end">
                <img src="http://placehold.it/600x400" alt=""/>
            </div>
        </div>
    </div>
    @include('frontend.partials.footer')
</div>

@stop