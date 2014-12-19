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
        $entries = Pictures::all();
		return View::make('front.page.index')->with(['entries' => $entries]);
	}

    public function editor($id)
    {
        $picture = Pictures::find($id);
        return View::make('front.page.editor')->with(array('picture' => $picture));
    }

    public function upload() {
        return View::make('front.page.create');
    }

    public function create() {
        $rules = array(
            'image' => 'required'
        );
        $message = '';

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            $message = 'Je bent vergeten een bestand toe te voegen';
        } else {
            $filename = time() . '.jpg';

            $image = Image::make(Input::file('image')->getRealPath());
            $image->resize(1024, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path() . '/assets/live/uploads/' . $filename);

            $picture = new Pictures;
            $picture->url = $filename;
            $picture->created_by = Request::getClientIp();
            $picture->save();
        }


        return Redirect::route(array('route' => 'mustache.editor', 'id' => $picture->id))->with(['message' => $message]);
    }

    public function save($id)
    {
        $picture = Pictures::find($id);
        //dd(Input::all());
        $res = JSON_decode(stripslashes(Input::get('jsondata')), true);
        /* get data */
        $count_images   = count($res['images']);
        /* the background image is the first one */
        $background     = public_path() . '/assets/live/uploads/'. $picture->url;
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
        $photoFrame->save(public_path() . '/assets/live/uploads/' . $picture->url);
        return Redirect::route('mustache.index');
    }

}
