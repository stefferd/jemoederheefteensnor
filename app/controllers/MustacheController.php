<?php

class MustacheController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('front.index');
	}

    public function editor()
    {
        return View::make('front.editor');
    }

    public function save()
    {
        //dd(Input::all());
        $res = JSON_decode(stripslashes(Input::get('jsondata')), true);
        /* get data */
        $count_images   = count($res['images']);
        /* the background image is the first one */
        $background     = public_path() . '/assets/live/img/'. $res['images'][0]['src'];
        $photoFrame = Image::make($background);

        /* the other images */
        for($i = 1; $i < $count_images; ++$i){
            $insert         = $res['images'][$i]['src'];
            $photoFrame2Rotation = (180-$res['images'][$i]['rotation']) + 180;

            $photoFrame2W   = $res['images'][$i]['width'];
            $photoFrame2H   = $res['images'][$i]['height'];
            $mustache = Image::make($insert);
            $mustache->resize(intval($photoFrame2W), intval($photoFrame2H));
            $mustache->rotate($photoFrame2Rotation);
            $photoFrame2TOP = $res['images'][$i]['top'];
            $photoFrame2LEFT= $res['images'][$i]['left'];



            $photoFrame->insert($mustache, 'top-left', intval($photoFrame2LEFT), intval($photoFrame2TOP));
        }
        // Set the content type header - in this case image/jpeg
        $photoFrame->save(public_path() . '/assets/live/uploads/mustache.jpg');
        return View::make('front.index');
    }

}
