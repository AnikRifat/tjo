<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'course_id',
        'type',
    ];

    function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    function course()
    {
        return $this->hasOne(Course::class, 'course_id', 'course_id');
    }
}
