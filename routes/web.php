<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandeeController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LandingController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ShowController;
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


Route::prefix('/admin')->middleware('auth')->group(function ()
{
    Route::get('/', [CmsController::class, 'dash']);

    // {{ User }}
    Route::get('/show_user', [UserController::class, 'show_user']);
    Route::get('/update_user/{id}', [UserController::class, 'update_user']);
    Route::post('/update_user_confirm/{id}', [UserController::class, 'update_user_confirm']);
    Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);

    // {{ Social }}
    Route::get('/show_social',[SocialController::class,'show_social']);
    Route::post('/update_social_confirm/{id}',[SocialController::class,'update_social_confirm']);
    Route::get('/update_social/{id}',[SocialController::class,'update_social']);

    // {{ Landing }}
    Route::get('/show_landing',[LandingController::class,'show_landing']);
    Route::post('/update_landing/{id}',[LandingController::class,'update_landing']);

    //{{ Partner }}
    Route::get('/show_partner', [PartnerController::class, 'show_partner']);
    Route::post('/add_partner', [PartnerController::class, 'add_partner']);
    Route::get('/delete_partner/{id}', [PartnerController::class, 'delete_partner']);

    //{{ Service }}
    Route::get('/show_service',[ServiceController::class,'show_service']);
    Route::post('/add_service',[ServiceController::class,'add_service']);
    Route::get('/update_service/{id}',[ServiceController::class,'update_service']);
    Route::post('/update_service_confirm/{id}',[ServiceController::class,'update_service_confirm']);
    Route::get('/delete_service/{id}', [ServiceController::class, 'delete_service']);

    //{{ Testimonial }}
    Route::get('/show_testimonial',[TestimonialController::class,'show_testimonial']);
    Route::post('/add_testimonial',[TestimonialController::class,'add_testimonial']);
    Route::post('update_testimonial/{id}',[TestimonialController::class,'update_testimonial']);
    Route::get('/delete_testimonial/{id}', [TestimonialController::class, 'delete_testimonial']);

    //{{ Portfolio }}
    Route::get('/show_portfolio',[PortfolioController::class,'show_portfolio']);
    Route::post('/add_portfolio',[portfolioController::class,'add_portfolio']);
    Route::post('/update_portfolio/{id}',[portfolioController::class,'update_portfolio']);
    Route::get('/delete_portfolio/{id}', [portfolioController::class, 'delete_portfolio']);

    //{{ Blog }}
    Route::get('/show_blog',[BlogController::class,'show_blog']);
    Route::post('/add_blog',[blogController::class,'add_blog']);
    Route::post('/update_blog/{id}',[blogController::class,'update_blog']);
    Route::get('/delete_blog/{id}', [blogController::class, 'delete_blog']);

    //{{ Brandee }}
    Route::get('/show_brandee',[BrandeeController::class,'show_brandee']);
    Route::post('/add_brandee',[brandeeController::class,'add_brandee']);
    Route::post('/update_brandee/{id}',[brandeeController::class,'update_brandee']);
    Route::get('/delete_brandee/{id}', [brandeeController::class, 'delete_brandee']);

    //{{ FAQ }}
    Route::get('/show_faq',[FaqController::class,'show_faq']);
    Route::post('/add_faq',[faqController::class,'add_faq']);
    Route::post('/update_faq/{id}',[faqController::class,'update_faq']);
    Route::get('/delete_faq/{id}', [faqController::class, 'delete_faq']);

    //{{ Team }}
    Route::get('/show_team',[TeamController::class,'show_team']);
    Route::post('/add_team',[teamController::class,'add_team']);
    Route::get('/update_team/{id}',[teamController::class,'update_team']);
    Route::post('/update_team_confirm/{id}',[teamController::class,'update_team_confirm']);
    Route::get('/delete_team/{id}', [teamController::class, 'delete_team']);

    //{{ Subscriber }}
    Route::get('/show_subscriber',[SubscriberController::class,'show_subscriber']);
    Route::post('/add_subscriber',[subscriberController::class,'add_subscriber']);
    Route::post('/update_subscriber/{id}',[subscriberController::class,'update_subscriber']);
    Route::get('/delete_subscriber/{id}', [subscriberController::class, 'delete_subscriber']);

    //{{ About }}
    Route::get('/show_about',[AboutController::class,'show_about']);
    Route::get('/update_about/{id}',[aboutController::class,'update_about']);
    Route::post('/update_about_confirm/{id}',[aboutController::class,'update_about_confirm']);

    //{{ Counter }}
    Route::get('/show_counter',[CounterController::class,'show_counter']);
    Route::get('/update_counter/{id}',[counterController::class,'update_counter']);
    Route::post('/update_counter_confirm/{id}',[counterController::class,'update_counter_confirm']);

    //{{ Show }}
    Route::post('/partner', [ShowController::class, 'partner']);
    Route::post('/testimonial', [ShowController::class, 'testimonial']);
    Route::post('/portfolio', [ShowController::class, 'portfolio']);
    Route::post('/blog', [ShowController::class, 'blog']);
    Route::post('/team', [ShowController::class, 'team']);
    Route::post('/faq', [ShowController::class, 'faq']);
    Route::post('/counter', [ShowController::class, 'counter']);
    Route::post('/brandee', [ShowController::class, 'brandee']);
});

Route::redirect('/', '/login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/admin');
    })->name('dashboard');
});
