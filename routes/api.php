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
Route::get("applience/{id}","ApplianceController@appliance");
Route::get("recherche_appliance/{appliance}/{client}","ApplianceController@recherche_appliance");
Route::get("pdf/{id}" ,"ApplianceController@pdf_detail");
Route::post("edit" ,"ApplianceController@edit");

Route::post("new_client","ClientController@new_client");
Route::get("clients","ClientController@clients");
Route::get("delet_client/{id}","ClientController@delete_client");
Route::get("client_contact/{id}","ClientController@client_contact");
Route::post("edit_client" ,"ClientController@edit");


Route::post("ajouter_pov","PovController@ajouter_pov");
Route::get("povs","PovController@all_pov");
Route::get("delete_pov/{id}","PovController@delet_pov");
Route::get("detail_pov/{id}","PovController@info_pov");
Route::post("/pov_edit","PovController@edit");
