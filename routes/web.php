<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/',function(){

    return view('auth.login');
});

// ->middleware('can:manage-users')
Route::middleware('manager')->prefix('manager')->name('manager.')->group(function(){
    Route::any('/', function () {
        return view('admin.base');
    });
    Route::resource('project', 'ProjectController');
    Route::resource('category', 'CategoryController');
    Route::resource('project.images', 'ProjectImageController');
    Route::resource('alexandra', 'AlexandrainfoController');
    Route::resource('contacts', 'ContactController');
    Route::resource('logo', 'LogoController');
    Route::resource('review', 'ReviewController');
    Route::resource('fbPosts' ,'FacebookController');
    Route::resource('consultations' ,'ConsultationController');
    Route::resource('user' ,'AllUsersController');
    Route::resource('quizzes' , 'QuizController');
    Route::resource('quizzes.images' , 'QuizImageController');
    Route::resource('analytics' ,'AnalyticsController');
    Route::resource('AdminOrder' , 'OrderAdminController');
    Route::get('users/{users}/order', 'OrderAdminController@updateOrder')->name('order');
    
});//manager routes

Route::middleware('user')->group(function(){

    Route::resource('profile', 'OrderController');
    Route::resource('chat', 'ChatController');


});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('quiz', 'QuizController');


Route::resource('project.images', 'ProjectImageController');
Route::post('/contact','ConsultationController@send');
// Route::post('/quizContact','QuizControllerSendingMail@sendEmail');
Route::get('/','UserController@index');
Route::get('view/{id}', 'UserController@view')->name('project.view');



