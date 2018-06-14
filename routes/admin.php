<?php
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\HomeController@index')->name('admin.home');
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

    Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login.get');
    Route::post('/login', 'Admin\Auth\LoginController@login')->name('admin.login.post');
    Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout.post');

    Route::get('/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('admin.register.get');
    Route::post('/register', 'Admin\Auth\RegisterController@register')->name('admin.register.post');

    Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.request');
    Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('admin.password.email');    
    Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset.token');
    Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.reset');
});

// Route::get('/', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('admin')->user();

//     //dd($users);

//     return view('backadmin.pages.home');
// })->name('admin.home');
