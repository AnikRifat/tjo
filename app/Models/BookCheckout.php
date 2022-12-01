<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCheckout extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'book_id',
        'type',
    ];

    function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    function book()
    {
        return $this->hasOne(Book::class, 'book_id', 'book_id');
    }
}
