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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/index','EmployeeController@index')->name('employee.index');
Route::get('/employee/add','EmployeeController@create')->name('employee.add');
Route::post('/employee/store','EmployeeController@store')->name('employee.store');
Route::get('/employee/edit/{id}','EmployeeController@edit')->name('employee.edit');
Route::put('/employee/update','EmployeeController@update')->name('employee.update');
Route::delete('/employee/delete/{id}','EmployeeController@destroy')->name('employee.delete');
