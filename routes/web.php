<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;

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

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});

// Route::get('/welcome', function () {
//     return ('Selamat Datang');
// });

Route::get('/welcome', [PageController::class,'welcome']);

// Route::get('/about', function () {
//     return 'Nama: Fahmi Mardiansyah | NIM: 2241760064';
// });

Route::get('/about', [PageController::class,'about']);

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

// Route::get('/article/{id}', function ($id) {
//     return "Halaman Artikel dengan Id: " . $id;
// });

Route::get('/articles', [PageController::class,'articles']);

Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

// ROUTE NAME
// Route::get('/user/profile', function () {
//     //
// })->name('profile');
// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');
// // Generating URLs...
// $url = route('profile');
// // Generating Redirects...
// return redirect()->route('profile');

//ROUTE GROUP
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//     // Uses first & second middleware...
//     });
//    Route::get('/user/profile', function () {
//     // Uses first & second middleware...
//     });
//    });
//    Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//     //
//     });
//    });
//    Route::middleware('auth')->group(function () {
//    Route::get('/user', [UserController::class, 'index']);
//    Route::get('/post', [PostController::class, 'index']);
//    Route::get('/event', [EventController::class, 'index']);
//    });

// ROUTE PREFIXES
// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
//     });
    
// REDIRECT ROUTES
// Route::redirect('/here', '/there');
   
// VIEW ROUTES
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/welcome', [HomeController::class,'welcome']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);

// Route::get('/greeting', function () {
// return view('hello', ['name' => 'Fahmi Mardiansyah']);
// });

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Fahmi Mardiansyah']);
//     });

Route::get('/greeting', [WelcomeController::class, 'greeting']);

    
