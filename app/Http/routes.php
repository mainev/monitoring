<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

//use App\Task;
use App\stock_card;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {

    //Route::get('/', 'StockcardController@index');
    //Route::resource('stockcards', 'StockcardController');

  
    Route::get('/', function () {
        return view('stockcard');
    });


  
    
    /**
     * REST Controllers
     */
    Route::group(array('prefix' => 'api'), function()
    {
          Route::resource('stockcards', 'StockcardController@stockcards');
    
    });
    
});
