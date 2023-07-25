<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


 Route::get("form", [IndexController::class, "form"]);//chat
 Route::get("/", [IndexController::class, "index"]);//index

 Route::get("chat", [IndexController::class, "chat"]);//chat
 Route::get("log_out", [IndexController::class, "log_out"]);//log_out
 Route::get("login", [IndexController::class, "login"]);//Login
 Route::get("create_recipe_edit/{id}", [IndexController::class, "create_recipe_edit"]);//create_recipe_edit
 Route::get("create_week_recipe/{chat_content_id}", [IndexController::class, "create_week_recipe"]);//create_week_recipe
 Route::get("weekly_recipe/{chat_content_id}", [IndexController::class, "weekly_recipe"]);//Weekly Recipe
 Route::post("create_recipe_edit_processing/{id}", [IndexController::class, "create_recipe_edit_processing"]);//create_recipe_edit_processing
 Route::post("dologin", [IndexController::class, "dologin"]);//dologin
 Route::post("form_post", [IndexController::class, "form_post"]);//create_recipe
 Route::get("create_recipe", [IndexController::class, "create_recipe"]);//create_recipe
 Route::get("create_recipe_info/{id}", [IndexController::class, "create_recipe_info"]);//create_recipe_info
 Route::get("create_recipe_del/{id}", [IndexController::class, "create_recipe_del"]);//create_recipe_del
 Route::get("create_recipe_list", [IndexController::class, "create_recipe_list"]);//create_recipe_list

Route::get("register", [IndexController::class, "register"]);//register
Route::post("register_store", [IndexController::class, "register_store"]);//register_store
