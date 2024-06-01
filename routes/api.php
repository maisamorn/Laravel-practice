<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth1Controller;
use App\Http\Controllers\TestAuthController;



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

Route::post('/register', [Auth1Controller::class, 'register']);
Route::post('/login', [Auth1Controller::class, 'login']);

Route::resource('test', TestController::class);
Route::resource('auth', AuthController::class);

// Route::group(['middleware'=> ['auth:sanctum']], function(){
//     $request->Auth()->tokens()->delete();
//     Auth()->guard('web')->logout();
//    Route::post('/logout', [Auth1Controller::class, 'logout']);
 
// });

Route::resource('testAuth', TestAuthController::class);
