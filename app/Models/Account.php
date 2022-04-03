<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthAccount;

class Account extends AuthAccount
{
    use HasFactory;

    protected $table = 'accounts';
    protected $fillable = ['email', 'username', 'role', 'type', 'password', 'created_at'];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];

    public static function deleteAccount($id)
    {        
        $account = self::find($id);
        $account->memorials()->delete();
        $account->customer_transactions()->delete();
        $account->claimMemorials()->delete();
        $account->delete();
    
    }

    public function getId()
    {
        return $this->id;
    }
    public function memorials()
    {
        return $this->belongsToMany(Memorials::class, 'memorials_accounts', 'accounts_id');
    }
    public function customer_transactions()
    {
        return $this->hasMany(CustomerTransactions::class, 'account_id');
    }
    public function claimMemorials()
    {
        return $this->hasMany(ClaimMemorials::class, 'account_id');
    }
}
