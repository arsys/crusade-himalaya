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
Route::redirect('/home', '/manage/dashboard');
Route::redirect('/manage', '/manage/dashboard');


// Route::get('/', 'FrontendController@gethome');

Route::prefix('admin/dashboard')->group(function() {
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('/login', 'Auth\LoginController@login')->name('login.submit');
	// Route::get('/', 'AdminController@index')->name('dashboard');
	Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    // Password reset routes
	Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
});

Route::prefix('manage')->middleware('role:superadministrator|administrator|user')->group(function () {
	Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//Tour management
	Route::resource('tour', 'TourController');
	Route::get('featured/tour','TourController@featuredTours')->name('tour.featured');
	Route::get('tour/{id}/publish','TourController@publish')->name('tour.publish');
	Route::get('tour/{id}/unpublish','TourController@unpublish')->name('tour.unpublish');
	Route::get('{id}/featured',  'TourController@setAsfeatured')->name('feature.tour');
	Route::get('{id}/removefeatured', 'TourController@removeAsfeatured')->name('remove.feature');

//Trash management
	Route::get('tour/trash', 'TourController@viewTrash')->name('show.trash');
	Route::get('{id}/move-to-trash', 'TourController@moveTotrash')->name('move.trash');
	Route::get('{id}/move-from-trash', 'TourController@removeFromtrash')->name('move.from-trash');
//Tour itinerary management
	Route::get('tour/{id}/itineraries', 'ItineraryController@create')->name('itinerary-create');
	Route::post('tour/create/itinerary-store', 'ItineraryController@save')->name('itinerary-store');
	Route::post('itinerary/itinerary-destroy/{itinerary}', 'ItineraryController@destroy')->name('itinerary-destroy');
	Route::post('itinerary-edit', 'ItineraryController@update')->name('itinerary-edit');

	Route::resource('departure','DepartureController');
	
//Tour attributes	
	Route::resource('difficulty', 'DifficultyController');
	Route::resource('group', 'GroupController');
	Route::resource('accommodation', 'AccommodationController');
	Route::resource('meals', 'MealController');
	Route::resource('season', 'SeasonController');
	Route::resource('regions', 'RegionController');
	Route::resource('includes', 'IncludedController');
	Route::resource('excludes', 'ExcludedController');
	Route::resource('tour-category', 'TourCategoryController');

//Carousel management
	Route::resource('carousel', 'CarouselController');
	Route::get('carousel/{id}/publish', 'CarouselController@publish')->name('carousel.publish');
	Route::get('carousel/{id}/unpublish', 'CarouselController@unpublish')->name('carousel.unpublish');	

//Media management
	Route::resource('media', 'MediaController');
	Route::get('media/delete-unwanted/{name?}', 'MediaController@clearUnwanted')->name('media.clearUnwanted');

//Page management
	Route::resource('pages','PageController');
	Route::get('page/{id}/publish','PageController@publish')->name('page.publish');
	Route::get('page/{id}/unpublish','PageController@unpublish')->name('page.unpublish');

//Site attributes
	Route::resource('announcement','AnnouncementController');
	Route::resource('partner', 'PartnerController');
	Route::resource('setting', 'SettingController');

	//Event controller
	Route::resource('/events','EventController');
	//Team Controller
	Route::resource('/team', 'TeamController');
	//Member Controller
	Route::resource('/position', 'MemberController');
});
Route::name('frontend-')->group(function () {
	Route::get('/','GetController@index');
	Route::post('/contact','PostController@postContact')->name('postContact');
	Route::post('/quickEnquiry','PostController@quickEnquiry')->name('postEnquiry');
	Route::get('/whats-on','FrontendController@eventCalender')->name('eventCalender');
});
Route::get('/', 'FrontendController@getIndex');
Route::get('/about', 'FrontendController@getAbout');
Route::get('/contact', 'FrontendController@getContact');
Route::get('/product','FrontendController@getProduct');
Route::get('/category','FrontendController@getCategory');

Route::get('/show-insta','GetController@showInsta')->name('show.Insta');
Route::get('/fetch-insta','GetController@fetchInsta');


Route::get('/review','FrontendController@getReview');
Route::get('/bookingform','FrontendController@getBookingform');

Route::get('/bookingstep1','FrontendController@getBookingstep1');

Route::get('/slideshow','FrontendController@getSlideshow');

Route::prefix('trip')->group(function () {
	Route::get('{category}/{slug}','FrontendController@productDetail')->name('product.single');
	Route::get('/{category}','GetController@fetchByCategory')->name('fetchByCategory');
});

