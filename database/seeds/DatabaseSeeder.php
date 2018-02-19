<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Student;
use App\Exam;
use App\Sport;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ExamTableSeeder::class);
        
        // temporarily disable the mass assignment protection of the model to enable seeding
        Eloquent::unguard();
        
        $this->call('TaskAppSeeder');
        
        $this->command->info('Task app seeds finished.');
    }
}    
    
class TaskAppSeeder extends Seeder {
    public function run() {
        
        //  clearing all table before seeding
        DB::table('tasks')->delete();
        DB::table('sports')->delete();
        DB::table('exams')->delete();
        DB::table('sports')->delete();
        DB::table('students_sports')->delete();
        
        
        // seeding each task table
        $taskOne = Task::create(array(
            'name' => 'Reading',
        ));
        
        $taskTwo = Task::create(array(
            'name' => 'Singing',
        ));
        
        $taskThree = Task::create(array(
            'name' => 'Washing',
        ));
        
        $this->command->info('The Tasks are created!');
        
        // seeding each student table
       $studentOne = Student::create(array(
            'name'  => 'Mark',
            'reg_no' => 232,
            'task_id' => $taskOne->id
        ));
         $studentTwo = Student::create(array(
            'name'  => 'Ben',
            'reg_no' => 2332,
            'task_id' => $taskTwo->id
        ));
         $studentThree = Student::create(array(
            'name'  => 'Musa',
            'reg_no' => 27832,
            'task_id' => $taskThree->id
        ));

        $this->command->info('They Students are created two');
        
        // seed our exams table ---------------------
        Exam::create(array(
            'type'    => 'Engineering',
            'name'     => 'Math101',
            'student_id' => $studentOne->id
        ));
        Exam::create(array(
            'type'    => 'Sciences',
            'name'     => 'Bio 101',
            'student_id' => $studentOne->id
        ));

       $this->command->info('Exams wrote!');
       
       
    //   seeding the various sports
       $football = Sport::create(array(
           'name'        => 'football',
        ));
        $volleyball = Sport::create(array(
            'name'        => 'volleyball',
        ));
        
        
        // assigning each student sport an id
        $studentOne->sports()->attach($football->id);
        $studentOne->sports()->attach($volleyball->id);

        $studentTwo->sports()->attach($football->id);
        $studentTwo->sports()->attach($volleyball->id);

        $studentThree->sports()->attach($football->id);
        $studentThree->sports()->attach($volleyball->id);

        $this->command->info('They game at all sports!');
    }
}
