<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'API\Admin', 'prefix' => 'menus'], function () {
    Route::get('getAllMenus', 'AdminMenuController@getAllMenus');
});
Route::group(['namespace' => 'API', 'prefix' => 'modules'], function () {
    Route::get('getAllModules', 'ModuleController@getAllModules');
});

Route::group(['namespace' => 'API', 'prefix' => 'modules'], function () {
    Route::post('getModules', 'ModuleController@getModules');
});

Route::group(['namespace' => 'API', 'prefix' => 'sub_menus'], function () {
    Route::post('getSubMenus', 'SubMenuController@getSubMenus');
    Route::get('getAllSubMenus', 'SubMenuController@getAllSubMenus');
});

Route::group(['namespace' => 'API', 'prefix' => 'posts'], function () {
    Route::post('getAllPosts', 'PostController@getAllposts');
});

Route::group(['namespace' => 'API', 'prefix' => 'data_uploadings'], function () {
    Route::post('getDataWithSubMenu', 'DataUploadingController@getDataWithSubMenu');
    Route::post('getDataWithoutSubMenu', 'DataUploadingController@getDataWithoutSubMenu');
});

Route::group(['namespace' => 'API', 'prefix' => 'about'], function () {
    Route::get('getAboutUs', 'AboutUsController@getAboutUs');
});

Route::group(['namespace' => 'API', 'prefix' => 'social_links'], function () {
    Route::get('getSocialLinks', 'SocialLinkController@getSocialLinks');
});

Route::group(['namespace' => 'API', 'prefix' => 'search'], function () {
    Route::post('getResults', 'SearchController@getResults');
});

Route::group(['namespace' => 'API', 'prefix' => 'feedback'], function () {
    Route::post('feedback', 'FeedbackController@feedback');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['namespace' => 'API\Auth', 'prefix' => 'user'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');

});

Route::group(['namespace' => 'API\Admin', 'prefix' => 'user', 'middleware' => 'auth.jwt'], function () {

    Route::get('getSubAdmins', 'AdminController@getSubAdmins');
    Route::post('createSubAdmin', 'AdminController@createSubAdmin');
    Route::post('editSubAdmin', 'AdminController@editSubAdmin');
    Route::post('deleteSubAdmin', 'AdminController@deleteSubAdmin');

    Route::get('getManagers', 'ManagerController@getManagers');
    Route::post('createManager', 'ManagerController@createManager');
    Route::post('editManager', 'ManagerController@editManager');
    Route::post('deleteManager', 'ManagerController@deleteManager');

    Route::get('getEditors', 'EditorController@getEditors');
    Route::post('createEditor', 'EditorController@createEditor');
    Route::post('editEditor', 'EditorController@editEditor');
    Route::post('deleteEditor', 'EditorController@deleteEditor');

    Route::post('editAboutUs', 'AdminAboutUsController@editAboutUs');


    Route::post('createModule', 'AdminModuleController@createModule');
    Route::post('editModule', 'AdminModuleController@editModule');
    Route::post('deleteModule', 'AdminModuleController@deleteModule');


    Route::post('createSubMenu', 'AdminSubMenuController@createSubMenu');
    Route::post('editSubMenu', 'AdminSubMenuController@editSubMenu');
    Route::post('deleteSubMenu', 'AdminSubMenuController@deleteSubMenu');
});

Route::group(['namespace' => 'API\Admin', 'prefix' => 'youtube', 'middleware' => 'auth.jwt'], function () {

    Route::get('getYoutubeLink', 'AdminYoutubeLinksController@getYoutubeLink');
    Route::post('createYoutubeLink', 'AdminYoutubeLinksController@createYoutubeLink');
    Route::post('editYoutubeLink', 'AdminYoutubeLinksController@editYoutubeLink');
    Route::post('deleteYoutubeLink', 'AdminYoutubeLinksController@deleteYoutubeLink');
});

Route::group(['namespace' => 'API\Admin', 'prefix' => 'youtube', 'middleware' => 'auth.jwt'], function () {

    Route::get('getYoutubeLink', 'AdminYoutubeLinksController@getYoutubeLink');
    Route::post('createYoutubeLink', 'AdminYoutubeLinksController@createYoutubeLink');
    Route::post('editYoutubeLink', 'AdminYoutubeLinksController@editYoutubeLink');
    Route::post('deleteYoutubeLink', 'AdminYoutubeLinksController@deleteYoutubeLink');
});


