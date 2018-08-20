<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageProfile;
use Image;
use Auth;

class ImageProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function createImage(Request $request){
      $profileImg = new ImageProfile();
      if($request->get('image')){

      $image = $request->get('image');
      $image = str_replace('data:image/png;base64,', '', $image);
      $image = str_replace(' ', '+', $image);
      $filename = str_random(10).'.'.'png';
      $path = 'img/faces/'.$filename;
      \File::put($path, base64_decode($image));

        $profileImg->image = $filename;
        $profileImg->user_id = Auth::user()->id;
        $profileImg->save();
        return response()->json(['image'=>$profileImg->id],200);

      }


    }

}
