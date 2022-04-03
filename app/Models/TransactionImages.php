<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionImages extends Model
{
    use HasFactory;
    protected $table = 'transaction_images';
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
    protected $fillable = ['filename', 'directory', 'transaction_id'];

    public function customer_transaction()
    {
        return $this->belongsTo(CustomerTransactions::class, 'transaction_id');
    }
}
