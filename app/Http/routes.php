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

Route::get('/',array('as'=>'home','uses'=>'Home@getIndex'));
Route::get('cmp/signupview',array('as'=>'cmp/signupview','uses'=>'CompanyController@getSignupview'));

Route::controller('cmp','CompanyController');
Route::controller('emp','EmployeeController');

Route::get('projectdescview/{id}',array('as'=>'projectdescview/{id}','uses'=>'CompanyController@getProjectdescview'));

Route::get('executivesummaryview/{id}',array('as'=>'executivesummaryview/{id}','uses'=>'CompanyController@getExecutivesummaryview'));
Route::get('propertydetailsview/{id}',array('as'=>'propertydetailsview/{id}','uses'=>'CompanyController@getPropertydetailsview'));
Route::get('situationlocationview/{id}',array('as'=>'situationlocationview/{id}','uses'=>'CompanyController@getSituationlocationview'));
Route::get('constructioncompositionview/{id}',array('as'=>'constructioncompositionview/{id}','uses'=>'CompanyController@getConstructioncompositionview'));
Route::get('pictureuploadview/{id}',array('as'=>'pictureuploadview/{id}','uses'=>'CompanyController@getPictureuploadview'));
Route::post('uploadpicture',array('as'=>'uploadpicture','uses'=>'CompanyController@postPictureupload'));


Route::controller('cmpp','EmployerProjectController');
Route::controller('empp','EmployeeProjectController');

