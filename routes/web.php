<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/home', [HomeController::class,"index"])->name("home.index");
Route::post('/home/people', [HomeController::class,"store"])->name("home.store");
Route::get('users/{id}', [HomeController::class, "showUser"])->name("user.show");
Route::post('usersDelete/', [HomeController::class,'destroy'])->name('single.userDelete');
Route::post('userEdit/', [HomeController::class,'editUser'])->name('single.userEdit');

Route::get('/cars', [CarController::class, 'index'])->name('cars.index'); // List all cars
Route::post('/cars', [CarController::class, 'store'])->name('cars.store'); // Store a new car
Route::get('/singlecars/{carId}', [CarController::class, 'show'])->name('cars.show'); 
// Show details of a specific car
Route::post('carEdit/', [CarController::class,'editCar'])->name('single.carEdit');
Route::post('carDelete/', [CarController::class,'destroy'])->name('single.carDelete');

Route::get('/post', [PostController::class,'index'])->name('post.index');
Route::post('/post', [PostController::class, 'store'])->name('posts.store');
Route::get('/post/{postId}' , [PostController::class,'show'])->name('post.show');

Route::get('/categories' , [CategoryController::class,'index'])->name('categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{categoriesId}' , [CategoryController::class,'show'])->name('categories.show');



Route::group(['middleware' => ['moderator']], function () {
    Route::get('users/{id}',  [HomeController::class, "showUser"])->name("user.show");
    Route::get('users/{id}',  [HomeController::class, "showUser"])->name("user.show");
});








Route::get('/profile', function () {
    
    // ...
})->middleware('auth');
