<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'degree',
        'institution',
        'start_year',
        'end_year',
        'description'
    ];
}
