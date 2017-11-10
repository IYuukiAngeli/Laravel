<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hei;
use App\Program;

class School extends Model
{
    //

    protected $fillable = array('school_code', 'school_desc', 'created_by', 'created_date', 'edited_by', 'edited_date');

   public function hei()
   {
       return $this->hasMany('App\Hei');
   }

   public function program()
   {
       return $this->hasMany('App\Program');
   }
}
