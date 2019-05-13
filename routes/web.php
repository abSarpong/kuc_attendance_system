<?php

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



Route::get('/', 'gatewayController@network');
Route::post('/auth', 'LoginController@show')->name('login');
Route::get('/settings', 'SettingsController@show')->name('settings');
Route::get('/page_not_found', 'PageNotFoundController@show')->name('page_not_found');

/**
 * All routes related to the administrator go here
 */

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController\BaseController@show_dashboard')->name('dashboard');
    Route::get('create', function () {
        return view('admin.create');
    })->name('create');
    Route::get('search', function () {
        return view('admin.search');
    })->name('search');
    Route::get('/report', 'AdminController\BaseController@show_report')->name('report');
    
});

/**
 * All routes related to the lecturer go here
 */

Route::prefix('lecturer')->group(function () {
    Route::get('users', function () {
        // Matches The "/lecturer/users" URL
    });
});

/**
 * All routes related to the student go here
 */

Route::prefix('student')->group(function () {
    Route::get('users', function () {
        // Matches The "/student/users" URL
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
