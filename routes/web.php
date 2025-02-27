<?php

use Illuminate\Support\Facades\Route;

Route::get('{any}', function () {
    return view('app'); // Ensure app.blade.php exists in resources/views
})->where('any', '.*');

