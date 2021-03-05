<?php

use Carbon\Carbon;
use App\Models\User;
use App\Mail\SendMailJob;
use App\Notifications\TaskCompleted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;


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
             
             $user = User::find(1);
             //User::find(1)->notify(new TaskCompleted);
              Notification::send($user, new TaskCompleted);


            // Notification::route('mail', 'taylor@example.com')
            //  ->notify(new TaskCompleted);


    return view('welcome');
});


Route::get('markAsRead',function(){

  auth()->user()->unreadNotifications->markAsRead();
  return redirect()->back();

})->name('markAsRead');

Auth::routes(['verify'=> true]);

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/user', 'App\Http\Controllers\MainController@index')->name('user');
Route::get('user/create', 'App\Http\Controllers\MainController@create')->name('user.create')->middleware(['role:Admin|User']);
Route::post('user/store', 'App\Http\Controllers\MainController@store')->name('user.store');
Route::get('user/edit/{id}', 'App\Http\Controllers\MainController@edit')->name('user.edit')->middleware(['role:Admin']);
Route::get('user/view/{id}', 'App\Http\Controllers\MainController@view')->name('user.view');
Route::put('user/update/{user}', 'App\Http\Controllers\MainController@update')->name('user.update')->middleware(['role:Admin']);
Route::get('user/delete/{id}', 'App\Http\Controllers\MainController@delete')->name('user.delete')->middleware(['role:Admin']);

Route::get('/dynamic_pdf', 'App\Http\Controllers\DynamicPDFController@index');
Route::get('/dynamic_pdf/pdf', 'App\Http\Controllers\DynamicPDFController@pdf');

Route::post('/search', 'App\Http\Controllers\MainController@search')->name('search');


Route::post('projects/importProject', 'App\Http\Controllers\MainController@importProject')->name('importProject');


Route::get('/sendEmail','App\Http\Controllers\MailController@sendEmail')->name('sendEmail');


Route::get('/CarCategory','App\Http\Controllers\CarCategoryController@index')->name('CarCategory');
Route::get('/CarCategory/create','App\Http\Controllers\CarCategoryController@create')->name('CarCategory.create');
Route::post('/CarCategory/store','App\Http\Controllers\CarCategoryController@store')->name('CarCategory.store');
Route::get('/CarCategory/view/{id}','App\Http\Controllers\CarCategoryController@view')->name('CarCategory.view');
Route::get('/CarCategory/edit/{id}','App\Http\Controllers\CarCategoryController@edit')->name('CarCategory.edit');
Route::put('/CarCategory/update/{id}','App\Http\Controllers\CarCategoryController@update')->name('CarCategory.update');
Route::get('/CarCategory/delete/{id}','App\Http\Controllers\CarCategoryController@delete')->name('CarCategory.delete');
Route::get('/CarCategory/sendMessage','App\Http\Controllers\CarCategoryController@sendMessage');
Route::get('/CarCategory/eventTask','App\Http\Controllers\CarCategoryController@eventTask');
Route::get('/Main/eventTask','App\Http\Controllers\MainController@eventTask');


// Route::get('/softDelete','App\Http\Controllers\Auth\LoginController@softDelete');




// for job  task related mail send


Route::get('JobSendMail',function(){

  $job = (new SendEmailJob())
                        ->delay(Carbon::now()->addSecond(10));


    dispatch($job);

    return "Email send Properly";


});