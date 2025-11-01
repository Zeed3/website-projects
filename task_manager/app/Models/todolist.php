<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'todolist';
    protected $fillable = ['id', 'taskDescription', 'taskTitle', 'taskStatus'];
    use HasFactory;
}
