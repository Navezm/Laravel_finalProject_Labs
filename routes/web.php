<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServicesController;
use App\Models\Carrousel;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Introduction;
use App\Models\Logo;
use App\Models\Map;
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
    return view('welcome',compact('resources', 'introductions', 'contacts', 'placeholders', 'carrousels', 'stands', 'newsletters', 'services', 'users', 'testimonials', 'witnesses', 'footers', 'logo', 'navs', 'teams'));
});

// Route Function
Route::get('/postsFilter/{id}', [BlogController::class,'filter']);

// Route Resource
Route::resource('services', ServicesController::class);
Route::resource('blog', BlogController::class);
Route::resource('post', PostController::class);
Route::resource('contact', ContactController::class);

// Facade Auth + AdminLTE
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
