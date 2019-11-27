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

    public function logout(Request $request){
        AuthController::guard('web')->logout();
        return redirect()->intended(route('index'));
    }
}
