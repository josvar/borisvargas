@extends('backend.layouts.master')

@section('title')
    Dashboard | ChenkaCrud
@stop

@section('title-box')
    <h2>Dashboard</h2>
@stop

@section('body-box')
    <div class="ch-box">
        <form action="">
            <ul class="tabs ch-box-header-tab" data-tab>
                <li class="tab-title active"><a href="#panel1-1">Content</a></li>
                <li class="tab-title"><a href="#panel1-2">Seo</a></li>
                <li class="tab-title"><a href="#panel1-3">Tab 3</a></li>
                <li class="tab-title"><a href="#panel1-4">Tab 4</a></li>
            </ul>
        </form>
        <!-- end form -->
    </div>
    <!-- end ch-box -->
    <div class="row">
        <div class="small-12 large-6 columns">
            <div class="ch-box">
                <div class="ch-box-header">
                    <h3 class="title">Nuevo</h3>
                </div>
                <div class="ch-box-body">
                    <h4>titlo h4</h4>

                    <p>Aver este parrafo que onda</p>
                </div>
            </div>
        </div>

        <div class="small-12 large-6 columns">
            <div class="ch-box">
                <div class="ch-box-header">
                    <h3 class="title">Nuevo</h3>
                </div>
                <div class="ch-box-body">
                    <h4>titlo h4</h4>

                    <p>Aver este parrafo que onda</p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    @parent

@stop