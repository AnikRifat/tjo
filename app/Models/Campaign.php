<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'name',
        'thumbnail',
        'discount',
        'start_date',
        'end_date',
        'type',
        'hasDiscount',
    ];
}
