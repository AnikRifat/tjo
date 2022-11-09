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
        'price',
        'discounted_price',
        'thumbnail',
        'discount',
        'start_date',
        'end_date',
        'type',
        'hasDiscount',
    ];

    public function course()
    {
        return $this->hasOne(Course::class, 'course_id', 'course_id');
    }
}
