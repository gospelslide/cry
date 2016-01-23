<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable=['name','email','password','address','status','latitude','longitude'];
}
