<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemorialsReviews extends Model
{
    use HasFactory;
    protected $table = 'memorial_reviews';
    protected $fillable = ['memorial_id', 'review_id'];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
}
