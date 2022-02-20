<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;


class CustomerTransactions extends Model
{
    use HasFactory;
    use Uuid;

    protected $table = 'customer_transactions';
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
    protected $fillable = [
        'public_uid', 'status', 'account_id', 'created_at'
    ];
    
    public function transaction_images(){
        return $this->hasMany(TransactionImages::class, 'transaction_id');
    }

    public function account(){
        return $this->belongsTo(Account::class, 'account_id');
    }
}
