@extends('front.layout.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h1>Mustache editor</h1>
            <div id="background" class="background">
                <img id="obj_0" class="img-responsive" src="{{ URL::asset('assets/live/uploads/') }}/{{ $picture->url }}"/>
            </div>
            {{ Form::open(array('route' => array('mustache.save', $picture->id), 'id' => 'jsonform', 'class' => 'jsonform')) }}
                {{ Form::hidden('jsondata', null, array('value' => '', 'id' => 'jsondata')) }}
                <a class="btn btn-default" id="submit">Toevoegen</a>
            {{ Form::close() }}
        </div>
    </div>
    <div class="row editor">
        <div class="">
            <div id="tools" class="col-xs-12 col-md-2">
            </div>
            <div id="objects" class="col-xs-12 col-md-10">
                <p><i>Sleep een snor naar de afbeelding om te beginnen.</i></p>
                <div class="obj_item">
                    <img id="obj_1" width="150" height="75" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache.png') }}" alt="el"/>
                </div>
                <div class="obj_item">
                    <img id="obj_2" width="150" height="75" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-2.png') }}" alt="el"/>
                </div>
                <div class="obj_item">
                    <img id="obj_3" width="150" height="75" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-3.png') }}" alt="el"/>
                </div>
                <div class="obj_item">
                    <img id="obj_4" width="150" height="75" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-4.png') }}" alt="el"/>
                </div>
                <div class="obj_item">
                    <img id="obj_5" width="150" height="75" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-5.png') }}" alt="el"/>
                </div>
                <div class="obj_item">
                    <img id="obj_6" width="150" height="75" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-6.png') }}" alt="el"/>
                </div>
                <div class="obj_item">
                    <img id="obj_7" width="150" height="75" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-7.png') }}" alt="el"/>
                </div>
                <div class="obj_item">
                    <img id="obj_8" width="150" height="75" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-8.png') }}" alt="el"/>
                </div>
            </div>
        </div>
    </div>
@stop