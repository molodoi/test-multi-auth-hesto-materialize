<?php
Route::group(['prefix' => 'renter'], function () {
    Route::get('/', 'Renter\HomeController@index')->name('renter.home');
    Route::get('/dashboard', 'Renter\DashboardController@index')->name('renter.dashboard');
    Route::get('/login', 'Renter\Auth\LoginController@showLoginForm')->name('renter.login.get');
    Route::post('/login', 'Renter\Auth\LoginController@login')->name('renter.login.post');
    Route::post('/logout', 'Renter\Auth\LoginController@logout')->name('renter.logout.post');

    Route::get('/register', 'Renter\Auth\RegisterController@showRegistrationForm')->name('renter.register.get');
    Route::post('/register', 'Renter\Auth\RegisterController@register')->name('renter.register.post');

    Route::post('/password/email', 'Renter\Auth\ForgotPasswordController@sendResetLinkEmail')->name('renter.password.request');
    Route::post('/password/reset', 'Renter\Auth\ResetPasswordController@reset')->name('renter.password.email');
    Route::get('/password/reset/{token}', 'Renter\Auth\ResetPasswordController@showResetForm')->name('renter.password.reset.token');    
    Route::get('/password/reset', 'Renter\Auth\ForgotPasswordController@showLinkRequestForm')->name('renter.password.reset');
});

// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('renter')->user();

//     //dd($users);

//     return view('renter.home');
// })->name('home');
