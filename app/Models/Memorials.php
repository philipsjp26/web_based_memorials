<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memorials extends Model
{
    use HasFactory;
    protected $table = 'memorials';
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
    protected $fillable = [
        'id',
        'first_name', 'middle_name', 'last_name',
        'nik', 'gender', 'relationship_id', 'category_id'
    ];

    public function getGenderAttribute($gender)
    {
        switch ($gender) {
            case 'Male':
                # code...
                return 1;
            case 'Female':
                return 2;
            default:
                # code...
                return 0;
        }
    }
    public function memorialImages()
    {
        return $this->hasMany(MemorialImages::class, 'memorial_id');
    }
}
