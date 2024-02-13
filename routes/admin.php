<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::resource('home', HomeController::class)->only(['index', 'edit', 'update'])->names('admin.home');
