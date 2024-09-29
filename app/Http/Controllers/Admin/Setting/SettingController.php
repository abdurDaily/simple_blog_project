<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Models\Logo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    //**SETTING INDEX */
    public function setting() {
        $logo = Logo::select('logo')->first();
        $settingOption = Setting::select('id', 'social_name','social_link')->get();
        return view('Backend.Layout.Setting.Setting', compact('settingOption','logo'));
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
        // $request->validate([
        //     'social_name' => 'required|url', 
        //  ]);
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
        toast('data added!', 'success');
        return back();
    }


    /** LOGO*/
/** LOGO*/
public function logo(Request $request){
    $logo = Logo::first(); // Get the existing logo, if any

    if (!$logo) {
        $logo = new Logo(); // Create a new logo if none exists
    }

    $request->validate([
        'logo' => 'required|image|mimes:jpg,jpeg,png,svg|dimensions:max_width=300,max_height=100',
    ],
    [
        'logo.dimensions' => 'The logo must be 300x50 pixels',
    ]);

    if($request->hasFile('logo')){
        // Delete the existing logo image if it exists
        if ($logo->logo) {
            $existingImage = str_replace(env('APP_URL').'/storage/', '', $logo->logo);
            Storage::delete('public/'.$existingImage);
        }

        $logo_image = $request->logo->extension();
        $logo_image_name  = 'logo-' . time().'.'.$logo_image;
        $store_image = $request->logo->storeAs("category", $logo_image_name, 'public');
        $path_image = env('APP_URL').'/storage/'.$store_image;
        $logo->logo = $path_image;
        $logo->save();
        return back();
    }
}  
}
