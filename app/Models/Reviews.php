<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    public $table = 'reviews';
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
    protected $fillable = ['comments', 'rating', 'username'];

    public function memorials()
    {
        return $this->belongsToMany(Memorials::class, 'memorials_reviews', 'review_id', 'memorial_id');
    }
}
