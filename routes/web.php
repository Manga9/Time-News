<?php

// user
Route::get('/', 'user\HomeController@index')->name('home');
Route::get('/post/{id}', 'user\HomeController@post')->name('user.post.show');
Route::get('/category/{id}', 'user\HomeController@category')->name('user.category.show');

//admin
Route::get('/admin/dashboard', 'admin\DashboardController@index')->name('dashboard.index');
Route::resource('/admin/dashboard/categories', 'admin\CategoryController');
Route::resource('/admin/dashboard/admins', 'admin\AdminController');
Route::resource('/admin/dashboard/posts', 'admin\PostController');


