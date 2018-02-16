<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Task;

class StudentController extends Controller
{
    public function index(){
        // $students = Student::find(1)->sports;
        $tasks = Task::all();
        $students = Student::all();
        // dd($students);
           return view('students.index', ['students' => $students, 'tasks' => $tasks]);
    }
}
