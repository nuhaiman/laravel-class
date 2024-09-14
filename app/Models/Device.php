<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    //yaha pr dclear krna hota
    protected $guarded=[]; 
    public $timestamps=false;

}