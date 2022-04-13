<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\RatesController;
use App\Models\User;



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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
}); //->middleware('age');

Route::get('/contact', [ContactController::class, 'index'])->name('con');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   
    $users = User::all();
    return view('dashboard', compact('users'));
})->name('dashboard');


//Category controller
// Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');

// Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');

// Route::get('/category/edit/{id}', [CategoryController::class, 'Edit']);
// Route::post('/category/update/{id}', [CategoryController::class, 'Update']);
// Route::get('/softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);
// Route::get('/category/restore/{id}', [CategoryController::class, 'Restore']);
// Route::get('category/pdelete/{id}', [CategoryController::class, 'Pdelete']);


//Brand route

Route::get('/brand/all', [BrandController::class, 'AllBrand'])->name('all.brand');
Route::get('/brand/userbrands', [BrandController::class, 'UserBrand'])->name('userbrand.brand');
Route::get('/brand/addb', [BrandController::class, 'Addb'])->name('addb.brand');
Route::post('/brand/add', [BrandController::class, 'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'Edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'Update']);
Route::get('/brand/delete/{id}', [BrandController::class, 'Delete']);
Route::get('/brand/check/{id}', [BrandController::class, 'Check']);
Route::get('/brand/won', [BrandController::class, 'Won'])->name('won.brand');
Route::get('/brand/getinfo/{id}', [BrandController::class, 'GetInfo']);
Route::get('/brand/sort/{sort}', [BrandController::class, 'Sort'])->name('sort.brand');
Route::post('/brand/filter/{brands}', [BrandController::class, 'Filter'])->name('filter.brand');

//Multi image rout
Route::get('/multi/image/{brands}', [BrandController::class, 'Multipic'])->name('multi.image');
Route::post('/multi/add/{brands}', [BrandController::class, 'StoreImg'])->name('store.image');

//Multi phozos rout
//Route::get('/photos/image', [BrandController::class, 'Photos'])->name('photos.image');
//Route::post('/photos/add', [BrandController::class, 'StoreImg'])->name('store.image');

//Bid update
Route::post('/brand/bidupdate/{id}', [BrandController::class, 'BidUpdate']);


//Add pic
//Route::get('/brand/addpic/{id}', [BrandController::class, 'Addpic']);
//Route::post('/brand/add/{id}', [BrandController::class, 'Savepic'])->name('storePic');

//User Rates
Route::get('/ratinguser/rates/{user}', [RatesController::class, 'ViewRates'])->name('user.profile');
Route::post('/ratinguser/store/{user}', [RatesController::class, 'StoreRate'])->name('store.rate');
