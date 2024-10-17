<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //:: PROFILE INDDEX 
    public function profileIndex()
    {
        $active = User::select('id','author_active_status')->first();
        // dd($active);        
        return view('Backend.Layout.Profile.Profile', compact('active'));
    }


    /**
     * UPDATE PROFILE 
     */
    public function updateProfile(Request $request)
    {
        $db_user = User::find(auth()->user()->id);
        $db_user->name = $request->user_name;
        $db_user->designation = $request->designation;
        $db_user->email = $request->user_email;
        $db_user->about_author = $request->about_author;
        // if($request->hasFile('about_author')){
        //     $db_user->about_author = $request->about_author;
        // }

        if($request->hasFile('author_image')){
            $author_image = $request->author_image->extension();
            $author_image_name  = 'blog-' . time().'.'.$author_image;
            $store_image = $request->author_image->storeAs("authorImages", $author_image_name, 'public');
            $path_image = env('APP_URL').'/storage/'.$store_image;
            $db_user->image = $path_image;
            $db_user->save();
        }
        $db_user->save();

        if ($request->current_password) {


            if (Hash::check($request->current_password, $db_user->password)) {
                if ($request->user_new_password != $request->current_password) {
                    $db_user->password = Hash::make($request->user_new_password);
                    $db_user->save();
                    toast('password updated', 'success');
                } else {
                    return back()->withErrors(['error' => 'New password cannot be the same as the current password']);
                }
            } else {
                return back()->withErrors(['error' => 'Current password is incorrect']);
            }
        } else {
            toast('profile updated!', 'success');
        }
        return back();
    }



    /**
     * SIGN OUT 
     */
    public function signOut()
    {
        auth()->logout();
        return redirect()->route('home.index');
    }


    /**
     *  PROFILE ACTIVE
     */
/**
 *  PROFILE ACTIVE
 */
    public function profileActive($id){
        User::where('id', '!=', $id)->update(['author_active_status' => false]);
        $activeUser = User::find($id);
        $activeUser->author_active_status = true;
        $activeUser->save();
        return back();
    }
}
