<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('articles');
});


// // route pour la liste des articles
// Route::get("/articles", [ArticleController::class, "index"]);