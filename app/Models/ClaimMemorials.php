<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Image;

class ClaimMemorials extends Model
{

    public $table = 'claim_memorials';
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
    protected $fillable = [
        'id', 'relationship', 'image', 'is_verified', 'account_id', 'memorial_id', 'fullname'
    ];
    public function create($account_id, $memorial_id, $relationship, $image, $fullname)
    {        
        $data = new ClaimMemorials;
        $data->account_id = $account_id;
        $data->memorial_id = $memorial_id;
        $data->relationship = $relationship;
        $filename = time(). '.' . $image->image->extension();
        $img = Image::make($image->image->path());
        $destination = public_path('/storage/claimImages/');
        if(!file_exists($destination)){
            mkdir($destination, 777,true);
        }
        $data->image = $filename;
        $data->fullname = $fullname;
        $img->save($destination . $filename, 80);
        return $data->save();        
    }
    public function memorial()
    {
        return $this->belongsTo(Memorials::class, 'memorial_id');
    }
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
