<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    use HasFactory;

    // Specify table name if not pluralized
    protected $table = 'students';

    // Define fillable fields for mass assignment
    protected $fillable = [
        'fname',
        'lname',
        'age',
    ];
}
