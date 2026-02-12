<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Language extends Model
{
    protected $guarded = [];

    public function restaurants(): BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class)
            ->withPivot('is_active');
    }
}
