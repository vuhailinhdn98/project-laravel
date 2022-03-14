<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\feedbacksController;
use App\Http\Controllers\suppliersController;
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
Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/admin', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('site.home');
})->name('home');

Route::get('/about', function () {
    return view('site.about');
})->name('about');

Route::get('/contact', function () {
    return view('site.contact');
})->name('contact');

Route::get('/products', function () {
    return view('site.products.products');
})->name('products');

Route::prefix('products')->group(function () {
    Route::get('/product_1', function () {
        return view('site.products.product_1');
    });



});

Route::get('/cart', function () {
    return view('site.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('site.checkout');
})->name('checkout');

Route::get('/blogs', function () {
    return view('site.blogs.blogs');
})->name('blogs');

Route::prefix('blogs')->group(function () {
    Route::get('/blog_1', function () {
        return view('site.blogs.blog_1');
    });


    
});

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// Route::get('/verify', function () {
//     return view('auth.verify');
// })->name('verify');

// Route::prefix('password')->group(function () {
//     Route::get('/confirm', function () {
//         return view('auth.password.confirm');
//     })->name('confirm');
//     Route::get('/email', function () {
//         return view('auth.password.email');
//     })->name('email');
//     Route::get('/reset', function () {
//         return view('auth.password.reset');
//     })->name('reset');
    
// });

route::prefix('admin')->group(function () {
    //categories
    route::get('categories', [categoriesController::class, 'index'])->name('indexcate');
    route::get('categories/create', [categoriesController::class, 'create']);
    route::post('categories/create', [categoriesController::class, 'store']);
    route::get('categories/delete/{id}', [categoriesController::class, 'destroy']);
    route::get('categories/update/{id}', [categoriesController::class, 'edit']);
    route::post('categories/update/{id}', [categoriesController::class, 'update']);
    //feedbacks
    route::get('feedbacks', [feedbacksController::class, 'index'])->name('indexfeed');
    route::get('feedbacks/delete/{id}', [feedbacksController::class, 'destroy']);
    route::get('feedbacks/update/{id}', [feedbacksController::class, 'edit']);
    route::post('feedbacks/update/{id}', [feedbacksController::class, 'update']);
    //suppilers
    route::get('suppliers', [suppliersController::class, 'index'])->name('indexsupp');
    route::get('suppliers/create', [suppliersController::class, 'create']);
    route::post('suppliers/create', [suppliersController::class, 'store']);
    route::get('suppliers/update/{id}', [suppliersController::class, 'edit']);
    route::post('suppliers/update/{id}', [suppliersController::class, 'update']);
    route::get('suppliers/delete/{id}', [suppliersController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
