<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});
Route::get("/Produits",[App\Http\Controllers\Produits\ProduitsController::class,'index'])->name("ProduitsIndex")->middleware('token203');
Route::get("/HomePage",[App\Http\Controllers\HomeController::class,'HomePage'])->name("HomePage");




Auth::routes(["register"=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
Route::controller(\App\Http\Controllers\PersonnageController::class)->group(
    function ()
    {
        Route::get("/",'index');
        Route::get("/personnage/create","create");
        Route::get("/personnage/{id}","show");
        Route::get("/personnage/{id}/edit","edit");

        Route::post("/personnage",'store');
        Route::patch("/personnage/{id}","update");
        Route::delete("/personnage/{id}","destroy");
    }
);
Route::get("/",[\App\Http\Controllers\PersonnageController::class , "home"])->name("home");
