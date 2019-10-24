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

Route::get('/', 'Controller@main')->name('main');
Route::get('main', 'Controller@main')->name('main');
Route::get('about', 'Controller@about')->name('about');
Route::get('menu', 'Controller@menu')->name('menu');
Route::get('menuCreate', 'Controller@menuCreate')->name('menuCreate');
Route::post('menuStore', 'Controller@menuStore')->name('menuStore');
Route::get('menuEdit/{id}', 'Controller@menuEdit')->name('menuEdit');
Route::patch('menuUpdate/{id}', 'Controller@menuUpdate')->name('menuUpdate');
Route::delete('menuDestroy/{id}', 'Controller@menuDestroy')->name('menuDestroy');

Route::get('view/{id}', 'Controller@menuShow')->name('menuShow');

Route::get('menuBurger', 'Controller@menuBurger')->name('menuBurger');
Route::get('menuChicken', 'Controller@menuChicken')->name('menuChicken');
Route::get('menuView', 'Controller@menuView')->name('menuView');

Route::resource('menus', 'MenusController');
