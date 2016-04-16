<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
   protected $fillable=['name','img','address','email','website','phone1','phone2','mobile1','mobile2','password','license'];

}

