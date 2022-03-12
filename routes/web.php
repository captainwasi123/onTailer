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

		Route::get('/', 'webController@index')->name('home');
		Route::get('/about', 'webController@about')->name('about');
		Route::get('/fit-gurantee', 'webController@fitGurantee')->name('fitGurantee');
		Route::get('/shopping-policy', 'webController@shoppingPolicy')->name('shoppingPolicy');
		Route::get('/return-policy', 'webController@returnPolicy')->name('returnPolicy');
		Route::get('/privacy-policy', 'webController@privacyPolicy')->name('privacyPolicy');
		Route::get('/terms-conditions', 'webController@termsConditions')->name('termsConditions');
		Route::get('/contact-us', 'webController@contactUs')->name('contactUs');

		//Shop
			Route::prefix('shop')->group(function(){
				//Men
					Route::prefix('men')->group(function(){
						Route::get('/', 'mainController@menshop')->name('web.shop.men');
						Route::get('/details', 'mainController@menshopsingle')->name('web.shop.men.detail');

						//Customize
							Route::prefix('customize')->group(function(){
								Route::get('/', 'mainController@menshopcustomize')->name('web.shop.men.customize');
								Route::get('/fabric', 'mainController@menshopfabric')->name('web.shop.men.fabric');
							});
					});
			});

		//Customization
			Route::prefix('customization')->group(function(){

				Route::get('/order-with-ai-measurement', 'mainController@orderwithaimeasurement')->name('orderwithaimeasurement');
				Route::get('/order-with-manual-measurement', 'mainController@orderwithmanualmeasurement')->name('orderwithmanualmeasurement');
				Route::get('/order-with-standard-measurement', 'mainController@orderwithstandardmeasurement')->name('orderwithstandardmeasurement');
				Route::get('/view-shirt-customization', 'mainController@viewshirtcustomization')->name('viewshirtcustomization');
				
				Route::get('/measurement-profile', 'mainController@measurementprofile')->name('measurementprofile');
				Route::get('/ai-measurement-table', 'mainController@aimeasurementtable')->name('aimeasurementtable');
				Route::get('/manual-measurement-table', 'mainController@manualmeasurementtable')->name('manualmeasurementtable');
				Route::get('/create-measurement-profile', 'mainController@createmeasurementprofile')->name('createmeasurementprofile');
			});

		//Orders
			Route::prefix('orders')->group(function(){
				Route::get('/personal-information', 'mainController@personalinformation')->name('personalinformation');
				Route::get('/checkout', 'mainController@checkout')->name('checkout');
				Route::get('/payment-method', 'mainController@paymentmethod')->name('paymentmethod');
				Route::get('/my-orders', 'mainController@myorders')->name('myorders');
				Route::get('/cancel-order', 'mainController@cancelorder')->name('cancelorder');
				Route::get('/order-tracking', 'mainController@ordertracking')->name('ordertracking');
				Route::get('/order-cancel-tracking', 'mainController@ordercanceltracking')->name('ordercanceltracking');
				Route::get('/add-to-cart', 'mainController@addtocart')->name('addtocart');
			});

		Route::get('/payment-contact-us', 'mainController@paymentcontactus')->name('paymentcontactus');
		Route::get('/manage-contact-us', 'mainController@managecontactus')->name('managecontactus');
		Route::get('/offer-contact-us', 'mainController@offercontactus')->name('offercontactus');
		Route::get('/other-contact-us', 'mainController@othercontactus')->name('othercontactus');
		Route::get('/modal', 'mainController@modal')->name('modal');

 
		/*Nabeel*/
		Route::get('/measurement-for-men', 'mainController@measurementformen')->name('measurementformen');
		Route::get('/ai-algorithm', 'mainController@aialgorithm')->name('aialgorithm');
		Route::get('/ai-algorithm-calculate', 'mainController@aialgorithmcalculate')->name('aialgorithmcalculate');
		Route::get('/standard-size', 'mainController@standardsize')->name('standardsize');
		Route::get('/manual-measurements', 'mainController@manualmeasurements')->name('manualmeasurements');
		
	});





