<?php

// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('school')->user();

//     //dd($users);

//     return view('school.home');
// })->name('home');

Route::group(['prefix' => 'school'], function () {
    Route::get('/', 'School\HomeController@index')->name('school.home');
    Route::get('/dashboard', 'School\DashboardController@index')->name('school.dashboard');
    Route::get('/login', 'School\Auth\LoginController@showLoginForm')->name('school.login.get');
    Route::post('/login', 'School\Auth\LoginController@login')->name('school.login.post');
    Route::post('/logout', 'School\Auth\LoginController@logout')->name('school.logout.post');

    Route::get('/register', 'School\Auth\RegisterController@showRegistrationForm')->name('school.register.get');
    Route::post('/register', 'School\Auth\RegisterController@register')->name('school.register.post');

    Route::post('/password/email', 'School\Auth\ForgotPasswordController@sendResetLinkEmail')->name('school.password.request');
    Route::post('/password/reset', 'School\Auth\ResetPasswordController@reset')->name('school.password.email');    
    Route::get('/password/reset/{token}', 'School\Auth\ResetPasswordController@showResetForm')->name('school.password.reset.token');
    Route::get('/password/reset', 'School\Auth\ForgotPasswordController@showLinkRequestForm')->name('school.password.reset');
});
