<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'task',
        'time_duration',
        'is_done',
        'time_done',
    ];

    protected $hidden = [
        'user_id',
        'created_at',
        'updated_at',
    ];
}
