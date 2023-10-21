<?php

namespace App\Models;

use App\Models\User;
use App\Models\Testimonial;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Board extends Model
{
    use HasFactory, HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function testimonials() {
        return $this->hasMany(Testimonial::class);
    }

    protected $guarded = ['id'];

    protected $casts = [
        'settings' => 'array'
    ];
}
