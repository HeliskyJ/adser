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

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customer', 'CustomerController@create')->name('customer.create');
Route::post('/customer', 'CustomerController@store')->name('customer.store');
Route::get('/customers', 'CustomerController@index')->name('customer.index');
Route::get('/customer/{cust}', 'CustomerController@show')->name('customer.show');
Route::get('/customer/{cut}/edit', 'CustomerController@edit')->name('customer.edit');
Route::patch('/customers/{cust}', 'CustomerController@update')->name('customer.update');
Route::patch('/customer/delete/{cust}', 'CustomerController@destroy')->name('customer.delete');

Route::get('/employees', 'EmployeeController@index')->name('employee.index');
Route::get('/employee', 'EmployeeController@create')->name('employee.create');
Route::post('/employee', 'EmployeeController@store')->name('employee.store');
Route::get('/employee/{emp}', 'EmployeeController@show')->name('employee.show');
Route::get('/employee/{emp}/edit', 'EmployeeController@edit')->name('employee.edit');
Route::patch('/employees/{emp}', 'EmployeeController@update')->name('employee.update');
Route::patch('employee/delete/{emp}', 'EmployeeController@destroy')->name('employee.delete');

Route::get('/services', 'ServiceController@index')->name('service.index');
Route::get('/service', 'ServiceController@create')->name('service.create');
Route::post('/service', 'ServiceController@store')->name('service.store');
Route::get('/service/{serv}', 'ServiceController@show')->name('service.show');
Route::get('/service/{serv}/edit', 'ServiceController@edit')->name('service.edit');
Route::patch('/service/{serv}', 'ServiceController@update')->name('service.update');
Route::patch('/service/delete/{serv}', 'ServiceController@destroy')->name('service.delete');

Route::get('/receipt', 'ReceiptController@create')->name('receipt.create');
Route::get('/receipt/findCustomer', 'ReceiptController@findCustomer');