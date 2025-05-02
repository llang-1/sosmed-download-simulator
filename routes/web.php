<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/api/users', function() {
    return response()->json([
        'status' => 'success',
        'message' => 'example api Json',
    ]);
});