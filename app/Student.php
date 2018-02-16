<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'reg_no'];
    
    // reverse one-one relationship
    public function task(){
        return $this->belongsTo(Task::class);
    }
    // one to many relationship
    public function exams(){
        return $this->hasMany(Exam::class);
    }
    // many to many relationship
    public function sports(){
        return $this->belongsToMany(Sport::class, 'students_sports', 'student_id', 'sport_id');
    }
}
