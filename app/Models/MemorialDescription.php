<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemorialDescription extends Model
{
    use HasFactory;
    protected $table = 'memorial_descriptions';
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
    protected $fillable = ['id', 'description', 'life','memorial_id'];

    public function memorials(){
        return $this->belongsTo(Memorials::class);
    }
}
