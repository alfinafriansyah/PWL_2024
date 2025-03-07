<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

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

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
return 'World';
});

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return 'NIM: 2341760089 Nama: Alfin Afriansyah';
// });

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{id}', function
// ($articlesId) {
// return 'Halaman Artikel dengan ID '.$articlesId;
// });

// Praktikum 2 Langkah 6
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Praktikum 2 Langkah 7
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::resource('photos', PhotoController::class); 

// Route::get('/greeting', function () { 
//     return view('hello', ['name' => 'Alfin']); 
// });

// Modifikasi praktikum 3 langkah 6
// Route::get('/greeting', function () { 
//     return view('blog.hello', ['name' => 'Alfin']); 
// });

// Modifikasi praktikum 3 langkah 9
Route::get('/greeting', [WelcomeController::class, 'greeting']);