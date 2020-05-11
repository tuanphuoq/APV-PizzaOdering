<?php

namespace App\Services;

use App\User;
use Auth;
use Hash;


        class LoginService
        { 
                public function check($request){
                    $admin = [
                        'username' => $request->username,
                        'password' => $request->password,
                        'group_id' => 1,
                    ];
                    $user = [
                        'username' => $request->username,
                        'password' => $request->password,
                        'group_id' => 2,
                    ];
                    if (Auth::attempt($admin)) {
                        return redirect('product');
                    }if(Auth::attempt($user)){
                        return redirect('home');
                    }
                }
                public function saveAcc($request){
                    $model = new User();
                    $model->username = $request->username;
                    $model->name = "Guest";
                    $model->group_id = 1;
                    $model->email = $request->email;
                    $model->password = Hash::make($request->all()['password']);
                    $model->save();
                    auth()->login($model);
                    return redirect()->route('home');
                }
        }