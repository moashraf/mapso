<?php

  Route::resource('Projects','ProjectsController');
  Route::post('sendemail', 'SendMailController@sendMail');
 Route::any('/search', 'SearchController@search')  ;
 Route::post('/Subscribe', 'SubscribeController@Subscribe')  ;
 Route::get('/filters/{id}', 'boatsController@filters')  ;
 Route::get('/CSR', 'CSRController@CSR')  ;
 Route::get('/AboutUs', 'AboutUsController@AboutUs')  ;
  Route::get('/Services', 'ServicesController@Services')  ;
 Route::get('/SingleBoat/{id}', 'boatsController@get1')  ;
   Route::get('/SingleBoat_cat/{cat}', 'boatsController@getcat')  ;
 Route::get('/ContactUs', 'ContactUsController@home')  ;
 Route::get('/TESTIMONIALS', 'TESTIMONIALSController@home')  ;
 Route::get('/References', 'boatsController@References')  ;
Route::get('/Boats', 'boatsController@home')  ;
Route::get('/Propulsion', 'propulsionController@home')  ;
Route::get('/BRANDS', 'brandController@home')  ;
Route::get('/', 'landingPageController@home')  ;
Route::get('/allnews', 'newsController@getallnews')  ;
Route::get('/Singlenews/{id}', 'newsController@home')  ;
 Route::get('/main', 'sitesettingsController@home')  ;
 Route::get('/addsitesettings', 'sitesettingsController@addsitesettings')  ;
    /*********************     ************ admin   *******************       ****************/
 Auth::routes();
  
     /*************************** Projects   admin ***********************************************/

         Route::group(['middleware'=>'auth'], function(){


 Route::get('profile', 'adminController@Sitesettings') ;
Route::resource('admin_Projects','admin_Projects');
/*************************** Vessels admin ***********************************************/
Route::get('All_Vessels', 'adminController@All_Vessels') ;
Route::get('add_Vessels', 'adminController@add_Vessels') ;
Route::post('add_Vessels_save', 'adminController@add_Vessels_save') ;
Route::get('update_Vessels/{id}', 'adminController@update_Vessels') ;
Route::post('update_Vessels_save/{id}', 'adminController@update_Vessels_save') ;
Route::post('destroy/{id}', 'adminController@destroy') ;
     /******************************* news admin *******************************************/
Route::get('All_news', 'admin_news_Controller@All_news') ; 
Route::get('add_news', 'admin_news_Controller@add_news') ;
Route::post('add_news_save', 'admin_news_Controller@add_news_save') ;
Route::post('destroy_news/{id}', 'admin_news_Controller@destroy') ;
Route::get('update_news/{id}', 'admin_news_Controller@update_News') ;
Route::post('update_news_save/{id}', 'admin_news_Controller@update_news_save') ;
   /*******************************  Brand  admin  *******************************************/
Route::get('All_Brand', 'admin_Brand_Controller@All_Brand') ;
Route::get('add_Brand', 'admin_Brand_Controller@add_Brand') ;
Route::post('add_Brand_save', 'admin_Brand_Controller@add_Brand_save') ;
Route::post('destroy_Brand/{id}', 'admin_Brand_Controller@destroy') ;
     /******************************* ContactUs  admin *******************************************/
Route::get('All_Contact_Us', 'admin_ContactUs_Controller@All_Contact_Us') ;
Route::get('add_Contact_Us', 'admin_ContactUs_Controller@add_Contact_Us') ;
Route::post('add_Contact_Us_save', 'admin_ContactUs_Controller@add_Contact_Us_save') ;
Route::post('destroy_Contact_Us/{id}', 'admin_ContactUs_Controller@destroy') ; 
     /*******************************  Services  admin *******************************************/
Route::get('All_Services', 'admin_ServicesController@All_Services') ;
Route::get('add_Services', 'admin_ServicesController@add_Services') ;
Route::post('add_Services_save', 'admin_ServicesController@add_Services_save') ;
Route::post('destroy_Services/{id}', 'admin_ServicesController@destroy') ;
Route::get('update_Services/{id}', 'admin_ServicesController@update_Services') ;
Route::post('update_Services_save/{id}', 'admin_ServicesController@update_Services_save') ;
    /******************************* About   admin *******************************************/
Route::get('All_About_Us', 'admin_AboutUsController@All_About_Us') ;
Route::get('add_About_Us', 'admin_AboutUsController@add_About_Us') ;
Route::post('add_About_Us_save', 'admin_AboutUsController@add_About_Us_save') ;
Route::post('destroy_About_Us/{id}', 'admin_AboutUsController@destroy') ; 

    /******************************* Boats cat   admin *******************************************/
Route::get('All_Boats_cat', 'admin_catt_boatsController@All_Boats_cat') ;
Route::get('add_Boats_cat', 'admin_catt_boatsController@add_Boats_cat') ;
Route::post('add_Boats_cat_save', 'admin_catt_boatsController@add_Boats_cat_save') ;
Route::post('destroy_Boats_cat/{id}', 'admin_catt_boatsController@destroy') ; 

    /******************************* subscribe  admin *******************************************/
Route::get('All_subscribe', 'admin_SubscribeController@All_subscribe') ;
Route::get('add_subscribe', 'admin_SubscribeController@add_subscribe') ;
Route::post('add_subscribe_save', 'admin_SubscribeController@add_subscribe_save') ;
Route::post('destroy_subscribe/{id}', 'admin_SubscribeController@destroy') ; 

    /******************************* testimonial  admin *******************************************/
Route::get('All_testimonial', 'admin_testimonialController@All_testimonial') ;
Route::get('add_testimonial', 'admin_testimonialController@add_testimonial') ;
Route::post('add_testimonial_save', 'admin_testimonialController@add_testimonial_save') ;
Route::post('destroy_testimonial/{id}', 'admin_testimonialController@destroy') ; 
Route::get('update_testimonial/{id}', 'admin_testimonialController@update_testimonial') ;
Route::post('update_testimonial_save/{id}', 'admin_testimonialController@update_testimonial_save');


 /*******************************  user  admin *******************************************/

Route::post('destroy_auth/{id}', 'Auth\RegisterController@destroy') ; 
Route::get('auth/register1', ['as' => 'register1', 'uses' => 'Auth\RegisterController@in']) ;
Route::get('All_auth', ['as' => 'All_auth', 'uses' => 'Auth\RegisterController@All_auth']) ;



 });

