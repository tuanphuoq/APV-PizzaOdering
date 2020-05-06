<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Services\LoginService;
use Illuminate\Http\Request;
use Auth;


        class AccountController extends Controller
        {
            use AuthenticatesUsers;

            public function __construct(LoginService $loginService){
                $this->loginService = $loginService;
            }

            public function loginForm(){
                return view('auth.login');
            }

            public function postLogin(LoginRequest $request){
                return $this->loginService->check($request);
            }

            public function register(){
	            return view('auth.register');
	        }

	        public function save(RegisterRequest $request){
                return $this->loginService->saveAcc($request); 
	        }
            
            public function logout(){
                Auth::logout();
                return redirect()->route('home');
            }
        }
