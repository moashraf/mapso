<?php
Route::get('/', 'landingPageController@home');
Route::get('/main', 'sitesettingsController@home');
Route::resource('facebook', 'facebookController');
Route::resource('Projects', 'ProjectsController');
Route::any('/search', 'SearchController@search');
Route::post('/Subscribe', 'SubscribeController@Subscribe');
Route::get('/CSR', 'CSRController@CSR');
Route::get('/AboutUs', 'AboutUsController@AboutUs');
Route::get('/Services', 'ServicesController@Services');
Route::get('/ContactUs', 'ContactUsController@home');
Route::get('/TESTIMONIALS', 'TESTIMONIALSController@home');
Route::get('/References', 'boatsController@References');
Route::get('/Boats', 'boatsController@home');
Route::get('/filters/{id}', 'boatsController@filters');
Route::get('/SingleBoat/{id}', 'boatsController@get1');
Route::get('/SingleBoat_cat/{cat}', 'boatsController@getcat');
Route::get('/Propulsion', 'propulsionController@home');
Route::get('/BRANDS', 'brandController@home');
Route::get('/allnews', 'newsController@getallnews');
Route::get('/Singlenews/{id}', 'newsController@home');
/*********************     ************ admin   *******************    admin   ****************/
Auth::routes();
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function ()
{
    Route::get('profile', 'adminController@Sitesettings');
    Route::resource('admin_Projects', 'admin_Projects');
    Route::resource('admin_Vessels', 'AdminVesselscontroller');
    Route::resource('admin_news', 'AdminNewsController');
    Route::resource('admin_Brand', 'admin_Brand_Controller');
    Route::resource('admin_Boats_cat', 'admin_catt_boatsController');
    Route::resource('admin_Contact_Us', 'admin_ContactUs_Controller');
    Route::resource('admin_Services', 'admin_ServicesController');
    Route::resource('admin_subscribe', 'admin_SubscribeController');
    Route::resource('admin_testimonial', 'admin_testimonialController');
    /*******************************  user  admin *******************************************/
    Route::post('sendemail', 'SendMailController@sendMail');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::post('destroy_auth/{id}', 'Auth\RegisterController@destroy');
    Route::get('auth/register1', ['as' => 'register1', 'uses' => 'Auth\RegisterController@in']);
    Route::get('All_auth', ['as' => 'All_auth', 'uses' => 'Auth\RegisterController@All_auth']);

});

