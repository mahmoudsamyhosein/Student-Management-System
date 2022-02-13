<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable =[
        'cne','first_name','second_name','age','speciality'
    ];
}
