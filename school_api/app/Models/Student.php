<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $table = "studentdb";
    protected $guarded = ["id"];    //guarded handle err 
    // protected $primaryKey = ["id"];
    
}
