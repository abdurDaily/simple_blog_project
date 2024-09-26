<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Models\video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //VIDEO INDEX
    public function videoIndex(){
        return view('Backend.Layout.Video.VideoIndex');
    }


    //STORE 
    public function storeVedio(Request $request){
        $request->validate([
            'video_title' => 'required',
            'video_link' => 'required|url'
        ]); 


        $video = new video();
        $video->video_title = $request->video_title;
        $video->video_link = $request->video_link;
        $video->save();
        return redirect()->route('video.list');
    }


    //VIDEO LIST 
    public function videoList(){
     $allVideoRecords = video::select('id','video_title', 'video_link')->latest()->simplepaginate(10);
     return view('Backend.Layout.Video.AllVideo', compact('allVideoRecords'));
    }


    //EDIT VIDEO 
    public function editVideo($id){
        $editVideo = video::find($id);
        return view('Backend.Layout.Video.Edit', compact('editVideo'));
    }


    //UPDATE VIDEO 
    public function updateVideo(Request $request, $id){
        $video = video::find($id);
        $video->video_title = $request->video_title;
        $video->video_link = $request->video_link;
        $video->save();
        return redirect()->route('video.list');
    }


    //DELETE 
    public function deleteVideo($id){
        video::find($id)->delete();
        return redirect()->route('video.list');
    }
}
