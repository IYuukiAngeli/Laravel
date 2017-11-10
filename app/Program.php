<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hei;
use App\School;
class Program extends Model
{
    //

    protected $fillable = array('program_code', 'program_desc', 'created_by', 'created_date', 'edited_by', 'edited_date');

   public function hei()
   {
       return $this->hasMany('App\Hei');
   }
   public function school()
   {
       return $this->belongsTo('App\School');
   }
}
