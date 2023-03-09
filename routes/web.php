<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('index', [
//         "title" => "Beranda"
//     ]);
// });

Route::get('/gallery', function () {
    return view('gallery', [
        'title' => 'Gallery'
    ]);
});

// // Route::get('/contacts', function () {
//     return view('contacts', [
//         'title' => 'Contacts'
//     ]);
// // });

//Route::resource('/contacts', ContactController::class);

// Route::get('/contacts/create', [BookController::class, 'create'])->name('contacts.create');
// Route::post('/contacts/store', [BookController::class, 'store'])->name('contacts.store');

Auth::routes();
Route::get('/', [BookController::class, 'indexPublic'])->name('buku.public.index');
Route::get('/books/{id}', [BookController::class, 'showPublic'])->name('buku.public.show');


Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/books/index', [BookController::class, 'index'])->name('contacts.index');
    Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('contacts.edit');
    Route::post('/book/{id}/update', [BookController::class, 'update'])->name('contacts.update');
    Route::get('/book/{id}/destroy', [BookController::class, 'destroy'])->name('contacts.destroy');  
    Route::get('/book/create', [BookController::class, 'create'])->name('contacts.create');
    Route::post('/book/store', [BookController::class, 'store'])->name('contacts.store');
    Route::resource('buku', BookController::class);

});
