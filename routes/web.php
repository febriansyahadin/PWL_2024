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

    Route::get('/hello', function () { 
        return 'Hello World'; 
        }); 

    Route::get('/world', function () { 
        return 'World'; 
        });

    Route::get('/selamat', function () { 
        return 'Selamat Datang'; 
        });
    
    Route::get('/about', function () { 
        return '2341720023 Febriansyah Adi N'; 
        });
    
    Route::get('/user/{Febriansyah}', function ($Febriansyah) { 
        return 'Nama saya '.$Febriansyah; 
        }); 

    Route::get('/posts/{post}/comments/{comment}', function 
        ($postId, $commentId) { 
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
        }); 
    
    Route::get('/articles/{id}', function ($id) { 
        return 'Halaman Dengan Artikel ID '.$id; 
        }); 

        Route::get('/user/{name?}', function ($name='John') { 
        return 'Nama saya '.$name; 
        }); 

        Route::get('/user/profile', function() { 
            //
            })->name('profile'); 

        Route::get('/hello', [WelcomeController::class,'hello']); 

        Route::get('/index', [PageController::class,'index']); 
        Route::get('/about', [PageController::class,'about']); 
        Route::get('/articles/{id}', [PageController::class,'articles']);
        
        Route::get('/index', [HomeController::class,'index']);
        Route::get('/about', [AboutController::class,'about']); 
        Route::get('/articles/{id}', [ArticleController::class,'articles']);

        Route::resource('photos', PhotoController::class); 

        Route::get('/greeting', function () { 
            return view('hello', ['name' => 'febriansyah']); 
            }); 

            Route::get('/greeting', [WelcomeController::class, 
            'greeting']); 