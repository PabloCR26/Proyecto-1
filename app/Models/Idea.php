<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $guarded = [];

    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class);

    }
}
