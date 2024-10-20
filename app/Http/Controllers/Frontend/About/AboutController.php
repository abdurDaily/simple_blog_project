<?php

namespace App\Http\Controllers\Frontend\About;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class AboutController extends Controller
{
    /**ABOUT INDEX */
    public function aboutIndex() {  
     $socialLink = Setting::get();
     $about_user = User::where('author_active_status',1)->first();
    //  dd($about_user);
     return view('Frontend.About.About',compact('about_user','socialLink'));
    }
}
