<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'author'];

    public function libraries() : HasMany
    {
        return $this->hasMany(BookLibrary::class, 'book_id');
    }
}
