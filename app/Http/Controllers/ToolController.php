<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;

class ToolController extends Controller
{
    //

    public function index(){

    	//get all users
    	$tools = Tool::all();

    	//load the view and pass the users

    	return view('tools.index')->with('tools', $tools);
    }

    public function create(request $request){
        //load create form

        $tool = new Tool;
        $tool->tool_code = $request->tool_code;
        $tool->tool_desc = $request->tool_desc;
        $tool->tool_file = $request->tool_file;

        $tool->save();
        return 'Done';
    }
}
