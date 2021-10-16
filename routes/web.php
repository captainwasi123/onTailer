<?php

use Illuminate\Support\Facades\Route;

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

//Website Routes

	Route::namespace('web')->group(function(){

		Route::get('/', 'mainController@index')->name('home');
		Route::get('/about', 'mainController@about')->name('about');
		Route::get('/fit-gurantee', 'mainController@fitgurantee')->name('fitgurantee');
		Route::get('/shopping-policy', 'mainController@shoppingpolicy')->name('shoppingpolicy');
		Route::get('/alteration-return-policy', 'mainController@alterationreturnpolicy')->name('alterationreturnpolicy');
		Route::get('/privacy-policy', 'mainController@privacypolicy')->name('privacypolicy');
		Route::get('/terms-conditions', 'mainController@termsconditions')->name('termsconditions');
		Route::get('/measurement-profile', 'mainController@measurementprofile')->name('measurementprofile');
		Route::get('/ai-measurement-table', 'mainController@aimeasurementtable')->name('aimeasurementtable');
		Route::get('/manual-measurement-table', 'mainController@manualmeasurementtable')->name('manualmeasurementtable');
		Route::get('/create-measurement-profile', 'mainController@createmeasurementprofile')->name('createmeasurementprofile');
		Route::get('/contact-us', 'mainController@contactus')->name('contactus');
		Route::get('/payment-contact-us', 'mainController@paymentcontactus')->name('paymentcontactus');
		Route::get('/manage-contact-us', 'mainController@managecontactus')->name('managecontactus');
		Route::get('/offer-contact-us', 'mainController@offercontactus')->name('offercontactus');
		Route::get('/other-contact-us', 'mainController@othercontactus')->name('othercontactus');
		Route::get('/men-shop', 'mainController@menshop')->name('menshop');
		Route::get('/men-shop-single', 'mainController@menshopsingle')->name('menshopsingle');
 
		/*Nabeel*/
		Route::get('/men-shop-2233', 'mainController@menshop2233')->name('menshop2233');
		Route::get('/add-to-cart', 'mainController@addtocart')->name('addtocart');
		Route::get('/men-shop-fabric', 'mainController@menshopfabric')->name('menshopfabric');
 
	});
