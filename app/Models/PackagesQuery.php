<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagesQuery extends Model
{
    use HasFactory;

    protected $table = 'packages_queries';

    protected $fillable = [
        'category',
        'package',
        'price',
        'name',
        'email',
        'number',
        'message',
    ];
}
