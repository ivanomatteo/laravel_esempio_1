<?php

use App\Http\Controllers\PostResourceController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\UserApiResourceController;
use App\Http\Controllers\UserResourceController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('welcome');
    /* //return ['message'=>'ciao'];
    //return response()->json(['message' => 'ciao'], 200, []);

    $request = request();

    $request->cookie('pippo', 'non c\'è');
    $arg = $request->input('arg');


    return Response::json(['message' => $arg], 200, []); */
});


Route::get('/sample', [SampleController::class, 'sample']);

//Route::resource('user', UserResourceController::class);
//Route::apiResource('user', UserApiResourceController::class);


Route::apiResource('posts', PostResourceController::class);