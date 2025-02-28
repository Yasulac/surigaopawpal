<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    //
    protected $fillable = [
        'dog_name', 'age', 'breed', 'sex', 'size', 'profile_image',
    ];
}
