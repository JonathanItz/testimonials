<?php

namespace App\Models;

use App\Models\User;
use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Board extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function testimonials() {
        return $this->hasMany(Testimonial::class);
    }

    protected $casts = [
        'settings' => 'array'
    ];
}
