<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public $fillable = [
        'name', 'start_date','end_date', 'slug', 'duration', 'location', 'description'
    ];

    public $casts =[

        'start_date' => 'datetime',
        'end_date' => 'datetime'

    ];
}
