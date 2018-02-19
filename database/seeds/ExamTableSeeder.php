<?php

use Illuminate\Database\Seeder;
use App\Post;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'testdata',
            'content' => 'we grow daily',
            'is_published' => false
        ]);
        
        Post::create([
            'title' => 'testal',
            'content' => 'happy grow daily',
            'is_published' => false
        ]);
        
        Post::create([
            'title' => 'testdata',
            'content' => 'growing daily',
            'is_published' => false
        ]);
        Post::create([
            'title' => 'testdata',
            'content' => 'we grow daily',
            'is_published' => false
        ]);
        Post::create([
            'title' => 'testdata',
            'content' => 'we grow daily',
            'is_published' => false
        ]);
    }
}
