<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function index(){
        $users = Users::with('Departments')->get();
        return view('Users.index', compact('Users'));
    }

    public function destroy($id){
        Users::destroy($id);
        return redirect()->route('Users.index')->with('success', 'user deleted!');
    }

}
