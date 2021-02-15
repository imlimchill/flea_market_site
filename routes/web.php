<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerRegistrationController;
use App\Http\Controllers\QnaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProductCartController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\MypageController;
use App\Http\Controllers\OrderController;

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

// TODO i use 'home.blade.php'. but, I want use 'index.blade.php'
// TODO so i must be understand laraval's structre!!
Route::view('/', 'home');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('show', 'show');
Route::view('agree', 'agree');
Route::view('basket', 'basket');
// old version code
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', 'ListController@show');

// i can't this > (commed : php artisan make:auth)
// so i did new one 
// : composer require laravel/ui (> this is download package for auth maybe..)
// : php artisan ui vue --auth

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('qna', QnaController::class)->middleware('auth');

Route::resource('comment', CommentController::class)->middleware('auth');

Route::resource('products', ProductController::class)->middleware('auth');

Route::get('/products/category/{category}', [ProductController::class, 'filter']);

Route::POST('/products/search', [ProductController::class, 'search']);

Route::post('/upload', [UploadFileController::class, 'store']);

Route::POST('/chats', [ChatController::class, 'send']);

Route::POST('/chats', [ChatController::class, 'send']);

Route::get('/basket', [ProductCartController::class, 'index']);

Route::POST('/basket', [ProductCartController::class, 'store']);

Route::DELETE('/basket/{basket}', [ProductCartController::class, 'destroy']);

Route::get('/sellerRg', [SellerRegistrationController::class, 'index']);

Route::post('/sellerRg/update', [SellerRegistrationController::class, 'update']);

// for mail
Route::get('/mail', 'App\Http\Controllers\MailController@send');

Route::resource('member', UserController::class);


//mypage
Route::resource('mypage', MypageController::class)->middleware('auth');

<<<<<<< HEAD

//review
Route::resource('review', ReviewController::class)->middleware('auth');
// Route::get('/review', function () {
//     return view('review.index');
// });

// Route::get('/review', 'ReviewController@index');
// Route::post('/review/create', [ReviewController::class, 'create']);
// Route::post('/review',[ReviewController::class, 'store']);
// Route::get('/review/{review}', 'ReviewController@show');
// Route::get('/review/{review}/edit', 'ReviewController@edit');
// Route::put('/review/{review}', 'ReviewController@update');
// Route::delete('/review/{review}', 'ReviewController@destroy');
=======
Route::post('/order', [OrderController::class, 'store'])->middleware('auth');
>>>>>>> 83f6e40a6268c4ca983502a4350067dc03e75d02
