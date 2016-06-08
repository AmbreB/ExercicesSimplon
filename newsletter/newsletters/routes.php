<?php

Route::group(['middleware' => ['web']], function(){
	//
});

// Route::get('{newsletter}.html', function($newsletter){
// 	return view('newsletters::'.$newsletter);
// });

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller('newsletters', '\Newsletters\Controllers\NewslettersController');