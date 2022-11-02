<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [

        'course_id',
        'title',
        'image',
        'cover_image',
        'overview',
        'preview',
        'intro',
        'course_plan',
        'duration',
        'classes',
        'type',
    ];
}
