<?php

namespace App\Repositories\Task;
use App\Repositories\Task\TaskContract;
use App\Task;

class EloquentTaskRepository implements TaskContract
{

	public function create($requestData)
    {
       return Task::create($requestData);
    }
    
    public function find($id)
    {
       return Task::find($id);
    }
    
    
    public function listAllTasks()
    {
        return Task::all();
    }
    
    
    public function destroy($id)
    {
        $client = Task::findorFail($id);
        return $client->delete();
    }
    
    public function update($id, $requestData)
    {
       return Task::find($id)->update($requestData);
    }
}
