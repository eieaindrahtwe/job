<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontendController@index')->name('homepage');


//backend

Route::get('dashboard', 'BackendController@dashboard')->name('dashboardpage');

Route::resource('jobcategory', 'JobCategoryController');

Route::resource('jobsubcategory', 'JobsubcategoryController');

Route::resource('jobpost', 'JobpostController');

Route::resource('company', 'CompanyController');

