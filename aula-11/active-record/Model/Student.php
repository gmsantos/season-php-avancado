<?php

namespace Season\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    
    public $timestamps = false;
    
    public $fillable = ['name', 'city'];
    
}