<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpage;
Route::get('/dina', function () {
    return view('test');
});
Route::get('/',[Frontpage::class,'home'])->name('home');
Route::get('/Abouts',[Frontpage::class,'Abouts'])->name('about');

// Route::get('/user/{id}', function ($id) {
//     return view('user', ['id' => $id]);
// })->name('user.show');