<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Task\TaskContract;

class TaskController extends Controller
{
    protected $repo;
	public function __construct(TaskContract $taskContract) {
	    $this->repo = $taskContract;
    }
    
    // list all tasks
    public function index()
    {
        $tasks = $this->repo->listAllTasks();
        return view('Tasks.index', ['tasks' => $tasks]);
    }
    
    // create new task
    public function create(){

        return view('Tasks.create');
    }
    
    public function store(Request $request){
        $task = $request->all();
        
        $this->repo->create($task);
        
        return "data saved";
        
    }
    
    public function show($id){
        $task = $this->repo->find($id);
        return view('Tasks.show', ['task' => $task]);
        
    }
    // edit a task
    public function edit($id){
        $task = $this->repo->find($id);
        return view('Tasks.edit', ['task' => $task]);
    }
    
    // update a task
    public function update(Request $request, $id){
        $updatedate = $request->all();
        
        $this->repo->update($id, $updatedate);
        
        return redirect()->route('tasks');
        
    }
    // delte a task
    public function destroy($id){
        $this->repo->destroy($id);
    }
}
