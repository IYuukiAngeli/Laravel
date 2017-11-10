<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hei;

class Usertype extends Model
{
    //
    protected $fillable = array('usertype_code', 'usertype_desc', 'created_by', 'created_date', 'edited_by', 'edited_date');

    public function hei()
    {
        return $this->hasMany('App\Hei');
    }
}
