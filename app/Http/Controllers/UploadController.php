<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }
    
    public function store(Request $request)
    {

      if ($request->hasFile('toolfile')){
        $request->file('toolfile');

        /*return $request->toolfile->path();*/
        /*return $request->toolfile->store('files');*/
        return $request->toolfile->storeAs('public', 'gintoki.jpg');
        /*return Storage::url($tool_code);*/

        /*
        return Storage::putFile('files', $request->file('toolfile'));*/

      
      }else{
        return 'No file selected';
      }

         
    }
     
   public function show(){
    $url =Storage::url('gintoki.jpg');
    return "<img src ='".$url."'/>";
   }
   

}
