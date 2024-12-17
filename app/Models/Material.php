<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name',
        'material_type',
        'material_path',
        'session_id',
    ];

    public function session()
    {
        return $this->belongsTo(Session::class);
    }
    
}
