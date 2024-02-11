<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeBills extends Model
{
    use HasFactory;
    use softdeletes;

    protected $table = "home_bills";
    protected $primaryKey = "id";

    public function setMonthAttribute($value)
    {
        $this->attributes['Month'] = ucwords($value);
    }
    // public function getMonthAttribute($data)
    // {
    //     $data = "pranav";
    //     return $data;
    // }

}
