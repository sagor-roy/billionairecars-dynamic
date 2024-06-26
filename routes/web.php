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

use Illuminate\Http\Request;

Route::get('/clear-cache', function () {
	Artisan::call('cache:clear');
	return "Cache is cleared";

});

Route::get('lang/{locale}', function (Request $request, $lang) {
	$lang = ($lang == 'en') ? $lang : (($lang == 'es') ? $lang : 'nl');
	$request->session()->put('lang', $lang);
	\App::setLocale($lang);
	return redirect()->back();
})->name('setlocale');



//Default Controller

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/vehicles-details/{slug}', [HomeController::class, 'details'])->name('details');
Route::post('/contact-message', [HomeController::class, 'contact_message']);
Route::get('/vehicles', [HomeController::class, 'vehicles_filter'])->name('vehicles_filter');
Route::get('/filter', [HomeController::class, 'filter'])->name('filter');
Route::get('/model-filter', [HomeController::class, 'model_filter']);
Route::get('/financing-through-billionaire-car-plan', [HomeController::class, 'car_plan'])->name('car_plan');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/car-plan/{slug}', [HomeController::class, 'blog_details'])->name('blog_details');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('dashboard/import', 'DashboardController@getImport');
/* Auth & Profile */
Route::get('user/profile', 'UserController@getProfile');
Route::get('user/theme', 'UserController@getTheme');
Route::get('user/login', 'UserController@getLogin');
Route::get('user/register', 'UserController@getRegister');
Route::get('user/logout', 'UserController@getLogout');
Route::get('user/reminder', 'UserController@getReminder');
Route::get('user/reset/{any?}', 'UserController@getReset');
Route::get('user/reminder', 'UserController@getReminder');
Route::get('user/activation', 'UserController@getActivation');
// Social Login
Route::get('user/socialize/{any?}', 'UserController@socialize');
Route::get('user/autosocialize/{any?}', 'UserController@autosocialize');
//
Route::post('user/signin', 'UserController@postSignin');
Route::post('user/login', 'UserController@postSigninMobile');
Route::post('user/signup', 'UserController@postSignupMobile');
Route::post('user/create', 'UserController@postCreate');
Route::post('user/saveprofile', 'UserController@postSaveprofile');
Route::post('user/savepassword', 'UserController@postSavepassword');
Route::post('user/doreset/{any?}', 'UserController@postDoreset');
Route::post('user/request', 'UserController@postRequest');

/* Posts & Blogs */
Route::get('posts', 'HomeController@posts');
Route::get('posts/category/{any}', 'HomeController@posts');
Route::get('posts/read/{any}', 'HomeController@read');
Route::post('posts/comment', 'HomeController@comment');
Route::get('posts/remove/{id?}/{id2?}/{id3?}', 'HomeController@remove');
// Start Routes for Notification 
Route::resource('notification', 'NotificationController');
Route::get('home/load', 'HomeController@getLoad');
Route::get('home/lang/{any}', 'HomeController@getLang');

Route::get('/set_theme/{any}', 'HomeController@set_theme');

include('pages.php');


Route::resource('sximoapi', 'SximoapiController');
Route::resource('services/posts', 'Services\PostController');



// Routes for  all generated Module
include('module.php');
// Custom routes  
$path = base_path() . '/routes/custom/';
$lang = scandir($path);
foreach ($lang as $value) {
	if ($value === '.' || $value === '..') {
		continue;
	}
	include('custom/' . $value);
}
// End custom routes
Route::group(['middleware' => 'auth'], function () {
	Route::resource('dashboard', 'DashboardController');
});


Route::group(['namespace' => 'Sximo', 'middleware' => 'auth'], function () {
	// This is root for superadmin

	include('sximo.php');
});

Route::group(['namespace' => 'Core', 'middleware' => 'auth'], function () {

	include('core.php');
});
