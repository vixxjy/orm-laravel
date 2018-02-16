<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = ['name', 'type'];
    // reverse one to many relationship
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
