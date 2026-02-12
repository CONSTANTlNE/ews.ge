<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Post extends Model implements HasMedia
{
    use HasTranslations, InteractsWithMedia;

    public const FEATURED_IMAGE_COLLECTION = 'featured_image';

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'published_at',
        'is_published',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
    ];

    public array $translatable = ['title', 'body'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::FEATURED_IMAGE_COLLECTION)->singleFile();
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
