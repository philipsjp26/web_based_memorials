<?php

namespace App\Traits;

use Carbon\Carbon as Time;
use Exception;

trait Uuid
{
    protected static function get_time()
    {
        return Time::now()->format('mdYH');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            try {
                $uuid = self::get_time() . 'CUST000' . Time::now()->format('s');
                $model->public_uid = strtoupper($uuid);
            } catch (Exception $e) {
                abort(500, $e->getMessage());
            }
        });
    }
}
