<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //

    protected $fillable = array('program_code', 'program_desc', 'created_by', 'created_date', 'edited_by', 'edited_date');

}
