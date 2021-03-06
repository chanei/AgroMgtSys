<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('reportproducts', 'ReportProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('suppliers', 'SupplierController');

Route::resource('productcategories', 'ProductCategoriesController');

Route::resource('products', 'ProductsController');

Route::resource('productreviews', 'ProductReviewsController');

Route::get('supports/resolve/{id}', 'SupportController@updateStatus');
Route::resource('supports', 'SupportController');

Route::resource('supportreplies', 'SupportReplyController');

Route::resource('users', 'UsersController');

Route::resource('checkproduct', 'CheckProductController');
