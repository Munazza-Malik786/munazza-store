<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

//Route::get('/user',[UserController::class,'loginpage'])->name('login.page');
Route::get('/login', [UserController::class, 'loginpage'])->name('user.login.page');
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/register', [UserController::class, 'registerpage'])->name('register.page');
//Route::get('/register', [UserController::class, 'register']);
Route::get('/reset', [UserController::class, 'reset']);


Auth::routes();
//Route::get('/login', [UserController::class, 'login']);
//Route::get('/register', [UserController::class, 'register']);
//Route::get('/reset', [UserController::class, 'reset']);




?>
