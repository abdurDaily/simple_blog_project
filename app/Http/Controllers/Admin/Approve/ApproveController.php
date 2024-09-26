<?php

namespace App\Http\Controllers\Admin\Approve;

use App\Models\User;
use App\Http\Controllers\Controller;

class ApproveController extends Controller
{
    /**
     * APPROVE INDEX FILE 
     */

     public function approveIndex(){
        $userInfo = User::where('id','!=',1)->latest()->get();
        return view('Backend.Layout.Approve.Approve', compact('userInfo'));
     }
     /**
      * IS APPROBE
      */
      public function isApprove($id){
         // dd(User::find($id));
         $isApprove = User::find($id);
         if( $isApprove->status == 0){
            $isApprove->status = 1;
         }
         else{
            $isApprove->status = 0;
            }

            $isApprove->save();
            return redirect()->back();
      }

     /**
      * PANDDING REQUEST 
      */
      public function pandding(){
         return view('Backend.Layout.Pandding.Pandding');
      }

      /**
       * APPROVE DELETE
       */
      public function approveDelete($id){
         User::find($id)->delete();
         toast('deleted request!', 'error');
         return back();
      }
}
