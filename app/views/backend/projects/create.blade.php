@extends('backend.layouts.master')

@section('title')
    Posts | ChenkaCrud
@stop

@section('title-box')
    <div class="header">
        <h2 class="header-title">Add Project</h2>
    </div>
@stop

@section('body-box')

    <!-- Form -->
    {{ Form::open(['route' => 'backend.projects.store']) }}
    <div id="project-create-layout" class="row">
        <div class="large-9 columns">

            @include('backend.projects.partials.create._main')

            @include('backend.projects.partials.create._text-block')

            {{--<div id="blocks-layout"></div>--}}

            @include('backend.projects.partials.create._image-dropbox')
            @include('backend.partials.seo._seo')

        </div>
        <div class="large-3 columns">
            <div id="blocks-layout"></div>
            {{--<div class="ch-box">--}}
                {{--<div class="ch-box-header">--}}
                    {{--<h2 class="ch-box-header-title">--}}
                        {{--Blocks--}}
                    {{--</h2>--}}
                {{--</div>--}}
                {{--<div class="ch-box-body">--}}
                    {{--<!-- Send Form Input -->--}}
                    {{--<div class="">--}}
                        {{--{{ Form::submit('Send', ['class' => 'button tiny left'] ) }}--}}
                        {{--{{ Form::button('Delete', ['class' => 'button tiny right alert'] ) }}--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    {{ Form::close() }}
    <!-- end Form -->
@stop