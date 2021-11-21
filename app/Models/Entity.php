<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;
    protected $fillable = [
        'f_name',
        'm_name',
        'l_name',
        'address',
        'contact_number',
        'email',
    ];
}
