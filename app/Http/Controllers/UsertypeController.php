<?php

namespace App\Http\Controllers;

use App\Usertype;
use Illuminate\Http\Request;

class UsertypeController extends Controller
{
    //

    public function index(){

    	//get all users
    	$usertypes = Usertype::all();

    	//load the view and pass the users

    	return view('usertypes.index')->with('usertypes', $usertypes);
    }

    public function create(request $request){
        //load create form

        $usertype = new Usertype;
        $usertype->usertype_code = $request->usertype_code;
        $usertype->usertype_desc = $request->usertype_desc;

        $usertype->save();
        return 'Done';
    }
}
