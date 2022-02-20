<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionImages extends Model
{
    use HasFactory;

    public function customer_transaction(){
        return $this->belongsTo(CustomerTransactions::class, 'transaction_id');
    }
}
