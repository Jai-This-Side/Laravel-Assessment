<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function index(){
       // $users = Users::with('departments')->get();
        $users = DB::table("users")->join('departmnts', 'users.department_id', '=', 'departments.id') -> select('users.id', 'users.name','users.email','departments.name as department_name', 'department.id as departments_id') -> get();
        return view('index', compact('users'));
    }

    public function destroy($id){
        Users::destroy($id);
        $users = Users::with('departments')->get();
        return view('index', compact('users'));
    }
}
