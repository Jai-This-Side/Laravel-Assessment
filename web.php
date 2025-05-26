<?php

use App\Http\Controllers\ControllerUser;
use Illuminate\Support\Facades\Route;

Route::get('/Users',[ControllerUser::class,'index']) -> name('users.index');
Route::delete('/Users/{id}',[ControllerUser::class,'destroy']) -> name('Users.destroy');