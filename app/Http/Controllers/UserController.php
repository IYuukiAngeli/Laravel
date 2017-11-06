<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){

    	//get all users
    	$users = User::all();

    	//load the view and pass the users

    	return view('users.index')->with('users', $users);
    }

    public function create(request $request){
        //load create form

        $user = new User;
        $user->username = $request->username;
        $user->fullname = $request->fullname;
        $user->password = $request->password;
        $user->usertype = bcrypt($request->usertype);

        $user->save();
        return 'Done';
    }

    public function delete(request $request){
        
        User::where('id', $request->id)->delete();
        return $request->all();
    }

    public function show(request $request){
        
        
        return User::where('id', $request->id)->first();;
    }
    
    public function update(request $request){
        
        $user = User::find($request->id);
        $user->username = $request->username;
        $user->fullname = $request->fullname;
        $user->password = bcrypt($request->password);
        $user->usertype = $request->usertype;

        $user->save();
        return $request->all();
    }

/*    public function search(request $request){
        $term = $request->term;
        $username = User::where('user','LIKE','%'.$term.'%')->get();
    	//return $user;

        if (count($username )==0) {
            # code...
            return 'No item found';
        }
    }*/




/*    public function store(){
    	//
    	$rules = array(
            'username'=> 'required',
            'fullname'=> 'required',
            'password'=> 'required',
            'usertype'=> 'required'
            
        );
        
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->withErrors($validator)
                ->withInput(Request::except('password'));
        } else {
            // store
            $user = new User;
            $user->username = Request::get('username');
            $user->fullname = Request::get('fullname');
            $user->password = bcrypt(Request::get('password'));
            $user->usertype = Request::get('usertype');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully created user!');
            return Redirect::to('users');
        }
    }*/
}
