<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Exception;

class Memorials extends Model
{
    use HasFactory;
    public $returnArray = array();

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

    public static function isExist($data)
    {
        $nikIsExists = self::where('nik', $data->nik)->first();
        if ($nikIsExists) {
            $returnArray['status'] = true;
            $returnArray['message'] = 'Data already exist';
        }else {
            $returnArray['status'] = false;
        }
        return $returnArray;
    }
    public function getGenderAttribute($gender)
    {
        switch ($gender) {
            case 'Male':
                # code...
                return 1;
            case 'Female':
                return 2;
            case 1:
                return 'Male';
            case 2:
                return 'Female';
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
