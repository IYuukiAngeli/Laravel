<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
    //
    protected $fillable = array('usertype_code', 'usertype_desc', 'created_by', 'created_date', 'edited_by', 'edited_date');

    public function tbl_users(){
    	return $this->belongsTo('UserLogin');
    }
}
