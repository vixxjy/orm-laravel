<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable = ['name'];
    
    // reverse many to many relationship
    public function students(){
        return $this->belongsToMany(Student::class, 'students_sports', 'student_id'. 'sport_id');
    }
}
