<?php

namespace App\Http\Controllers\Frontend\Video;

use App\Http\Controllers\Controller;
use App\Models\video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //FETCH ALL VIDEO 
    public function videoFetch(){
        $allVideos = video::latest()->simplepaginate(12);
        return view('Frontend.Videos.Index',compact('allVideos'));
    }
}
