<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class SchoolController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
      	$schools = School::all();   
    	return view('schools.index')->with('schools', $schools);
    }

    public function store(request $request){
        $school = new School;
        $school->school_code = $request->school_code;
        $school->school_desc = $request->school_desc;
        $school->created_by = $request->created_by;

        $school->save();
        return 'Done';
    }

    public function update(request $request){
        $school = School::find($request->id);
        $school->school_code = $request->school_code;
        $school->school_desc = $request->school_desc;
        $school->edited_by = $request->edited_by;

        $school->save();
        return $request->all();
    }

    public function delete(request $request){ 
        School::where('id', $request->id)->delete();
        return $request->all();
    }
}
