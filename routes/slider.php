<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

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
Route::post('/add_slider',[SliderController::class,'add'])->name('slider.add');
Route::get('/slider',[SliderController::class,'slider'])->name('slider.index');
Route::get('/slid_delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
Route::get('/slid_edit/{id}',[SliderController::class,'edit'])->name('edit');
Route::post('/update_slider',[SliderController::class,'slid_update'])->name('slider.update');
Route::get('/slider_create',[SliderController::class,'create'])->name('create.slider');







?>
