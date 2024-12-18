<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

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
