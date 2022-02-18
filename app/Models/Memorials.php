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
        'first_name', 'middle_name', 'last_name', 'date_of_birth', 'date_of_death',
        'nik', 'gender', 'relationship_id', 'category_id'
    ];

    public static function isExist($data)
    {
        $nikIsExists = self::where('nik', $data->nik)->first();
        if ($nikIsExists) {
            $returnArray['status'] = true;
            $returnArray['message'] = 'Data already exist';
        } else {
            $returnArray['status'] = false;
        }
        return $returnArray;
    }
    public function createMemorialImages($image_name, $path)
    {
        $temp = array('title' => $image_name, 'url' => $path);
        $this->memorialImages()->create($temp);
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
    public function search($q)
    {
        return self::with('memorialImages')
            ->where('first_name', 'LIKE', "%$q%")
            ->orWhere('middle_name', 'LIKE', "%$q%")
            ->orWhere('last_name', 'LIKE', "%$q%");
    }
    public function memorialDescription()
    {
        return $this->hasOne(MemorialDescription::class, 'memorial_id');
    }
    public function memorialImages()
    {
        return $this->hasMany(MemorialImages::class, 'memorial_id');
    }
    public function relationship()
    {
        return $this->belongsTo(Relationship::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function accounts()
    {
        return $this->belongsToMany(Account::class, 'memorials_accounts', 'memorials_id', 'accounts_id');
    }
    public function reviews()
    {
        return $this->belongsToMany(Reviews::class, 'memorials_reviews', 'memorial_id', 'review_id');
    }
}
