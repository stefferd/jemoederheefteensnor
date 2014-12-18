<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jemoederheefteensnor.nl | Mustache slidehow</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/live/css/lib/jquery/jquery-ui.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/live/css/lib/jquery/jquery-ui.structure.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/live/css/lib/jquery/jquery-ui.theme.min.css')}}" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/live/css/index.css')}}" />
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::route('mustache.index') }}" title="Jemoederheefteensnor.nl">Jemoederheefteensnor.nl</a>
            </div>
            <div class="collapse navbar-collapse">
                <div class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ URL::route('mustache.index') }}" class="btn btn-default" title="Mustache slides">Slides</a>
                        <a href="{{ URL::route('mustache.editor') }}" class="btn btn-primary" title="Mustache Editor">Editor</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid" id="content">
        <div class="row">
            <header>
                <nav role="navigation">
                    <div class="nav nav-header"
                </nav>
            </header>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h1>Jemoederheefteensnor.nl</h1>
                <div class="slides">
                    <img src="{{ URL::asset('assets/live/uploads/mustache.jpg') }}" alt="Mustache" />
                </div>
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ URL::asset('assets/live/lib/jquery-ui.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('assets/script/mustache.js') }}" type="text/javascript"></script>
</body>
</html>
