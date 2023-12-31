<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;

    protected $table = 'centres';
    
    protected $fillable = [
        'name',
        'adress',
        'cp',
        'city'
    ];
    
    protected $hidden = [];
}
