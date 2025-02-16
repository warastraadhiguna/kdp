<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/', [HomeController::class,'index']);

route::get('/about', [HomeController::class,'about']);

route::get('/gallery', [HomeController::class,'gallery']);

route::get('/contact', [HomeController::class,'contact']);
route::post('/contact', [HomeController::class,'message'])->name('contact.store');
