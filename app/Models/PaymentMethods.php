<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PaymentMethods extends Model
{
    protected $table = 'payment_methods';
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];
    protected $fillable = [
        'id',
        'bank_name', 'account_number'
    ];
}
