<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'title',
        'slug',
        'status',
        'description',
        'expired_at',
    ];
}
