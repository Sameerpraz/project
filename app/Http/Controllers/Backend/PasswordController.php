<?php

namespace App\Http\Controllers\Backend;

use Auth;
use Hash;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class PasswordController extends BackendController

{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showChangePasswordForm(){
        $this->data('title', $this->setTitle('password'));
        return view('auth.changepassword',$this->data);
    }
    public function changePassword(Request $request){
        if (!(Hash::check($request->get('password'), Auth::admin()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|confirmed',
        ]);
        //Change Password
        $admin= Auth::Admin();
        $admin->password = bcrypt($request->get('new-password'));
        $admin->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }
}
