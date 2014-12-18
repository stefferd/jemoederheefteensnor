<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jemoederheefteensnor.nl | Mustache editor</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/live/css/lib/jquery/jquery-ui.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/live/css/lib/jquery/jquery-ui.structure.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/live/css/lib/jquery/jquery-ui.theme.min.css')}}" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/live/css/index.css')}}" />
</head>
<body>
    <div class="container-fluid" id="content">
        <div class="row">
            <div class="col-xs-12">
                <h1>Mustache editor</h1>
                <div id="background" class="background">
                    <img id="obj_0" class="img-responsive" src="{{ URL::asset('assets/live/img/1.jpg') }}"/>
                </div>
                {{ Form::open(array('route' => 'mustache.save', 'id' => 'jsonform')) }}
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
                        <img id="obj_1" width="150" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache.png') }}" alt="el"/>
                    </div>
                    <div class="obj_item">
                        <img id="obj_2" width="150" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-2.png') }}" alt="el"/>
                    </div>
                    <div class="obj_item">
                        <img id="obj_3" width="150" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-3.png') }}" alt="el"/>
                    </div>
                    <div class="obj_item">
                        <img id="obj_4" width="150" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-4.png') }}" alt="el"/>
                    </div>
                    <div class="obj_item">
                        <img id="obj_5" width="150" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-5.png') }}" alt="el"/>
                    </div>
                    <div class="obj_item">
                        <img id="obj_6" width="150" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-6.png') }}" alt="el"/>
                    </div>
                    <div class="obj_item">
                        <img id="obj_7" width="150" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-7.png') }}" alt="el"/>
                    </div>
                    <div class="obj_item">
                        <img id="obj_8" width="150" class="ui-widget-content" src="{{ URL::asset('assets/live/img/mustache-8.png') }}" alt="el"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <footer class="col-xs-12 text-center">
                <small>Copyright &copy; 2014 S. van den Berg</small>
            </footer>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ URL::asset('assets/live/lib/jquery-ui.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('assets/script/mustache.js') }}" type="text/javascript"></script>
</body>
</html>
