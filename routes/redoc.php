<?php

use Illuminate\Support\Facades\Route;

Route::view(
    config('redoc.path.url'),
    'redoc::docs',
)->name(
    config('redoc.path.name')
);
