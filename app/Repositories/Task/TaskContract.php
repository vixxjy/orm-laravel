<?php

namespace App\Repositories\Task;

interface TaskContract
{
	public function find($id);
    
    public function listAllTasks();
    
    public function create($requestData);
    
    public function update($id, $requestData);
    
    public function destroy($id);
}
