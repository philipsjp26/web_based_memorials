<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemorialImages extends Model
{
    use HasFactory;
    protected $table = 'memorial_images';
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
    protected $fillable = [
        'title', 'url'
    ];

    public function memorial()
    {
        return $this->belongsTo(Memorials::class);
    }
}
