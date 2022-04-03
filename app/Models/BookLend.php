<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class BookLend extends Model
{
    use HasFactory;

    protected $fillable = ['date_lend', 'date_to_return'];

    public function book(): HasOneThrough
    {
        return $this->hasOneThrough(Book::class, BookLibrary::class);
    }
}
