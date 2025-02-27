<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class RehomingRequest extends Model
{
    //
    use HasFactory;

    // Define the table name if it's different
    protected $table = 'rehoming_requests';

    // Define the fillable attributes
    protected $fillable = [
        'dog.name', 'age', 'breed', 'sex', 'size','user_id' // Add other fields as needed
    ];
}
