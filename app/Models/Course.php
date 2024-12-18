<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description',
        'duration',
        'image',
        'price',
        'instructor_id'
    ];

    public function categories()
{
    return $this->belongsToMany(Category::class, 'category_course');
}

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id');
    }


}
