<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contacts/{contact}', 'ContactsController@show');
Route::post('/contacts','ContactsController@store');
Route::patch('/contacts/{contact}','ContactsController@update');
Route::delete('/contacts/{contact}','ContactsController@destroy');