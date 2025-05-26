<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
            protected $entries = ['name', 'email', 'departments_id', 'departments_name'];

            public function departments(){
                return $this->belongsTo(Departments::class);
            }
    }
