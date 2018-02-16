<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];
    
    //one - one relationship
    public function student(){
        return $this->hasOne(Student::class);
    }
}
