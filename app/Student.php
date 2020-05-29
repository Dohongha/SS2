<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['name', 'phonenumber', 'address', 'course_id'];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
