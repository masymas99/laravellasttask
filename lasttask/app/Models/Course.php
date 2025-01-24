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
        return $this->belongsToMany(Track::class,'course_track');
    }

}
