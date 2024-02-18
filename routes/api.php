<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
*/

Route::get('/get-about',[ApiController::class,'getAbout']);
Route::get('/get-landing',[ApiController::class,'getLanding']);
Route::get('/get-counter',[ApiController::class,'getCounter']);
Route::get('/get-testimonial',[ApiController::class,'getTestimonial']);
Route::get('/get-blog',[ApiController::class,'getBlog']);
Route::get('/get-brandee',[ApiController::class,'getBrandee']);
Route::get('/get-team',[ApiController::class,'getTeam']);
Route::get('/get-faq',[ApiController::class,'getFaq']);
Route::get('/get-subscriber',[ApiController::class,'getSubscriber']);
Route::get('/get-social',[ApiController::class,'getSocial']);
Route::get('/get-partner',[ApiController::class,'getPartner']);
Route::get('/get-service',[ApiController::class,'getService']);
Route::get('/get-portfolio',[ApiController::class,'getPortfolio']);
Route::get('/get-show',[ApiController::class,'getShow']);

Route::post('/add-subscriber',[ApiController::class,'addSubscriber']);
