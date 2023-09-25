<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdminController;


// ქვემოთ ჩამოთვლილ გვერდებს არ სჭირდებათ ავტორიზაცია


Route::get('/',[MainController::class, 'mainPage']);
Route::get('search',[MainController::class, 'search']);
Route::get('/books-library',[LibraryController::class, 'index']);
Route::get('search',[MainController::class, 'search']);
Route::get('user/{id}',[ProfileController::class, 'usersPage']);
Route::post('contact',[MainController::class, 'subscribe']);
Route::get('teacher_list',[MainController::class, 'teacherList']);
//ქვემოთ ჩამოთვლილი გვერდები არიან middleware-ის შიგნით ანუ ყველაზე გავრცელდება ავტორიზაციის ვალდებულება

Route::group(['middleware'=> ['auth:sanctum','verified']], function () { 
    Route::get('profile/main',[ProfileController::class, 'profileMain']);
    Route::get('profile/edit',[ProfileController::class, 'profileEdit']);
    Route::put('profile/edit_post/my_id/{id}',[ProfileController::class, 'profileEditPut']);
    Route::put('profile/edit_photo/my_id/{id}',[ProfileController::class, 'profileEditPhoto']);
});

Route::middleware(['isStudent'])->group(function(){
    Route::post('reservation/teacher_id/{id}',[ReservationController::class, 'store']);
});


Route::get('admin',[AdminController::class, 'index']);
Route::get('admin/create',[LibraryController::class, 'create']);
Route::get('admin/book-list',[LibraryController::class, 'books_list']);
Route::post('admin/add-book',[LibraryController::class, 'store']);
