<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'course_id',
         'title',
         'duration'
        ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }               
}
