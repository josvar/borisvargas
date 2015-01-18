@extends('backend.layouts.master')

@section('title')
    Images | ChenkaCrud
@stop

@section('title-box')
    <div class="header">
        <h2 class="header-title">Add Image</h2>
    </div>
@stop

@section('body-box')

    <!-- Form -->
    {{ Form::open(['route' => 'backend.images.store', 'files' => true]) }}
    <div class="row">
        <div class="large-9 columns" id="blocks-layout">


        </div>
        <div class="large-3 columns">
            <div class="ch-box">
                <div class="ch-box-header">
                    <h2 class="ch-box-header-title">
                        Publish
                    </h2>
                </div>
                <div class="ch-box-body">
                    <!-- Send Form Input -->
                    <div class="">
                        {{ Form::submit('Send', ['class' => 'button tiny left'] ) }}
                        {{ Form::button('Delete', ['class' => 'button tiny right alert'] ) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}
    <!-- end Form -->
@stop