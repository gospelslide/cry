<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'food', 'type', 'quantity', 'donor_id', 'donor_address', 'donor_latitiude', 'donor_longitude', 'status'
    ];
}
}
