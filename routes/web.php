<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AddBookController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActionBookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\BorrowListController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\BuyListController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ClientBooksController;
use Illuminate\Http\Request;
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
Route::get('/',function(){
    return view('About');
});
Route::resource('/sign-up', 'App\Http\Controllers\RegisterController');
Route::resource('/login', 'App\Http\Controllers\LoginController');
Route::resource('/home', 'App\Http\Controllers\HomeController');
Route::group(['middleware' => 'login'], function()
{
    Route::resource('/contact', 'App\Http\Controllers\ContactController')->middleware('client');
    Route::resource('/admin-home', 'App\Http\Controllers\AdminHomeController')->middleware('admin');
    Route::resource('/add-book', 'App\Http\Controllers\AddBookController')->middleware('admin');
    Route::resource('/books', 'App\Http\Controllers\BooksController');
    Route::resource('/users', 'App\Http\Controllers\UserController')->middleware('admin');
    Route::resource('/book-action', 'App\Http\Controllers\ActionBookController')->middleware('admin');
    Route::resource('/borrow', 'App\Http\Controllers\BorrowController')->middleware('client');
    Route::resource('/borrowed-books', 'App\Http\Controllers\BorrowListController')->middleware('admin');
    Route::resource('/buy', 'App\Http\Controllers\BuyController')->middleware('client'); 
    Route::resource('/bought-books', 'App\Http\Controllers\BuyListController')->middleware('admin');
    Route::resource('/contact-messages', 'App\Http\Controllers\MessagesController')->middleware('admin');
    Route::resource('/your-books', 'App\Http\Controllers\ClientBooksController')->middleware('client');
});
    
