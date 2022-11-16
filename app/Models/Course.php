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
        'price',
        'image',
        'cover_image',
        'overview',
        'preview',
        'intro',
        'duration',
        'classes',
        'cateegory',
        'cateegory_id',
    ];
    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'course_id', 'course_id');
    }
}
