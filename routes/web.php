<?php  

use Illuminate\Support\Facades\Route;



Route::view('/','login');
Route::view('/welcome','welcome');
Route::view('/persona','persona');
Route::view('/departamento','departamento');
Route::view('/cargo','cargo');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
?>



