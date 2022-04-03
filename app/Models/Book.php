<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'date_lend',
        'date_return'
    ];

    /**
     * @return BelongsTo
     */
    public function library() : BelongsTo
    {
        return $this->belongsTo(Library::class);
    }

    /**
     * @return HasMany
     */
    public function libraries() : HasMany
    {
        return $this->hasMany(Library::class);
    }
}
