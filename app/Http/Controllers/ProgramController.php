<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
class ProgramController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $programs = Program::all();
    	return view('programs.index')->with('programs', $programs);
    }

    public function create(request $request){

        $program = new Program;
        $program->program_code = $request->program_code;
        $program->program_desc = $request->program_desc;
        $program->created_by = $request->created_by;

        $program->save();
        return 'Done';
    }

    public function delete(request $request){
        
        Program::where('id', $request->id)->delete();
        return $request->all();
    }
    
    public function update(request $request){
        $program = Program::find($request->id);
        $program->program_code = $request->program_code;
        $program->program_desc = $request->program_desc;
        $program->edited_by = $request->edited_by;

        $program->save();
        return $request->all();
    }
}
