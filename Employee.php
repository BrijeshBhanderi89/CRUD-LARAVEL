<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = "employee";
    
    public $fillable = ['name', 'email', 'gender', 'phone', 'salary','department', 'message','image'];

    public $timestamps = false;
}
