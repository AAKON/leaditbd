<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function course_details(){
        return $this->hasOne(CourseDetails::Class,'course_id');
    }
}