// Admin Panel

	Route::prefix('admin')->namespace('admin')->group(function(){

		//AuthController
			Route::get('/login', 'AuthController@login')->name('admin.login');
			Route::post('/login', 'AuthController@loginSubmit');

			//Middleware
				Route::middleware('adminAuth')->group(function(){

					Route::get('/', 'adminController@index')->name('admin.dashboard');

					//Product
						Route::prefix('products')->group(function(){
							Route::get('/', 'ProductController@product')->name('products.product');
						});	

					//Fabric
						Route::prefix('fabric')->group(function(){
							Route::get('/', 'FabricController@index')->name('admin.fabric');
							Route::get('/add', 'FabricController@add')->name('admin.fabric.add');
							Route::post('/add', 'FabricController@addSubmit');
							Route::get('/getCategory/{id}', 'FabricController@getSubCategory');
							Route::get('/edit/{id}', 'FabricController@edit');
							Route::post('/update', 'FabricController@update')->name('admin.fabric.update');
							Route::get('/delete/{id}', 'FabricController@delete');


							Route::prefix('measurement')->group(function(){
								Route::get('/ai-measurement', 'MeasurementController@Aimeasurement')->name('fabric.measurement.ai-measurement');
								Route::get('/manual-measurement', 'MeasurementController@Manualmeasurement')->name('fabric.measurement.manual-measurement');
								Route::get('/standard-measurement', 'MeasurementController@Standmeasurement')->name('fabric.measurement.standard-measurement');
							});
						});

					//General Settings
						Route::prefix('settings')->group(function(){
							//Categories
								Route::prefix('categories')->group(function(){
									Route::get('/', 'settingController@categories')->name('admin.settings.categories');
									Route::post('/add', 'settingController@categoriesAdd')->name('admin.settings.categories.add');
									Route::post('/update', 'settingController@categoriesUpdate')->name('admin.settings.categories.update');

									Route::get('/delete/{id}', 'settingController@categoriesDelete');
									Route::get('/edit/{id}', 'settingController@categoriesEdit');
								});

							//Sub Categories
								Route::prefix('subCategories')->group(function(){
									Route::get('/', 'settingController@subCategories')->name('admin.settings.subCategories');
									Route::post('/add', 'settingController@subCategoriesAdd')->name('admin.settings.subCategories.add');
									Route::post('/update', 'settingController@subCategoriesUpdate')->name('admin.settings.subCategories.update');

									Route::get('/delete/{id}', 'settingController@subCategoriesDelete');
									Route::get('/edit/{id}', 'settingController@subCategoriesEdit');
								});

							//Fabric
								Route::prefix('fabric')->group(function(){
									//Color
										Route::prefix('color')->group(function(){
											Route::get('/', 'settingController@fabricColor')->name('admin.settings.fabricColor');
											Route::post('/add', 'settingController@fabricColorAdd')->name('admin.settings.fabricColor.add');
											Route::post('/update', 'settingController@fabricColorUpdate')->name('admin.settings.fabricColor.update');

											Route::get('/delete/{id}', 'settingController@fabricColorDelete');
											Route::get('/edit/{id}', 'settingController@fabricColorEdit');
										});
									//Material
										Route::prefix('material')->group(function(){
											Route::get('/', 'settingController@fabricMaterial')->name('admin.settings.fabricMaterial');
											Route::post('/add', 'settingController@fabricMaterialAdd')->name('admin.settings.fabricMaterial.add');
											Route::post('/update', 'settingController@fabricMaterialUpdate')->name('admin.settings.fabricMaterial.update');

											Route::get('/delete/{id}', 'settingController@fabricMaterialDelete');
											Route::get('/edit/{id}', 'settingController@fabricMaterialEdit');
										});
									//Pattern
										Route::prefix('pattern')->group(function(){
											Route::get('/', 'settingController@fabricPattern')->name('admin.settings.fabricPattern');
											Route::post('/add', 'settingController@fabricPatternAdd')->name('admin.settings.fabricPattern.add');
											Route::post('/update', 'settingController@fabricPatternUpdate')->name('admin.settings.fabricPattern.update');

											Route::get('/delete/{id}', 'settingController@fabricPatternDelete');
											Route::get('/edit/{id}', 'settingController@fabricPatternEdit');
										});
									//Fabric Type
										Route::prefix('type')->group(function(){
											Route::get('/', 'settingController@fabricType')->name('admin.settings.fabricType');
											Route::post('/add', 'settingController@fabricTypeAdd')->name('admin.settings.fabricType.add');
											Route::post('/update', 'settingController@fabricTypeUpdate')->name('admin.settings.fabricType.update');

											Route::get('/delete/{id}', 'settingController@fabricTypeDelete');
											Route::get('/edit/{id}', 'settingController@fabricTypeEdit');
										});
								});
						});








					Route::prefix('customization')->group(function(){

						Route::get('/addcustompart', 'CustomizeController@addcustompart')->name('admin.customization.add-custom-part');
						Route::get('/', 'CustomizeController@customization')->name('admin.customization.customization');





						// men customize
						Route::prefix('men')->group(function(){

						// add
						Route::get('/addblazer', 'CustomizeController@addMenblazer')->name('customization.men.add-blazer');
						Route::get('/addharem', 'CustomizeController@addMenharem')->name('customization.men.add-harem');
						Route::get('/addjeans', 'CustomizeController@addMenjeans')->name('customization.men.add-jeans');
						Route::get('/addkurta', 'CustomizeController@addMenkurta')->name('customization.men.add-kurta');
						Route::get('/addshirt', 'CustomizeController@addMenshirt')->name('customization.men.add-shirt');	
						Route::get('/addtrouser', 'CustomizeController@addMentrouser')->name('customization.men.add-trouser');			


						// view 
						Route::get('/blazer', 'CustomizeController@menblazer')->name('customization.men.blazer');
						Route::get('/jeans', 'CustomizeController@menjeans')->name('customization.men.jeans');
						Route::get('/kurta', 'CustomizeController@menkurta')->name('customization.men.kurta');
						Route::get('/pyjama', 'CustomizeController@menpyjama')->name('customization.men.pyjama');
						Route::get('/tshirt', 'CustomizeController@mentshirt')->name('customization.men.tshirt');
						Route::get('/trouser', 'CustomizeController@mentrouser')->name('customization.men.trouser');


						});

						// women customize
						Route::prefix('women')->group(function(){

						//add
						Route::get('/addblazer', 'CustomizeController@addwomenblazer')->name('customization.women.add-blazer');
						Route::get('/adddresses', 'CustomizeController@addwomendresses')->name('customization.women.add-dresses');
						Route::get('/addjeans', 'CustomizeController@addwomenjeans')->name('customization.women.add-jeans');
						Route::get('/addkurti', 'CustomizeController@addwomenkurti')->name('customization.women.add-kurti');
						Route::get('/addshirt', 'CustomizeController@addwomenshirt')->name('customization.women.add-shirt');	
						Route::get('/addtrouser', 'CustomizeController@addwomentrouser')->name('customization.women.add-trouser');			

						// view
						Route::get('/blazer', 'CustomizeController@womenblazer')->name('customization.women.blazer');
						Route::get('/jeans', 'CustomizeController@womenjeans')->name('customization.women.jeans');
						Route::get('/kurti', 'CustomizeController@womenkurti')->name('customization.men.kurti');
						Route::get('/shirt', 'CustomizeController@womenshirt')->name('customization.wommen.shirt');
						Route::get('/trouser', 'CustomizeController@womentrouser')->name('customization.women.trouser');
						Route::get('/dresses', 'CustomizeController@womendresses')->name('customization.men.dresses');

						});

					});

					Route::prefix('discount')->group(function(){

						Route::get('/', 'DiscountController@discount')->name('discount.discount');

					});	

				});

	});
