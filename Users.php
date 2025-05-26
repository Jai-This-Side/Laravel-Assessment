<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
            protected $entries = ['name', 'email', 'department_id'];

            public function departments(){
                return $this->belongsTo((Departments::class));
            }
    }

