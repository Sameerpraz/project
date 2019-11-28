<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends FrontendController
{
    public function index(){
        return view($this->pagePath . 'user_dashboard.user_dashboard', $this->data);
    }

    public function edit(){
        return view($this->pagePath .'user_dashboard.profile',$this->data);

    }

    public function addproduct(){
        return view($this->pagePath .'user_dashboard.add-product',$this->data);
    }

    public function changepassword(){
        return view($this->pagePath .'user_dashboard.change_password',$this->data);
    }

    public function logout(Request $request){
        AuthController::guard('web')->logout();
        return redirect()->intended(route('index'));
    }
}
