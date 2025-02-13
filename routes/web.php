<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/faq', function() {
    return inertia('Faq');

});
Route::get('/status', function() {
    return inertia('Status');

});
