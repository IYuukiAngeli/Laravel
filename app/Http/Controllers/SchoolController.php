<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class SchoolController extends Controller
{
    //

    public function index(){

    	//get all users
    	$schools = School::all();

    	//load the view and pass the users

    	return view('schools.index')->with('schools', $schools);
    }

    public function create(request $request){
        //load create form

        $school = new School;
        $school->school_code = $request->school_code;
        $school->school_desc = $request->school_desc;

        $school->save();
        return 'Done';
    }
}
