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
	Route::get('', 'BlogController@getBlog')->name('blogs');
	Route::get('{name}.html','BlogController@getBlogCat')->name('blogs.cat');
	Route::get('{cat}/{slug}.html','BlogController@getRead')->name('blogs.read');
});
//Page Collection
Route::group(['prefix' => 'collections'], function(){
	Route::get('all.html','ProductController@getAllProduct')->name('products.all');
	Route::get('{name}.html', 'ProductController@getCollection')->name('collection');
});

//Page Product
Route::get('products/{name}.html', 'ProductController@getProduct')->name('products');
Route::get('tags/{tags}','ProductController@getProductTags')->name('products.tags');
//Search Product
Route::get('search','ProductController@getSearch')->name('search');
//Pages
Route::group(['prefix'=>'pages'], function(){
	Route::get('phuong-thuc-thanh-toan.html', 'PageController@getPageThanhToan')->name('phuong-thuc-thanh-toan');

	Route::get('bao-hanh.html', 'PageController@getPageBaoHanh')->name('bao-hanh');
});
//Cart
Route::group(['prefix'=>'cart'], function(){
	Route::get('', 'CartController@getCart')->name('cart');
	Route::post('add', 'CartController@postAddCart')->name('cart.add');
	Route::post('', 'CartController@postCart')->name('cart');
	Route::get('remove/all','CartController@getRemoveCart')->name('cart.remove');
	Route::get('remove/{id}', 'CartController@getRemoveItem')->name('cart.remove.item');
});
Route::get('checkout', 'CartController@getCheckout')->name('checkout');
Route::post('checkout', 'CartController@postCheckout')->name('checkout');
Route::get('checkout/step/2', 'CartController@getCheckout2')->name('checkout2');
Route::post('checkout/step/2', 'CartController@postCheckout2')->name('checkout2');
Route::get('checkout/{code}/thank_you', 'CartController@getThankYou')->name('checkout.step3');
Route::get('invoice/{id}', 'CartController@getInvoice')->name('invoice');

Route::group(['prefix'=>'ajax'], function(){
	Route::get('district/{id}', 'AjaxController@getDistrict');
	Route::get('district/{id}/{id_district}', 'AjaxController@getDistrict');
	Route::get('customer/{id}', 'AjaxController@getInfoCustomer');
});

//Page Account
Route::group(['prefix'=>'account'], function(){
	//Page Account 
	Route::get('', 'UserController@getAccount')->name('account');
	//Page Register
	Route::get('register.html','UserController@getRegister')->name('register');
	Route::post('register.html','UserController@postRegister');
	//Page Login
	Route::get('login.html', 'UserController@getLogin')->name('login');
	Route::post('login.html', 'UserController@postLogin');
	//Page Forgot
	Route::get('forgot.html','UserController@getForgotPassword')->name('forgot');
	//Page Forgot Password
	Route::post('forgot.html','UserController@postForgotPassword');
	Route::get('reset/{code}','UserController@getVerifyPassword')->name('forgot.changepass');
	Route::post('reset/{code}','UserController@postVerifyPassword');
	//Page Address
	Route::get('addresses', 'UserController@getAddress')->name('addresses');
	//Page Order
	Route::get('orders/{code}', 'UserController@getOrder')->name('account.order');
});
//Logout
Route::get('logout.html', 'UserController@getLogout')->name('logout');
//Profile
Route::get('profile','UserController@getProfile')->name('profile');
Route::post('profile', 'UserController@postProfile');
//Dang ky mail nhận tin
Route::post('register-mail','PageController@postMail')->name('reg-mail');
//Test
Route::get('test/{id}',function($id){
	$b = array();
	$a = App\Collection::where('parent', $id)->get();
	foreach($a as $k => $v){
		array_push($b, $v['id']);
	}
	$d = $b;
	foreach ($d as $k2 => $v2) {
		$c = App\Collection::where('parent', $v2)->get()->toArray();
		foreach ($c as $k3 => $v3) {
			array_push($b, $v3['id']);
		}
	}
	print_r($b);
});

/////////////////////////////////////////////////////////////////////////////////
////Page AdminCP 															///
//////////////////////////////////////////////////////////////////////////////
	//Login
