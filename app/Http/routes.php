<?php



Route::get('/', function () {
    return view('pages.home');
});




Route::group(['middleware' => ['web']], function () {
        Route::resource('flyers', 'FlyersController');
        Route::get('{zip}/{street}', 'FlyersController@show');

});
