<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
class ProgramController extends Controller
{
    //

    public function index(){

    	//get all users
    	$programs = Program::all();

    	//load the view and pass the users

    	return view('programs.index')->with('programs', $programs);
    }

    public function create(request $request){
        //load create form

        $program = new Program;
        $program->program_code = $request->program_code;
        $program->program_desc = $request->program_desc;

        $program->save();
        return 'Done';
    }
}
