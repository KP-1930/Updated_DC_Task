<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

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

// Route::get('test-api',function() {

//         return ['message' => 'Hello'];
// }) ;





 Route::resource('posts','App\Http\Controllers\PostController');

    





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
