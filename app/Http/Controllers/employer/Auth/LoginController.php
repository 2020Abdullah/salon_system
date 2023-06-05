<?php

namespace App\Http\Controllers\employer\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    
        public function show_login_view(){
            return view('auth.login');
        }
    
        public function login(Request $request){
            $validated = $request->validate([
                'email'=>'required',
                'password'=>'required',
            ]);
    
            if(Auth::guard('employer')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
                // dd('dd');
    
            return redirect()->route('employer')->with('success','you are logged in as admin');
            }
            return back()->withInput($request->only('email'));
            }
    
        public function logout(){
            auth()->logout();
            return redirect()->route('employer.showlogin');
        }
    
    
    

   
}
