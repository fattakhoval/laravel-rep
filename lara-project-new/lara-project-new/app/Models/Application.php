<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'user_id',
        'service_type',
        'date_time',
        'address',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}