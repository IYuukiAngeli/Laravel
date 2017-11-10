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
   
        /*return $request->toolfile->path();*/
        /*return $request->toolfile->store('files');*/
       /* return $request->toolfile->storeAs('files', 'gintoki.jpg');*/
        /*return Storage::url($tool_code);*/

        /*
        return Storage::putFile('files', $request->file('toolfile'));*/
        $tool->tool_code = $request->tool_code;
        $tool->tool_desc = $request->tool_desc;
         
        $tool->created_by = $request->created_by;
        $tool->save();

        return "Done";
      

    

        
    }


    public function delete(request $request){
        
        Tool::where('id', $request->id)->delete();
        return $request->all();
    }
    
    public function update(request $request){
        $tool = Tool::find($request->id);


        $tool->tool_code = $request->tool_code;
        $tool->tool_desc = $request->tool_desc;
        $tool->tool_file = $file->store('toolfile');
         
        $tool->edited_by = $request->edited_by;


        $tool->save();
        return $request->all();
        
    } 

    public function store(request $request){

       if ($request->hasFile('toolfile')){
         $request->file('toolfile');
         /*return $request->toolfile->path();*/
         /*return $request->toolfile->store('files');*/
         return $request->toolfile->storeAs('files', 'gintoki.jpg');
         /*return Storage::url($tool_code);*/

         /*
         return Storage::putFile('files', $request->file('toolfile'));*/

       
       }else{
         return 'No file selected';
       }


    }




}
