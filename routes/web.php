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
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\ServiceController;
use App\Receipt;
/**
 * @description Show the welcome page of the site
 */
Route::get('/', function () {
    return view('welcome');
});
/**
 * @description Show the view auth of the site
 */
Auth::routes();
/**
 * @description Show the home page of the site
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 * @description customer of the site
 */
Route::get('/customer', 'CustomerController@create')->name('customer.create');
Route::post('/customer', 'CustomerController@store')->name('customer.store');
Route::get('/customers', 'CustomerController@index')->name('customer.index');
Route::get('/customer/{cust}', 'CustomerController@show')->name('customer.show');
Route::get('/customer/{cut}/edit', 'CustomerController@edit')->name('customer.edit');
Route::patch('/customers/{cust}', 'CustomerController@update')->name('customer.update')->middleware('password.confirm');
Route::patch('/customer/delete/{cust}', 'CustomerController@destroy')->name('customer.delete')->middleware('password.confirm');

/**
 * @description employee of the site
 */
Route::get('/employees', 'EmployeeController@index')->name('employee.index');
Route::get('/employee', 'EmployeeController@create')->name('employee.create');
Route::post('/employee', 'EmployeeController@store')->name('employee.store');
Route::get('/employee/{emp}', 'EmployeeController@show')->name('employee.show');
Route::get('/employee/{emp}/edit', 'EmployeeController@edit')->name('employee.edit');
Route::patch('/employees/{emp}', 'EmployeeController@update')->name('employee.update');
Route::patch('employee/delete/{emp}', 'EmployeeController@destroy')->name('employee.delete')->middleware('password.confirm');
Route::get('employee/record/{id}', 'EmployeeController@receipts')->name('employee.records');
Route::get('employee/pending/{id}', 'EmployeeController@pendingServices')->name('employee.pending');

/**
 * @description service of the site
 */
Route::get('/services', 'ServiceController@index')->name('service.index');
Route::get('/service', 'ServiceController@create')->name('service.create');
Route::post('/service', 'ServiceController@store')->name('service.store');
Route::get('/service/{serv}', 'ServiceController@show')->name('service.show');
Route::get('/service/{serv}/edit', 'ServiceController@edit')->name('service.edit');
Route::patch('/service/{serv}', 'ServiceController@update')->name('service.update')->middleware('password.confirm');
Route::patch('/service/delete/{serv}', 'ServiceController@destroy')->name('service.delete')->middleware('password.confirm');

/**
 * @description Receipt of the site
 */
Route::get('/receipt/findCustomer', 'ReceiptController@findCustomer');
Route::get('/receipt/findService', 'ReceiptController@findService');
Route::get('/receipt/findEmployee', 'ReceiptController@findEmployee');
Route::get('/receipt', 'ReceiptController@create')->name('receipt.create');
Route::post('/receipt', 'ReceiptController@store')->name('receipt.store');
Route::get('/receipt/{rec}', 'ReceiptController@show')->name('receipt.show');
Route::get('/receipt/{rec}/edit', 'ReceiptController@edit')->name('receipt.edit');
Route::patch('/receipt/{rec}', 'ReceiptController@update')->name('receipt.update')->middleware('password.confirm');
Route::patch('/receipt/cancel/{rec}', 'ReceiptController@destroy')->name('receipt.destroy')->middleware('password.confirm');
Route::patch('/receipt/done/{rec}', 'ReceiptController@done')->name('receipt.done');
