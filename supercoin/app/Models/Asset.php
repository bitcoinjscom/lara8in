<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Asset extends Model
{
    use HasFactory, SoftDeletes;
    protected $collection = 'assets';
    protected $connection = 'mongodb';

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
    ];
}
