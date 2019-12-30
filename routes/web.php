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


//backend..............
Auth::routes();
Route::delete('/delete_product/{id}','Form@delete_product')->middleware(['auth']);
Route::get('/edit_product/{id}','Form@edit_product')->middleware(['auth']);
Route::delete('/destroy/{id}','Form@destroy')->middleware(['auth']);
Route::get('/edit/{id}','Form@edit')->middleware(['auth']);
Route::delete('/delete_mail/{id}','Form@delete_mail')->middleware(['auth']);
Route::get('/edit_mail/{id}','Form@edit_mail')->middleware(['auth']);
Route::get('/remove_item/{id}','PharmaController@remove_item');
Route::get('/details/{id}','PharmaController@details');
Route::get('/dashboard','Form@dash')->middleware(['auth']);
Route::get('/admin','Form@admin')->middleware(['auth']);
Route::get('/indexa','Form@indexa')->middleware(['auth']);
Route::get('/general','Form@general')->middleware(['auth']);
Route::get('/order_info','Form@order_info')->middleware(['auth']);
Route::post('/storee','Form@store')->middleware(['auth']);
Route::post('/update_general_info','Form@update_general');
Route::get('/product','Form@product')->middleware(['auth']);
Route::post('/store_product_info','Form@store_product')->middleware(['auth']);
Route::post('/update_product_info','Form@update_product')->middleware(['auth']);
Route::get('/mail','Form@mail')->middleware(['auth']);
Route::post('/store_mail_info','Form@store_mail')->middleware(['auth']);
Route::post('/update_mail_info','Form@update_mail')->middleware(['auth']);
Route::get('/store','PharmaController@secondpage');
Route::get('/about','PharmaController@thirdpage');
Route::get('/contact','PharmaController@fourthpage');
Route::post('/save_contact','PharmaController@save_contact');
Route::post('/add_to_cart','PharmaController@add_to_cart');
Route::get('/cart','PharmaController@cart');
Route::get('/checkout','PharmaController@checkout');
Route::post('/save_order','PharmaController@save_order');
Route::get('/thankyou','PharmaController@thankyou');
Route::get('/homes', 'HomeController@index')->name('home');
Route::get('/logout', 'Form@logout');
Route::get('/','PharmaController@fristpage');









//......................................................................


//backend..............
// Auth::routes();

// Route::get('/dashboard','Form@dash')->middleware(['auth']);
// Route::get('/admin','Form@admin')->middleware(['auth']);
// Route::get('/indexa','Form@indexa')->middleware(['auth']);

// Route::get('/general','Form@general')->middleware(['auth']);
// Route::post('/storee','Form@store')->middleware(['auth']);
// Route::delete('/destroy/{id}','Form@destroy')->middleware(['auth']);
// Route::get('/edit/{id}','Form@edit')->middleware(['auth']);
// Route::post('/update_general_info','Form@update_general');

// Route::get('/product','Form@product')->middleware(['auth']);
// Route::post('/store_product_info','Form@store_product')->middleware(['auth']);
// Route::delete('/delete_product/{id}','Form@delete_product')->middleware(['auth']);
// Route::get('/edit_product/{id}','Form@edit_product')->middleware(['auth']);
// Route::post('/update_product_info','Form@update_product')->middleware(['auth']);

// Route::get('/mail','Form@mail')->middleware(['auth']);
// Route::post('/store_mail_info','Form@store_mail')->middleware(['auth']);
// Route::delete('/delete_mail/{id}','Form@delete_mail')->middleware(['auth']);
// Route::get('/edit_mail/{id}','Form@edit_mail')->middleware(['auth']);
// Route::post('/update_mail_info','Form@update_mail')->middleware(['auth']);
// //frontend.............
// Route::get('/remove_item/{id}','PharmaController@remove_item');
// Route::get('/store','PharmaController@secondpage');
// Route::get('/about','PharmaController@thirdpage');
// Route::get('/contact','PharmaController@fourthpage');
// Route::post('/save_contact','PharmaController@save_contact');
// Route::get('/details/{id}','PharmaController@details');
// Route::post('/add_to_cart','PharmaController@add_to_cart');
// Route::get('/cart','PharmaController@cart');

// Route::get('/homes', 'HomeController@index')->name('home');
// Route::get('/logout', 'Form@logout');
// Route::get('/','PharmaController@fristpage');

