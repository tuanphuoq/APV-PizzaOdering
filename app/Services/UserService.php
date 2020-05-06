<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;
use DB;

/**
 * 
 */

 class UserService
 
 {

 	public function all()

 	{
 		$users = DB::table('users')->select('users.id', 'users.name', 'users.email', 'users.username', 'users.password', 'users.phone')->get();
 		return $users
 	}
 }