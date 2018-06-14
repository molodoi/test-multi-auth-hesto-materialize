<?php


// Pour structurer et déplacer l'auth de base dans un répertoire Http/Controllers/Frontend/..
// Routes de base = Auth::routes(); ci-dessous de l'aute /vendor/laravel/framework/src/Illuminate/Routing/Router.php
// Authentication Routes...

Route::get(LaravelLocalization::transRoute('routes.login'), 'Frontend\Auth\LoginController@showLoginForm')->name('frontend.login.get');
Route::post(LaravelLocalization::transRoute('routes.login'), 'Frontend\Auth\LoginController@login')->name('frontend.login.post');
Route::post(LaravelLocalization::transRoute('routes.logout'), 'Frontend\Auth\LoginController@logout')->name('frontend.logout.post');

// Registration Routes...
Route::get(LaravelLocalization::transRoute('routes.register'), 'Frontend\Auth\RegisterController@showRegistrationForm')->name('frontend.register.get');
Route::post(LaravelLocalization::transRoute('routes.register'), 'Frontend\Auth\RegisterController@register')->name('frontend.register.post');

// Password Reset Routes...
Route::get(LaravelLocalization::transRoute('routes.password.request'), 'Frontend\Auth\ForgotPasswordController@showLinkRequestForm')->name('frontend.password.request');
Route::post(LaravelLocalization::transRoute('routes.password.email'), 'Frontend\Auth\ForgotPasswordController@sendResetLinkEmail')->name('frontend.password.email');
Route::get(LaravelLocalization::transRoute('routes.password.reset.token'), 'Frontend\Auth\ResetPasswordController@showResetForm')->name('frontend.password.reset.token');
// ici
Route::post(LaravelLocalization::transRoute('routes.password.reset'), 'Frontend\Auth\ResetPasswordController@reset')->name('frontend.password.reset');