Route::get('admincp/login',[
	'as' => 'admin.login',
	'uses' => 'AdminController@getLogin'
]);
Route::post('admincp/login',[
	'as' => 'admin.login',
	'uses' => 'AdminController@postLogin'
]);
Route::group(['prefix'=>'admincp','middleware' => 'adminLogin'],function(){
	//Home
	Route::get('/',[
		'as' => 'admin',
		'uses' => 'AdminController@getIndex'
	]);
	//Page Collection
	Route::group(['prefix'=>'collection'], function(){
		Route::get('/', 'AdmCollectionController@getListCollection')->name('collection.list');
		Route::get('add','AdmCollectionController@getAddCollection')->name('collection.add');
		Route::post('add','AdmCollectionController@postAddCollection')->name('collection.add');
		Route::get('control','AdmCollectionController@getControlCollection')->name('collection.control');
		Route::post('edit/{id}','AdmCollectionController@postEditCollection')->name('collection.edit');
		Route::get('remove/{id}','AdmCollectionController@getRemoveCollection')->name('collection.remove');
	});

	//Page Product
	Route::group(['prefix'=>'product'], function(){
		Route::get('/', 'AdmProductController@getListProduct')->name('product.list');
		Route::get('add','AdmProductController@getAddProduct')->name('product.add');
		Route::post('add','AdmProductController@postAddProduct')->name('product.add');
		Route::get('edit/{id}','AdmProductController@getEditProduct')->name('product.edit');
		Route::post('edit/{id}','AdmProductController@postEditProduct')->name('product.edit');
		Route::get('remove/{id}','AdmProductController@getRemoveProduct')->name('product.remove');
	});
	//Page Order Manager
Route::group(['prefix'=>'orders'], function(){
	Route::get('','AdmOrderController@getListOrder')->name('order.list');
	Route::post('update', 'AdmOrderController@postUpdateOrder')->name('order.update');
});

	//Page Settings
	Route::group(['prefix'=>'settings'], function(){
		Route::get('/','AdminController@getSettings')->name('adm.settings');
		Route::post('/','AdminController@postSettings')->name('adm.settings');
		//Page Slider Manager
		Route::get('slider','AdminController@getSlider')->name('adm.slider');
		Route::post('slider','AdminController@postSlider')->name('adm.slider');
		Route::get('slider/add','AdminController@getAddSlider')->name('adm.slider.add');
		Route::post('slider/add', 'AdminController@postAddSlider')->name('adm.slider.add');
		Route::get('slider/edit/{id}','AdminController@getEditSlider')->name('adm.slider.edit');
		Route::post('slider/edit/{id}', 'AdminController@postEditSlider')->name('adm.slider.edit');
		Route::get('slider/delete/{id}', 'AdminController@getDeleteSlider')->name('adm.slider.delete');
	});
	//Page List News
	Route::group(['prefix'=>'news'], function(){
		Route::get('list',[
			'as' => 'danh-sach-tin',
			'uses' => 'AdmBlogController@getNewsList'
		]);
		//Page News Panel
		Route::group(['prefix'=>'cat'], function(){
			Route::get('list','AdmBlogController@getCatList');
			Route::post('add', 'AdmBlogController@postCatAdd');
			Route::get('edit/{id}','AdmBlogController@getCatEdit');
			Route::post('edit/{id}','AdmBlogController@postCatEdit');
			Route::get('delete/{id}','AdmBlogController@getCatDel');
		});
		//Add News
		Route::get('add',[
			'as' => 'news.add',
			'uses' => 'AdmBlogController@getNewsAdd'
		]);
		Route::post('add','AdmBlogController@postNewsAdd');
		//Edit News
		Route::get('edit/{id}','AdmBlogController@getNewsEdit');
		Route::post('edit/{id}','AdmBlogController@PostNewsEdit');
		//Delete News
		Route::get('delete/{id}','AdmBlogController@getNewsDelete');
		Route::get('delete', 'AdmBlogController@getRemoveAllNews')->name('news.delete');
	});
	Route::get('edit/{id}', 'AdmBlogController@getEditPage')->name('edit.page');
	Route::post('edit/{id}', 'AdmBlogController@postEditPage')->name('edit.page');
	//Page User Manager
	Route::group(['prefix'=>'users'],function(){
		Route::get('list','AdmUserController@getUserList')->name('userslist');
		Route::post('add','AdmUserController@postUserAdd');
		Route::post('edit/{id}','AdmUserController@postUserEdit');
		Route::get('delete/{id}','AdmUserController@getUserDelete');
		Route::get('list/active/{id}','AdmUserController@getActiveUsers');
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