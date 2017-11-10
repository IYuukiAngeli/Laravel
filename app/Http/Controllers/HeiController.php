<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hei;
use DB;
use App\Usertype;
use App\User;
use App\Program;
use App\School;
use App\Tool;

class HeiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	

    	$heis = DB::table('heis')
    	    ->join('schools', function ($join){
    	    	$join->on("heis.school_id", "=", "schools.id");
    	    })
    	    ->join('programs', function ($join){
    	    	$join->on("heis.program_id", "=", "programs.id");
    	    })
    	    ->join('tools', function ($join){
    	    	$join->on("heis.tool_id", "=", "tools.id");
    	    })
    	    ->join('users', function ($join){
    	    	$join->on("heis.user_id", "=", "users.id");
    	    })
    	    ->join('usertypes', function ($join){
    	    	$join->on("heis.usertype_id", "=", "usertypes.id");
    	    })
    	    ->select('heis.*', 'schools.school_code', 'programs.program_code', 'tools.tool_code', 'users.username', 'usertypes.usertype_code')
    	    ->get();

    	$programs = DB::table('programs')
    	    ->leftjoin('schools',"programs.school_code", "=", "schools.id")
    	    ->select('programs.*', 'schools.school_code')
    	    ->get();

    	   
    	$heis =\App\Hei::with('school','program','tool','usertype', 'user')->get();
    	$usertypes = Usertype::all();
    	$users = User::all();
    	$schools = School::all();
    	$programs = \App\Program::with('school')->get();
    	$tools = Tool::all();
    	return view('hei.index', compact('heis', 'users', 'usertypes', 'schools', 'programs', 'tools'));
    }

   



   
}
