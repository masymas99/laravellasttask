<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'track_id',

    ];

    public function track()
    {
        return $this->belongsTo(Track::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_student', 'course_id', 'student_id');
    }
}
