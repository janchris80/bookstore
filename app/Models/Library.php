<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Library extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    /**
     * @return HasManyThrough
     */
    public function books() : HasManyThrough
    {
        return $this->hasManyThrough(BookLibrary::class, Book::class);
    }


}
