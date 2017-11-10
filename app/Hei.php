<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Usertype;
use App\School;
use App\Tool;
use App\Program;
class Hei extends Model
{
    //
    protected $fillable = array('user_id', 'school_id','program_id', 'tool_id', 'usertype_id','created_by', 'created_date', 'edited_by', 'edited_date');

    public function school(){
    	return $this->belongsTo('App\School');
    } 
    public function tool(){
    	return $this->belongsTo('App\Tool');
    } 
    public function program(){
    	return $this->belongsTo('App\Program');
    } 
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function usertype(){
    	return $this->belongsTo('App\Usertype');
    }
}
