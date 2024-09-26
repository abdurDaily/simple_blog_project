<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //**SETTING INDEX */
    public function setting() {
        $settingOption = Setting::select('id', 'social_name')->get();
        return view('Backend.Layout.Setting.Setting', compact('settingOption'));
    }


    //**STORE  */
    public function storeSocial(Request $request) {
        $request->validate([
           'social_name' => 'required', 
        ]);

        $settingData = new Setting();
        $settingData->social_name = $request->social_name;
        $settingData->save();
        return back();
    }

    //**STORE SOCIAL LINK */
    public function storeSocialLink(Request $request) {

        $request->validate([
            'social_link' => 'required|url', 
            'select_option' => 'required', 
         ]);

        $findData = Setting::find($request->select_option);
        $findData->social_link = $request->social_link;
        $findData->save();
        return back();
    }
}
