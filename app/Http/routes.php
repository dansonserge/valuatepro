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

//Employer Routes
Route::get('cmp/signupview',array('as'=>'cmp/signupview','uses'=>'CompanyController@getSignupview'));
Route::controller('cmp','CompanyController');
Route::get('projectdescview/{id}',array('as'=>'projectdescview/{id}','uses'=>'CompanyController@getProjectdescview'));
Route::get('executivesummaryview/{id}',array('as'=>'executivesummaryview/{id}','uses'=>'CompanyController@getExecutivesummaryview'));
Route::get('propertydetailsview/{id}',array('as'=>'propertydetailsview/{id}','uses'=>'CompanyController@getPropertydetailsview'));
Route::get('situationlocationview/{id}',array('as'=>'situationlocationview/{id}','uses'=>'CompanyController@getSituationlocationview'));
Route::get('constructioncompositionview/{id}',array('as'=>'constructioncompositionview/{id}','uses'=>'CompanyController@getConstructioncompositionview'));
Route::get('pictureuploadview/{id}',array('as'=>'pictureuploadview/{id}','uses'=>'CompanyController@getPictureuploadview'));
Route::post('uploadpicture',array('as'=>'uploadpicture','uses'=>'CompanyController@postPictureupload'));
Route::controller('cmpp','EmployerProjectController');

//Employee Routes

Route::get('eprojectdescview/{id}',array('as'=>'projectdescview/{id}','uses'=>'EmployeeController@getProjectdescview'));
Route::get('eexecutivesummaryview/{id}',array('as'=>'executivesummaryview/{id}','uses'=>'EmployeeController@getExecutivesummaryview'));
Route::get('epropertydetailsview/{id}',array('as'=>'propertydetailsview/{id}','uses'=>'EmployeeController@getPropertydetailsview'));
Route::get('esituationlocationview/{id}',array('as'=>'situationlocationview/{id}','uses'=>'EmployeeController@getSituationlocationview'));
Route::get('econstructioncompositionview/{id}',array('as'=>'constructioncompositionview/{id}','uses'=>'EmployeeController@getConstructioncompositionview'));
Route::get('epictureuploadview/{id}',array('as'=>'pictureuploadview/{id}','uses'=>'EmployeeController@getPictureuploadview'));
Route::post('euploadpicture',array('as'=>'uploadpicture','uses'=>'EmployeeController@postPictureupload'));

Route::controller('emp','EmployeeController');
Route::controller('empp','EmployeeProjectController');