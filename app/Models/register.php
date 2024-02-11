<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class register extends Model
{
    use HasFactory;
    protected $table = 'registers';
    protected $primaryKey = 'Id';
}
