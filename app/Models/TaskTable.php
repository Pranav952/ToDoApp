<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskTable extends Model
{
    use HasFactory;
    use softdeletes;

    protected $table = "task_tables";
    protected $primaryKey = "id";
}
