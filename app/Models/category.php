<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'show_at_nav',
        'status',
    ];
    
}
