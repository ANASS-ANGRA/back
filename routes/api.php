<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("type_appliance","TypeController@type_all");
Route::post("ajouter_appliance","ApplianceController@ajouter");
Route::get("appliances","ApplianceController@tous_appliance");
Route::get('delete_appliance/{id}',"ApplianceController@delet_appliance" );

Route::post("new_client","ClientController@new_client");
Route::get("clients","ClientController@clients")
