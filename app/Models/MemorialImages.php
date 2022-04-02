<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemorialImages extends Model
{
    use HasFactory;
    public $response = array();

    protected $table = 'memorial_images';
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
    protected $fillable = [
        'memorial_id', 'title', 'url'
    ];

    public function validate_total_image($memorial_id)
    {
        $max_memorial_images = 5;
        $count = self::where('memorial_id', $memorial_id)->count();    
        
        if ((int)$max_memorial_images <= $count) {
            $response['status'] = true;
            $response['message'] = 'Maximum file upload is 5, Please upgrade your account';
        } else {
            $response['status'] = false;
        }
        return $response;
    }

    public function memorial()
    {
        return $this->belongsTo(Memorials::class);
    }
}
