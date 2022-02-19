<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthAccount;

class Account extends AuthAccount
{
    use HasFactory;

    protected $table = 'accounts';
    protected $fillable = ['email', 'username', 'password', 'created_at'];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];

    public function getId()
    {
        return $this->id;
    }
    public function memorials()
    {
        return $this->belongsToMany(Memorials::class, 'memorials_accounts');
    }
    public function customer_transactions()
    {
        return $this->hasMany(CustomerTransactions::class, 'account_id');
    }
}
