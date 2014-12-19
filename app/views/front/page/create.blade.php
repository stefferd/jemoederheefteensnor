@extends('front.layout.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h1>Foto selecteren</h1>
            <p>Upload de foto waarop je een snor wilt plakken.</p>
            {{ Form::open(array('class' => 'form-horizontal jsonform', 'id' => 'jsonform',  'method' => 'post', 'action' => array('MustacheController@upload'), 'files' => true)) }}
                <div class="form-group">
                    {{ Form::label('image', null, array('class' => 'control-label'))}}
                    {{ Form::file('image') }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Opslaan') }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop