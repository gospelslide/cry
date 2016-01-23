<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
    	'food', 'type', 'quantity', 'admin_id'
    ];
}
