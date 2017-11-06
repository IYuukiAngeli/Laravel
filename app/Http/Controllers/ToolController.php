<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;

class ToolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$tools = Tool::all();
    	return view('tools.index')->with('tools', $tools);
    }

    public function create(request $request){

        $tool = new Tool;
   
        if ($request->hasFile('tool_file')) {
            $tool->tool_code = $request->tool_code;
            $tool->tool_desc = $request->tool_desc;
            $request->tool_file->storeAs('public/tool',$tool_file);
            $tool_file = $request->tool_code.'.'.$request->tool_file->getClientOriginalExtension();
            $tool->created_by = $request->created_by;
            $tool->save();

            return 'Done';
        }else{
            return 'none';
        }
        
    }

    public function delete(request $request){
        
        Tool::where('id', $request->id)->delete();
        return $request->all();
    }
    
    public function update(request $request){
        $tool = Tool::find($request->id);
        $tool->tool_code = $request->tool_code;
        $tool->tool_desc = $request->tool_desc;
        $tool->tool_file = $request->tool_file;
        $tool->edited_by = $request->edited_by;

        $tool->save();
        return $request->all();
    }
}
