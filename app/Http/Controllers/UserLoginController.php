<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    //

    public function index(){
    	$tbl_users = UserLoginController:: all();

    	return view('userlogins.index');
    }

    public function userloginprocess(){
    	return view('posts.index');
    }


}
