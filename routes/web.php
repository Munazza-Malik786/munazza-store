<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\CatagoryController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\FrontendController;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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
//Route::get('/',function(){
//    return view('index');
//});
Route::get('/', [App\Http\Controllers\FrontendController::class,'home'])->name('home');
Route::get('/home', [App\Http\Controllers\FrontendController::class,'home'])->name('home');
Route::get('blog_detail',[App\Http\Controllers\FrontendController::class,'blog_detail']);
Route::get('blog',[App\Http\Controllers\FrontendController::class,'blog']);
Route::get('checkout',[App\Http\Controllers\FrontendController::class,'checkout']);
Route::get('shop_details',[App\Http\Controllers\FrontendController::class,'shop_detail']);
Route::get('contact',[App\Http\Controllers\FrontendController::class,'contact']);
Route::get('shoping',[App\Http\Controllers\FrontendController::class,'shoping']);
Route::get('shop_grid',[App\Http\Controllers\FrontendController::class,'shop_grid']);
// {{dashboard controllers}}
Auth::routes();
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
// {{catagory controllers}}
Auth::routes();
 Route::post('/add_catagory',[CatagoryController::class,'add_catagory'])->name('catagory.add');
// Route::get('/add_catagory',[App\Http\Controllers\CatagoryController::class,'store'])->name('catagory.store');
Route::get('/catagory',[CatagoryController::class,'catagory'])->name('catagory.index');
Route::get('/cat_delete/{id}',[CatagoryController::class,'delete'])->name('catdelete');
Route::get('/cat_edit/{id}',[CatagoryController::class,'edit'])->name('edit');
Route::post('/cat_update',[CatagoryController::class,'cat_update'])->name('catagory.update');
Route::get('/catagory_create',[CatagoryController::class,'create_catagory'])->name('create.catagory');
require __DIR__.'/admin.php';
require __DIR__.'/user.php';
require __DIR__.'/slider.php';
Auth::routes();
require __DIR__.'/product.php';






?>
