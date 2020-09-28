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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('guest.index');
});

// Route::get("/formtosendpostmethod", function() {
// 	return view("guest.form");
// });

// Route::post("/testrequest", function(Request $request) {
// 	$data = ["name"=>$request->post()["name"], 
// 	"lastname"=>$request->post()["lastname"],
// 	"address"=>$request->post()["address"],
// 	"bio"=>$request->post()["bio"],
// 	"birthday"=>$request->post()["birthday"]
// 	];
// 	return view("guest.table", ["newdata"=>$data]);
// })->name("posttest");

// Route::get("/parameter/{id}", function($id) {
// 	return $id;
// });