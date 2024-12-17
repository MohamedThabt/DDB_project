<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'name',
        'description',
        'due_date',
        'session_id',
    ];

    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
