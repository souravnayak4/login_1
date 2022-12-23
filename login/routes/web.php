<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

use App\Http\Controllers\BlogController;
 
//Route::get('/', function () {
//    return view('welcome');
//});
 
Route::group(['middleware'=>['auth']],function(){
    Route::get('/home', [CustomAuthController::class, 'home']);
    Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
    Route::get('/blog', [BlogController::class, 'myblog']);
    Route::post('/blog', [BlogController::class, 'store'])->name('addimage');
    
    Route::get('/blogdashboard', [BlogController::class, 'blogdashboard']);

});
 
 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('/edit/{id}', [BlogController::class, 'edit']);





Route::get('/', [BlogController::class, 'display']);   
Route::get('/details/{id}', [BlogController::class, 'blogdetails']);  
Route::get('/userblogs', [BlogController::class, 'userblog']);
Route::post('/userblogs', [BlogController::class, 'userblogs'])->name('addimage');

Route::get('/registration', [CustomAuthController::class, 'signup']);
 