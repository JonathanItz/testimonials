<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    public function board() {
        return $this->belongsTo(Board::class);
    }

    protected $fillable = [
        'board_id',
        'full_name',
        'website',
        'job_position',
        'testimonial',
        'email',
        'tos_agreement'
    ];
}
