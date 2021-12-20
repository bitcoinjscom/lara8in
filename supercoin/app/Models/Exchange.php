<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Exchange extends Model
{
    use HasFactory, SoftDeletes;

    protected $collection = 'exchanges';
    protected $connection = 'mongodb';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'id',
        'open_interest_btc',
        'trade_volume_24h_btc',
        'number_of_perpetual_pairs',
        'number_of_futures_pairs',
        'image',
        'year_established',
        'country',
        'description',
        'url',
        'updated_at'
    ];

    public static function boot() {
        parent::boot();

        static::creating(function($exchange)
        {
            //$exchange->
        });
    }
}
