<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{

    protected $fillable = [
        'guid',
        'input',
        'output',
        'state',
        'correction'
    ];

}
