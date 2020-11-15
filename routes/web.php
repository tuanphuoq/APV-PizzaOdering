<?php

// use Illuminate\Support\Facades\Route;

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
Auth::routes();

//login-logout-signup
//login
// Route::get('login', 'AccountController@loginForm')->name('auth.login');
Route::get('login', 'AccountController@loginForm')->name('auth.login');
// Route::post('login', 'AccountController@postLogin')->name('auth.post-login');
Route::post('login', 'AccountController@postLogin')->name('login');
//signup
Route::get('register', 'AccountController@register')->name('register');
Route::post('register', 'AccountController@save')->name('register.save');
//logout
Route::get('/logout','AccountController@logout')->name('logout');

Route::group(['middleware'=>'auth'], function(){
	//group route product
	// Route::group(['prefix' => 'product','middleware' => ['admin.check']], function() {
	Route::group(['prefix' => 'admin'], function() {
		Route::get('/', 'ProductController@view')->name('product');
	});

	Route::group(['prefix' => 'product'], function() {
		Route::get('/', 'ProductController@view')->name('product');

    // return view add product
		Route::get('viewadd', 'ProductController@viewadd')->name('viewadd');

	//postvalue to create product
		Route::post('addProduct', 'ProductController@addProduct')->name('addProduct');

	//return view edit product
		Route::get('viewedit/{id}', 'ProductController@viewedit');

		Route::post('editProduct/{id}', 'ProductController@editProduct');

		Route::post('delete/{id}', 'ProductController@delete');
	});

	//group route product
	Route::group(['prefix' => 'order'], function() {
		Route::get('/', 'OrderController@view')->name('order');
		Route::get('state', 'OrderController@changeState')->name('changeState');
		Route::post('/add', 'OrderController@storeOrder');
	});

	//group route product
	Route::group(['prefix' => 'statistic'], function() {
		Route::get('/', 'StatisticController@view')->name('statistic');
		Route::get('order', 'StatisticController@statisticOrder')->name('statistic.order');
		// Route::get('state', 'OrderController@changeState')->name('changeState');
		// Route::post('/add', 'OrderController@storeOrder');
	});


	//group route category
	// Route::group(['prefix' => 'category','middleware' => ['admin.check']], function() {
	Route::group(['prefix' => 'category'], function() {
		Route::get('/', 'CategoryController@view')->name('category');

    // return view add category
		Route::get('add', 'CategoryController@viewAddCategory')->name('viewAddCategory');

	//postvalue to create category
		Route::post('addCategory', 'CategoryController@addCategory')->name('addCategory');

	//return view edit category
		Route::get('edit/{id}', 'CategoryController@viewEditCategory');

		Route::post('editCategory/{id}', 'CategoryController@editCategory');

		Route::post('delete/{id}', 'CategoryController@deleteCategory');
	});
	//group route topping
	Route::group(['prefix' => 'topping'], function() {
		Route::get('/', 'ToppingController@view')->name('topping');

    // return view add topping
		Route::get('add', 'ToppingController@create')->name('create');

	//postvalue to create topping
		Route::post('addTopping', 'ToppingController@add')->name('addTopping');

	//return view edit topping
		Route::get('edit/{id}', 'ToppingController@viewEdit');

		Route::post('editTopping/{id}', 'ToppingController@edit');

		Route::post('delete/{id}', 'ToppingController@deleteTopping');
	});

	//group route post
	Route::group(['prefix' => 'post'], function() {
		Route::get('/', 'PostController@view')->name('post');

    // return view add post
		Route::get('add', 'PostController@create')->name('create');

	//postvalue to create post
		Route::post('addPost', 'PostController@add')->name('addPost');

	//return view edit post
		Route::get('edit/{id}', 'PostController@viewEdit');

		Route::post('editPost/{id}', 'PostController@edit');

		Route::post('delete/{id}', 'PostController@deletePost');
	});

});

// ================
//For User or guest
// ================
Route::get('blog', function() {
	return view("store.blog");
	//todo show blog, post in user page
});

Route::get('/', function () {
	// return view('welcome');
	return view('store.homepage');
});

//show list products in user page
Route::get('menu', 'ProductController@list');
Route::get('menu/search', 'ProductController@search')->name('nemu.search');

Route::get('home', function() {
	return view('store.homepage');
})->name('home');

Route::get('contact', function() {
	return view('store.contact');
})->name('contact');

Route::get('product-detail/{id}', 'ProductController@show');

//cart 
Route::group(['prefix' => 'cart'], function() {
	Route::get('/', 'OrderController@viewCart');
	Route::get('/{id}', 'OrderController@destroyItems');
	Route::post('/add', 'OrderController@addcart');
});
