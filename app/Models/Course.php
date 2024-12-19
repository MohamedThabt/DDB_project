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

    public function students()
    {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id')
                    ->where('type', 'student');
    }

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
