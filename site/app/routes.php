<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return 'hi';
});
Route::get('users', function()
{
	return 'Users!';
});
//Skills
Route::get(		'skills', 			array('as'=>'skills', 			'uses'=>'SkillsController@getIndex'));
Route::get(		'skill/{id}', 		array('as'=>'skill', 			'uses'=>'SkillsController@getSkill'));
Route::get(		'skills/new', 		array('as'=>'new_skill', 		'uses'=>'SkillsController@getNew'));
Route::post(	'skills/new', 		array('as'=>'create_skill', 	'uses'=>'SkillsController@postNew'));
Route::delete(	'skills/destroy', 	array('as'=>'delete_skill', 	'uses'=>'SkillsController@deleteSkill'));
Route::get(		'badges', 			array('as'=>'badges', 			'uses'=>'SkillsController@getBadges'));

//Skill Types
Route::get(		'skilltypes', 			array('as'=>'skilltypes', 			'uses'=>'SkillTypesController@getIndex'));
Route::get(		'skilltype/{id}', 		array('as'=>'skilltype', 			'uses'=>'SkillTypesController@getSkillType'));
Route::get(		'skilltypes/new', 		array('as'=>'new_skilltype', 		'uses'=>'SkillTypesController@getNew'));
Route::post(	'skilltypes/new', 		array('as'=>'create_skilltype', 	'uses'=>'SkillTypesController@postNew'));
Route::delete(	'skilltypess/destroy', 	array('as'=>'delete_skilltype', 	'uses'=>'SkillTypesController@deleteSkill'));

//Admin
Route::get('admin', array('as'=>'admin', 'uses'=>'AdminController@getIndex'))->before('admin');

//Login
Route::get('login', 'LoginController@getLogin')->before('guest');
Route::post('login', 'LoginController@postLogin')->before('guest');
Route::get('logout', 'LoginController@getLogout')->before('auth');

//profiles
Route::get('profile/{id}', 		array('as'=> 'profile' , 'uses' => 'ProfileController@getProfile'));
Route::get('profile/{id}/about', 		array('as'=> 'profile_about' , 'uses' => 'ProfileController@getEditAbout'))->before('auth');
Route::get('profile/{id}/skills', 		array('as'=> 'profile_skills' , 'uses' => 'ProfileController@getEditSkills'))->before('auth');
Route::post('profile/{id}/about', 		array('as'=> 'profile_edit_about' , 'uses' => 'ProfileController@postEditAbout'))->before('auth');
Route::post('profile/{id}/skills', 		array('as'=> 'profile_edit_skills' , 'uses' => 'ProfileController@postEditSkills'))->before('auth');

