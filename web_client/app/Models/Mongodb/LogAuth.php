<?php

namespace App\Models\Mongodb;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\HybridRelations;

class LogAuth extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'log_auth';

    use HasFactory,HybridRelations;

    protected $fillable = [
        'user_id',
        'ip_address',
        'tag',
        'agent',
        'origin'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
