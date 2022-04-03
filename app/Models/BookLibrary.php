<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookLibrary extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function book() : BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    /**
     * @return BelongsTo
     */
    public function library() : BelongsTo
    {
        return $this->belongsTo(Library::class);
    }
}
