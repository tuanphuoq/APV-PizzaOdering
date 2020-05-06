<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

	public function __construct(UserService $userService)
	{
		$this->userService = $userService;
	}

    public function index()
    {

    	$users = $this->userService->all();

    	dd($users);
    	return view();
    }
}
