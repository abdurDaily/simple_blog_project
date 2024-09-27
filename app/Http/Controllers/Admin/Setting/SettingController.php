<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //**SETTING INDEX */
    public function setting() {
        $settingOption = Setting::select('id', 'social_name','social_link')->get();
        return view('Backend.Layout.Setting.Setting', compact('settingOption'));
    }


    //** EDIT */
    public function settingEdit($id = null) {
        $editSocialMedia = Setting::find($id);
        if (request()->ajax()) {
            return response()->json($editSocialMedia);
        }
        $allSocialMedia = Setting::latest()->get();
        return view('Backend.Layout.Setting.Edit', compact('allSocialMedia', 'editSocialMedia'));
    }

    //** UPDATE */
    public function updateSocialMedia(Request $request) {
        $id = $request->input('id');
        $editSocialMedia = Setting::find($id);
        $editSocialMedia->social_name = $request->input('social_name');
        $editSocialMedia->social_link = $request->input('social_link');
        $editSocialMedia->save();
        // Return a success response
    }


    //** DELETE */
    public function settingDelete($id) {
       Setting::find($id)->delete();
       toast('deleted Data!', 'error');
       return back();
    }


    //** EDIT SOCIAL MEDIA */
    // public function editSocialMedia($id) {
    //   $editSocialMedia = Setting::find($id);
    //   dd($editSocialMedia);
    //   return view('Backend.Layout.Setting.Edit', compact('editSocialMedia'));
    // }


    //**STORE  */
    public function storeSocial(Request $request) {
        $request->validate([
           'social_name' => 'required|unique:settings,social_name', 
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

//     /** EDIT SOCIAL MEDIA NAME*/
//     public function settingEdit(){

//     }

}
