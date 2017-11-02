<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //

    protected $fillable = array('school_code', 'school_desc', 'created_by', 'created_date', 'edited_by', 'edited_date');
}
