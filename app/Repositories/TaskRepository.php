<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use App\Models\TaskTable;

class TaskRepository implements RepositoryInterface
{
    public function all()
    {
        return TaskTable::all();
    }
    public function getData($data)
    {
        return TaskTable::where('Task', 'LIKE', "%$data%")->get();
    }
}
