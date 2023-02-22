<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absent extends Model
{
    protected $table = 'absents';
    protected $fillable = ['user_id','date','time_in','time_out','note'];
}
