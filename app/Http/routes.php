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
        $default_menu = "1";
        return view('stockcard', ['selected_menu' => $default_menu]);
    });
    
     Route::get('/drafts', function () {
        return view('for_approval', ['selected_menu' => "2"]);
    });
    
     Route::get('/user_activity', function () {
        return view('user_activity', ['selected_menu' => "3"]);
    });



  
    
    /**
     * REST Controllers
     */
    Route::group(array('prefix' => 'api'), function()
    {
          Route::resource('stockcards', 'StockcardController@stockcards');
          Route::get('get_drafts', ['uses' =>'StockcardController@get_drafts']);
          Route::get('get_users', ['uses' =>'UserController@get_users']);
          Route::get('Stockcard/user_activity', ['uses' => 'StockcardController@user_activity']);
    
    });
    
});
