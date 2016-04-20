<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('index');
});

Route::get('confirmation', ['as' => 'confirmation', function() {
    return View::make('confirmation');
}]);

// temporary refer-a-friend confirmation page (app/views/refer-confirmation.blade.php)
// TODO: add params function so there is only one confirmation redirect
Route::get('refer-confirmation', ['as' => 'refer-confirmation', function() {
    return View::make('refer-confirmation');
}]);

Route::get('blog', ['as' => 'blog', function(){
    return View::make('blog');
}]);

Route::get('privacy-policy', ['as' => 'privacy-policy', function() {
    return View::make('privacy-policy');
}]);

Route::get('home', ['as' => 'home', function() {
    return View::make('index');
}]);

Route::get('faq', ['as' => 'faq', function() {
  return View::make('faq');
}]);
