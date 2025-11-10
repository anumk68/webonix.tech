<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable=[
        'first_name',
        'last_name',
        'service',
        'email',
        'phone',
        'website',
    ];
}
