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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect'],
    ],
    function () {
        Route::get('/', 'Frontend\HomeController@index')->name('frontend.home');

        include 'frontend.php';
        include 'renter.php';
        include 'school.php';
        include 'admin.php';
    }
);
