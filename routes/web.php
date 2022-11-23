<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\WriterController;
use App\Models\Writer;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WriterController::class, "index"])->name("allDataPage");

Route::get('/writer/{id}', [WriterController::class, "showWriterById"]);

Route::get('/addBook', function(){
    return view("createBook", ["title" => "Add Book", "writerData" => Writer::all()]);
})->name("toAddBookPage");

Route::post('/createBook', [BookController::class, "createBook"])->name("createBook");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/about", function(){
    return view("about");
})->name("about");

Route::get("/contact", function(){
    return view("contact");
})->name("contact");



require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

