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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/karyawan', 'KaryawanController@index');

// Employees
// Route::get('/employees', 'EmployeesController@index');
// Route::get('/employees/create', 'EmployeesController@create');
// Route::get('/employees/{employee}', 'EmployeesController@show');
// Route::post('/employees', 'EmployeesController@store');
// Route::delete('/employees/{employee}', 'EmployeesController@destroy');
// Route::get('/employees/{employee}/edit', 'EmployeesController@edit');
// Route::patch('/employees/{employee}', 'EmployeesController@update');
Route::resource('employees', 'EmployeesController');