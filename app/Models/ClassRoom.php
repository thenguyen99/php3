<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ClassRoom;


class ClassRoom extends Model
{
    protected $table = 'classes';

    protected $fillable = [
    	'name',
        'teacher_name',
        'major',
        'max_student',
     ];
}
