<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //**SETTING INDEX */
    public function setting() {
        return view('Backend.Layout.Setting.Setting');
    }


    //**STORE  */
    public function storeSocial(Request $request) {
       dd($request);
    }
}
