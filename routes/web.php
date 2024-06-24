<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpage;

Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
   

Route::get('/dina', function () {
    return view('test');
});
Route::get('/',[Frontpage::class,'home'])->name('home');
// Route::get('/home',[Frontpage::class,'home'])->name('home');
Route::get('/Abouts',[Frontpage::class,'Abouts'])->name('about');
Route::get('/home',[Frontpage::class,'home'])->name('homes');
Route::get('/shop',[Frontpage::class,'shop'])->name('shop');
Route::get('/shop',[Frontpage::class,'shop'])->name('shops');
Route::get('/blog',[Frontpage::class,'blog'])->name('blog');

// Route::get('/layouts.abouts',function(){
//     return view ('layout.abouts');
// });

// Route::get('/user/{id}', function ($id) {
//     return view('user', ['id' => $id]);
// })->name('user.show');
});