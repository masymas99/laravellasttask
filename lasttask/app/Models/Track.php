<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    /** @use HasFactory<\Database\Factories\TrackFactory> */
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class,'course_track');
    }
}
