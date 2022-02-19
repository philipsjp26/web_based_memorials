<?php

namespace App\Traits;

use Ramsey\Uuid\Exception\UnableToBuildUuidException;
use Ramsey\Uuid\Uuid as Generator;
use Carbon\Carbon as Time;

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
            } catch (UnableToBuildUuidException $e) {
                abort(500, $e->getMessage());
            }
        });
    }
}
