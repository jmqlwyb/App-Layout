<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'MainLayout']);

// Route::get('/products', ['MainLayout']);


Route::get('/', function () {
    return inertia('MainLayout');
});

Route::get('/about', function () {
    return inertia('About');
});

Route::get('/', function() {
    return inertia('Welcome');
});
Route::get('/profile', function() {
    return inertia('Profile');

});
Route::get('/products', function() {
    return inertia('Products');

});

Route::get('/faq', function() {
    return inertia('Faq');
});


