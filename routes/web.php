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
///////////////////////////////////////////////////////////////////////////////
////Page Front-End    														///
//////////////////////////////////////////////////////////////////////////////
Route::get('/',[
	'as' => 'trang-chu',
	'uses' => 'PageController@getIndex'
]);
//Page Liên hệ
Route::get('lien-he',[
	'as' => 'lien-he',
	'uses' => 'PageController@getContacts'
]);
//Page Blog
Route::group(['prefix'=>'blogs'],function(){
	Route::get('/', 'PageController@getBlog')->name('blogs');
	Route::get('cat/{id}/{name}','PageController@getBlogCat');
	Route::get('cat/{id}','PageController@getBlogCat');
	Route::get('readmore/{id}/{title}','PageController@getRead');
	Route::get('readmore/{id}','PageController@getRead');
});
//Page Product
Route::get('products/{id}/{name}', 'PageController@getProduct')->name('products');
//Pages
Route::group(['prefix'=>'pages'], function(){
	Route::get('phuong-thuc-thanh-toan', function(){
		return view('client.pages.phuong_thuc_thanh_toan');
	})->name('phuong-thuc-thanh-toan');

	Route::get('bao-hanh', function(){
		return view('client.pages.bao_hanh');
	})->name('bao-hanh');
});

//Page Account
Route::group(['prefix'=>'account'], function(){
	//Page Account 
	Route::get('/', 'PageController@getAccount')->name('account');
	//Page Register
	Route::get('register','PageController@getRegister')->name('register');
	Route::post('register','PageController@postRegister');
	//Page Login
	Route::get('login', 'PageController@getLogin')->name('login');
	Route::post('login', 'PageController@postLogin');
	//Page Forgot
	Route::get('forgot','PageController@getForgotPassword')->name('forgot');
});
//Logout
Route::get('logout', 'PageController@getLogout')->name('logout');
//Page Forgot Password
Route::post('forgotpassword','PageController@postForgotPassword');
Route::get('forgotpassword/verify/{code}','PageController@getVerifyPassword')->name('verify_change_pass');
Route::post('forgotpassword/verify/{code}','PageController@postVerifyPassword');
//Profile
Route::get('profile','PageController@getProfile')->name('profile');
Route::post('profile', 'PageController@postProfile');
//Dang ky mail nhận tin
Route::post('register-mail','PageController@postMail')->name('reg-mail');
//Test
Route::get('sendmail','PageController@sendMail');

/////////////////////////////////////////////////////////////////////////////////
////Page AdminCP 															///
//////////////////////////////////////////////////////////////////////////////
Route::group(['prefix'=>'admincp','middleware' => 'adminLogin'],function(){
	//Home
	Route::get('/',[
		'as' => 'admin',
		'uses' => 'AdminController@getIndex'
	]);
	//Login
	Route::get('login',[
		'as' => 'login-admin',
		'uses' => 'AdminController@getLogin'
	]);
	//Page Collection
	Route::group(['prefix'=>'collection'], function(){
		Route::get('/', 'AdminController@getListCollection')->name('collection.list');
		Route::get('add','AdminController@getAddCollection')->name('collection.add');
		Route::post('add','AdminController@postAddCollection')->name('collection.add');
		Route::get('edit/{id}','AdminController@getEditCollection')->name('collection.edit');
		Route::post('edit/{id}','AdminController@postEditCollection')->name('collection.edit');
		Route::get('remove/{id}','AdminController@getRemoveCollection')->name('collection.remove');
	});

	//Page Product
	Route::group(['prefix'=>'product'], function(){
		Route::get('/', 'AdminController@getListProduct')->name('product.list');
		Route::get('add','AdminController@getAddProduct')->name('product.add');
		Route::post('add','AdminController@postAddProduct')->name('product.add');
		Route::get('edit/{id}','AdminController@getEditProduct')->name('product.edit');
		Route::post('edit/{id}','AdminController@postEditProduct')->name('product.edit');
		Route::get('remove/{id}','AdminController@getRemoveProduct')->name('product.remove');
	});
	//Page Settings
	Route::group(['prefix'=>'settings'], function(){
		Route::get('/','AdminController@getSettings')->name('settings');
	});
	//Page List News
	Route::group(['prefix'=>'news'], function(){
		Route::get('list',[
			'as' => 'danh-sach-tin',
			'uses' => 'AdminController@getNewsList'
		]);
		//Page News Panel
		Route::group(['prefix'=>'cat'], function(){
			Route::get('list','AdminController@getCatList');
			Route::post('add', 'AdminController@postCatAdd');
			Route::get('edit/{id}','AdminController@getCatEdit');
			Route::post('edit/{id}','AdminController@postCatEdit');
			Route::get('delete/{id}','AdminController@getCatDel');
		});
		//Add News
		Route::get('add',[
			'as' => 'them-bai-viet',
			'uses' => 'AdminController@getNewsAdd'
		]);
		Route::post('add','AdminController@postNewsAdd');
		//Edit News
		Route::get('edit/{id}','AdminController@getNewsEdit');
		Route::post('edit/{id}','AdminController@PostNewsEdit');
		//Delete News
		Route::get('delete/{id}','AdminController@getNewsDelete');
	});
	//Page User Manager
	Route::group(['prefix'=>'users'],function(){
		Route::get('list','AdminController@getUserList')->name('userslist');
		Route::post('add','AdminController@postUserAdd');
		Route::post('edit/{id}','AdminController@postUserEdit');
		Route::get('delete/{id}','AdminController@getUserDelete');
		Route::get('list/active/{id}','AdminController@getActiveUsers');
	});
});

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});