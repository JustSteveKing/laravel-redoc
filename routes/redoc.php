<?php

use Illuminate\Support\Facades\Route;

Route::view(
    config('redoc.path.url'),
    'redoc::redoc',
)->name(
    config('redoc.path.name')
);
