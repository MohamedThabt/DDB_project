<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=[
        'get_way',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
