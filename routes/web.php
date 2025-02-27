<?php

use App\Core\FillObject;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, "filled"]);
Route::get('admin/categories',[CategorieController::class, 'fetchAll']);
Route::post('admin/categories',[CategorieController::class, 'create']);
Route::get('/admin/delete/{id}',[CategorieController::class, 'delete']);
Route::get('/products',[ProductController::class , 'fetchAll']);
Route::get('/product',[ProductController::class , 'fetchAll']);
Route::get('/product/create',function(){
    return view('forms.product');
});
Route::delete('/products/{id}',[ProductController::class, 'delete']);
Route::post('/product/create',[ProductController::class,'create']);
Route::get('/product/update/{id}',function(){
    return view('forms.product');
});
Route::put('/product/update/{id}',[ProductController::class,'upfdate']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

