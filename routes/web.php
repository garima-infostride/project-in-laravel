<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactControler;
use App\Models\Page;

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
    return view('frontend/home');
});
Route::get('/',[BaseController::class,'home']);

Route::get('/home',[BaseController::class,'home']);

Route::get('/about',[BaseController::class,'about']);
Route::get('/courses',[BaseController::class,'courses']);
Route::get('/trainers',[BaseController::class,'trainers']);
Route::get('/events', [BaseController::class,'events']);
Route::get('/pricing',[BaseController::class,'pricing']);
Route::get('/contact',[BaseController::class,'contact']);

Route::get('/admin',[AdminController::class,'index'])->name('login');
Route::post('/admin',[AdminController::class,'makeLogin']);

Route::group(['middleware'=>'auth:admin'],function(){
Route::get('/dashboard',[AdminController::class,'dashboard']);
});

//page Create routes
Route::post('/page-create',[PageController::class,'CreatePage'])->name('page-create');
Route::get('/add-home',[PageController::class,'AddPage'])->name('add-home');
Route::get('/about-page-add',[PageController::class, 'about'])->name('about-page-add');
Route::get('/courses-page-add',[PageController::class, 'courses'])->name('courses-page-add');
Route::get('/trainers-page-add',[PageController::class, 'trainers'])->name('trainers-page-add');
Route::get('/events-page-add',[PageController::class, 'events'])->name('events-page-add');
Route::get('/pricing-page-add',[PageController::class, 'pricing'])->name('pricing-page-add');
Route::get('/contact-page-add',[PageController::class, 'contact'])->name('contact-page-add');

//post route
Route::get('/post-add', [PostController::class,'create'])->name('post-add');
Route::get('/post-show', [PostController::class,'show'])->name('post-show');

Route::post('/post-add/{post_id?}', [PostController::class,'store'])->name('post-store');
Route::get('/post-edit/{post_id?}',[PostController::class,'create'])->name('post-edit');

Route::post('/post-delete',[PostController::class,'delete'])->name('post-delete');

Route::post('/contact-add',[ContactControler::class,'contact_store'])->name('contact.store');
Route::get('/contact-show',[ContactControler::class,'show'])->name('admin.contact.show');
Route::get('/email', [ContactControler::class,'create']);