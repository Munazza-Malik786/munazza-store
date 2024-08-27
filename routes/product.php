<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
<?php

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

Auth::routes();
Route::post('/add_product',[ProductController::class,'add'])->name('product.add');
Route::get('/products',[ProductController::class,'product'])->name('product.index');
Route::get('/pro_delete/{id}',[ProductController::class,'delete'])->name('delete');
Route::get('/pro_edit/{id}',[ProductController::class,'edit'])->name('edit');
Route::post('/update_product',[ProductController::class,'pro_update'])->name('product.update');
Route::get('/product_create',[ProductController::class,'create'])->name('create.product');







?>
