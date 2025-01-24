<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Track;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tracks = Track::all();
        Course::factory(10)->create()->each(function ($course) use ($tracks) {
            $course->track()->associate($tracks->random()); // ربط الكورس بتراك عشوائي
            $course->save();
        });
    }
}
