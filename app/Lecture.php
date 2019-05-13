<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    //
    protected $fillable = ['lecturer_id', 'room_id', 'day', 'time', 'course_id'];
}
