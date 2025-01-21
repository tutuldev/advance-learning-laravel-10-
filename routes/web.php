<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// simple route controller
// Route::get('/',[PageController::class,'showHome'])->name('home');
// Route::get('/user/{id}',[PageController::class,'showUser'])->name('user');
// Route::get('/blog',[PageController::class,'showBlog'])->name('blog');


// groupe route controller
// Route::controller(PageController::class)->group(function(){
//     Route::get('/','showHome')->name('home');
//     Route::get('/user/{id}','showUser')->name('user');
//     Route::get('/blog','showBlog')->name('blog');
// });

// Route::get('test',TestingController::class);

// all user
// Route::get('/',[UserController::class,'showUsers'])->name('home');

// // singel user
// Route::get('/user/{id}',[UserController::class,'singelUser'])->name('view.user');

// // update user
// Route::get('/update',[UserController::class,'updateUser']);
// Route::get('/updatepage/{id}',[UserController::class,'updatePage'])->name('update.page');

// // delete user
// Route::get('/update/{id}',[UserController::class,'deleteUser'])->name('delete.user');

// // add user
// Route::post('/add',[UserController::class,'addUser'])->name('addUser');



// user group route
Route::controller(UserController::class)->group(function(){
    Route::get('/','showUsers')->name('home');

    // singel user
    Route::get('/user/{id}','singelUser')->name('view.user');

    // update user
    Route::put('/update/{id}','updateUser')->name('update.user');
    Route::get('/updatepage/{id}','updatePage')->name('update.page');

    // delete user
    Route::get('/delete/{id}','deleteUser')->name('delete.user');

    // add user
    Route::post('/add','addUser')->name('addUser');
});

// add user by form
Route::view('newuser','/adduser');
