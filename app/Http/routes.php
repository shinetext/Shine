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

// confirmation page (app/views/confirmation.blade.php)
Route::get('confirmation', array('as' => 'confirmation', function(){
    return View::make('confirmation');
}));
