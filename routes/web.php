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

Auth::routes();

Route::get('/home', 'ToDoController@index')->name('home');


Route::resource('modules','ModuleController');

Route::resource('sub_menus','SubMenuController');

Route::resource('data_uploadings','DatauploadingController');
Route::get('createwithoutsubmenu', 'DatauploadingController@createwithoutsubmenu')->name('createwithoutsubmenu');
Route::get('editwithoutsubmenu/{data_uploading}/edit', 'DatauploadingController@editwithoutsubmenu')->name('editwithoutsubmenu');

Route::resource('posts','PostController');

Route::resource('admins','AdminController');

Route::resource('managers','ManagerController');

Route::resource('editors','EditorController');

Route::resource('about_us','AboutUsController');

Route::resource('social_links','SocialLinkController');

Route::get('feedback/changeStatus/{feedback}','FeedbackController@changeStatus')->name('feedbacks.changeStatus');
Route::resource('feedbacks','FeedbackController');

Route::get('todo/changeStatus/{todo}','ToDoController@changeStatus')->name('todos.changeStatus');
Route::resource('todos','toDoController');

Route::get('profile', 'ProfileController@index')->name('profile');
Route::get('profile/edit', ['uses' => 'ProfileController@edit', 'as' => 'profile.edit']);
Route::post('profile/update', ['uses' => 'ProfileController@update', 'as' => 'profile.update']);


