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
	Route::resource('/users', 'UsersControllers');
//   Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
//   Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
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
	//Instagram Feeds
	Route::resource('/instagram', 'InstaController');
	//Blog Post Category
	Route::resource('/post-category', 'PostCategoryController');
	Route::resource('/blog-post', 'BlogPostController');
	Route::get('blog-post/{id}/publish','BlogPostController@publish')->name('blog-post.publish');
	Route::get('blog-post/{id}/unpublish','BlogPostController@unpublish')->name('blog-post.unpublish');
});

Route::name('frontend.')->group(function () {
	Route::get('/', 'NewController@getIndex');
	Route::get('/whats-on', 'NewController@getEvents')->name('whatsOn');
	Route::get('/who-we-are', 'NewController@getAbout')->name('about');
	Route::get('/travel-blog', 'NewController@getPosts')->name('posts');
	Route::get('/contact', 'NewController@getContact')->name('contact');

	Route::prefix('what-we-do')->group(function () {
		Route::get('/', 'NewController@getCategories')->name('weDo');
		Route::get('/{category}', 'NewController@byCategory')->name('byCategory');
	});

	Route::prefix('where-we-go')->group(function () {
		Route::get('/', 'NewController@getRegions')->name('where');
		Route::get('/{category}', 'NewController@byRegion')->name('byRegion');
	});

	Route::prefix('trip')->group(function () {
		Route::get('{slug}','NewController@tripDetail')->name('tripDetail');
		Route::post('{slug}/book','NewController@tripBook')->name('tripBook');
		Route::post('{slug}/complete','PostController@bookingComplete')->name('bookingComplete');
		Route::get('{slug}/thank-you','NewController@thankYou')->name('thankYou');
		Route::get('download/{slug}','NewController@downloadPDF')->name('download');
	});
	//Travel Style
	Route::prefix('travel-style')->group(function () {
		Route::get('{slug}','NewController@fetchByCategory')->name('fetchByCategory');
		Route::get('{category}/{region}','NewController@region2package')->name('region2package');
	});
	//Destinations
	Route::prefix('destination')->group(function () {
		Route::get('{slug}','NewController@fetchByregion')->name('fetchByRegion');
		Route::get('{destionation}/{category}','NewController@destination2package')->name('destionation2package');
	});
	
	//Post Requests
	Route::post('/contact','PostController@postContact')->name('postContact');
	Route::post('/quickEnquiry','PostController@quickEnquiry')->name('postEnquiry');
	Route::post('brochure-request','PostController@requestBroucher')->name('brochure');
	Route::post('refer-a-friend','PostController@referFriend')->name('referFriend');

	Route::prefix('ajax')->group(function () {
		Route::get('fetch-departures','NewController@ajaxsearchdeparture')->name('departure');
		// Route::post('brochure-request','PostController@requestBroucher')->name('brochure');
	});

	Route::get('/travel-blog','NewController@travelBlog')->name('travelBlog');
	Route::get('/travel-blog/{slug}','NewController@singlePost')->name('singlePost');

	Route::get('/sitemap', 'NewController@getSitemap')->name('sitemap');
	Route::get('/press', 'NewController@getPartner')->name('press');
		
});

Route::name('page.')->group(function () {
	Route::get('/{slug}','NewController@getPage')->name('getPage');
});
