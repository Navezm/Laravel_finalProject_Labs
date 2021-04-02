<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StandController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Models\Carrousel;
use App\Models\Contact;
use App\Models\EmailSubject;
use App\Models\Footer;
use App\Models\Introduction;
use App\Models\Logo;
use App\Models\Nav;
use App\Models\Newsletter;
use App\Models\Placeholder;
use App\Models\Resource;
use App\Models\Services;
use App\Models\Stand;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Witness;
use Illuminate\Support\Facades\Auth;
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

// Page Welcome
Route::get('/', function () {
    $resources = Resource::all();
    $introductions = Introduction::first();
    $contacts = Contact::first();
    $placeholders = Placeholder::first();
    $carrousels = Carrousel::all();
    $stands = Stand::first();
    $newsletters = Newsletter::first();
    $services = Services::first();
    $users = User::all();
    $testimonials = Testimonial::first();
    $witnesses = Witness::all();
    $footers = Footer::first();
    $logo = Logo::first();
    $navs = Nav::all();
    $teams = Team::first();
    $emailSubjects = EmailSubject::all();
    return view('welcome',compact('resources', 'introductions', 'contacts', 'placeholders', 'carrousels', 'stands', 'newsletters', 'services', 'users', 'testimonials', 'witnesses', 'footers', 'logo', 'navs', 'teams', 'emailSubjects'));
});

// Route Function
Route::get('/postsFilter/{id}', [BlogController::class,'filter']);
Route::get('/tagsFilter/{id}', [BlogController::class,'filterTag']);
Route::get('/search', [BlogController::class,'search']);
Route::get('/servicesBo', [ServicesController::class,'backoffice']);
Route::get('/contactBo', [ContactController::class,'backoffice']);

// Route Resource
Route::resource('services', ServicesController::class);
Route::resource('blog', BlogController::class);
Route::resource('post', PostController::class);
Route::resource('contact', ContactController::class);
Route::resource('categories', CategoryController::class);
Route::resource('comment', CommentController::class);
Route::resource('tags', TagController::class);
Route::resource('map', MapController::class);
Route::resource('carousel', CarrouselController::class);
Route::resource('introduction', IntroductionController::class);
Route::resource('standOut', StandController::class);
Route::resource('team', TeamController::class);
Route::resource('testimonials', TestimonialController::class);
Route::resource('resources', ResourceController::class);
Route::resource('footer', FooterController::class);
Route::resource('logo', LogoController::class);
Route::resource('jobs', JobController::class);
Route::resource('roles', RoleController::class);
Route::resource('subscribers', SubscriberController::class);
Route::resource('users', UserController::class);

// Facade Auth + AdminLTE
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
