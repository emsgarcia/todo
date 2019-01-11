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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/sample', function () {
//     return view('sample',
//     	[
//     		'name' => 'juan',
//     		'middlename' => 'dela',
//     		'surname' => 'cruz'
//     	]
//     );
// });


// Route::get('/sample', function () {
//     $fullname = [
//     		'name' => 'juan',
//     		'middlename' => 'dela',
//     		'surname' => 'cruz'
//     	];
//     return view('sample')->with('fullname', $fullname );
// });

// Route::get('/sample', function () {
//     $fullname = [
//     		'name' => 'mark',
//     		'middlename' => 'dela',
//     		'surname' => 'cruz'
//     	];

//     $helloworld = "john";
//     return view('sample', compact('fullname', 'helloworld' ));
// });

// TRANSFER ABOVE TO SAMPLE CONTROLLER AND POINT TO VIEW
// Route::get('/sample',"SampleController@greetPerson");
// Route::get('/fruits',"SampleController@nameofFruits");
Route::get('/tasklist', 'TaskController@showTask');


