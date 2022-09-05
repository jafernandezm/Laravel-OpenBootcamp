<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\IntroducionController;
use App\Http\Controllers\WebsiteController;

use App\Http\Controllers\MySecondController;
use App\Http\Controllers\MyResourceController;
use Termwind\Components\Raw;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//CABECERA
//Route::post('/contacto_Put',[MyFirstController::class,'processConact']);
//Route::put('/contacto2',[MyFirstController::class,'processConactPut']);
//Route::view('/','home');


Route::get('/contacto',[MyFirstController::class,'conactPage'])->name('contact.form');
Route::middleware('validate')->post('/contacto',[MyFirstController::class,'processConact'])->name('process.contact');


//ejemplo
Route::get('/introduccion-a-blade',[IntroducionController::class,'index'])->name('introduccion');


//Route::get('/my-controller/{id?}',[MyFirstController::class,'myControllerFunction']);

//Ejemplo 2

Route::name('website.')->prefix('/website')->group(function(){
    //Mostar vistas
    Route::get('{section}',[WebsiteController::class,'section'])->name('section');

    Route::get('home',[WebsiteController::class,'home'])->name('home');
    Route::get('who-we-are',[WebsiteController::class,'who'])->name('who');
    Route::get('contacto',[WebsiteController::class,'contacto'])->name('contacto');


    Route::post('contacto',[WebsiteController::class,'sedcontacto'])->name('sed-contacto');
    Route::POST('personalize',[WebsiteController::class,'personalize'])->name('personalize');
});



//Clase 9 Controladores
Route::get('/home',[MySecondController::class,'index']);
Route::get('/home/{variable}',[MySecondController::class,'indexSecond']);



Route::resource('/resource',MyResourceController::class);
