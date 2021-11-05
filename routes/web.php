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
		Route::get('/men-shop-fabric', 'mainController@menshopfabric')->name('menshopfabric');
		Route::get('/men-shop-customize', 'mainController@menshopcustomize')->name('menshopcustomize');
		Route::get('/personal-information', 'mainController@personalinformation')->name('personalinformation');
		Route::get('/checkout', 'mainController@checkout')->name('checkout');
		Route::get('/payment-method', 'mainController@paymentmethod')->name('paymentmethod');
		Route::get('/my-orders', 'mainController@myorders')->name('myorders');
		Route::get('/order-with-ai-measurement', 'mainController@orderwithaimeasurement')->name('orderwithaimeasurement');
		Route::get('/order-with-manual-measurement', 'mainController@orderwithmanualmeasurement')->name('orderwithmanualmeasurement');
		Route::get('/order-with-standard-measurement', 'mainController@orderwithstandardmeasurement')->name('orderwithstandardmeasurement');
		Route::get('/view-shirt-customization', 'mainController@viewshirtcustomization')->name('viewshirtcustomization');
		Route::get('/cancel-order', 'mainController@cancelorder')->name('cancelorder');
		Route::get('/order-tracking', 'mainController@ordertracking')->name('ordertracking');
		Route::get('/order-cancel-tracking', 'mainController@ordercanceltracking')->name('ordercanceltracking');
		Route::get('/modal', 'mainController@modal')->name('modal');

 
		/*Nabeel*/
		Route::get('/measurement-for-men', 'mainController@measurementformen')->name('measurementformen');
		Route::get('/ai-algorithm', 'mainController@aialgorithm')->name('aialgorithm');
		Route::get('/ai-algorithm-calculate', 'mainController@aialgorithmcalculate')->name('aialgorithmcalculate');
		Route::get('/add-to-cart', 'mainController@addtocart')->name('addtocart');
		Route::get('/standard-size', 'mainController@standardsize')->name('standardsize');
		Route::get('/manual-measurements', 'mainController@manualmeasurements')->name('manualmeasurements');
		
	});

	Route::prefix('admin')->namespace('admin')->group(function(){


		Route::get('/', 'adminController@index')->name('admin.index');

		Route::prefix('customization')->group(function(){

		// Route::get('/', 'adminController@index')->name('admin.index');


			// men customize
			Route::prefix('men')->group(function(){

			Route::get('/blazer', 'CustomizeController@menblazer')->name('customization.men.blazer');
			Route::get('/jeans', 'CustomizeController@menjeans')->name('customization.men.jeans');
			Route::get('/kurta', 'CustomizeController@menkurta')->name('customization.men.kurta');
			Route::get('/pyjama', 'CustomizeController@menpyjama')->name('customization.men.pyjama');
			Route::get('/tshirt', 'CustomizeController@mentshirt')->name('customization.men.tshirt');
			Route::get('/trouser', 'CustomizeController@mentrouser')->name('customization.men.trouser');





			});

			// women customize
			Route::prefix('women')->group(function(){

			Route::get('/blazer', 'CustomizeController@womenblazer')->name('customization.women.blazer');
			Route::get('/jeans', 'CustomizeController@womenjeans')->name('customization.women.jeans');
			Route::get('/kurti', 'CustomizeController@womenkurti')->name('customization.men.kurti');
			Route::get('/shirt', 'CustomizeController@womenshirt')->name('customization.wommen.shirt');
			Route::get('/trouser', 'CustomizeController@womentrouser')->name('customization.women.trouser');
			Route::get('/dresses', 'CustomizeController@womendresses')->name('customization.men.dresses');






			});

		});


	});
