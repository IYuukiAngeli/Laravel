<?php

namespace App\Http\Controllers;

use App\Usertype;
use Illuminate\Http\Request;

class UsertypeController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

       	$usertypes = Usertype::all();
    	return view('usertypes.index')->with('usertypes', $usertypes);
    }

    public function create(request $request){

        $usertype = new Usertype;
        $usertype->usertype_code = $request->usertype_code;
        $usertype->usertype_desc = $request->usertype_desc;
        $usertype->created_by = $request->created_by;

        $usertype->save();

        
        return 'Done';
    } 
    
    public function delete(request $request){
        
        Usertype::where('id', $request->id)->delete();
        return $request->all();
    }
    
    public function update(request $request){
        $usertype = Usertype::find($request->id);
        $usertype->usertype_code = $request->usertype_code;
        $usertype->usertype_desc = $request->usertype_desc;
        $usertype->edited_by = $request->edited_by;

        $usertype->save();
        return $request->all();
    }
}
