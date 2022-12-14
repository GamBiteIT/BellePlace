<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentaireController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', [PostController::class,'index'])->middleware(['auth', 'verified','role:user'])->name('dashboard');
Route::get('/partner/dashboard', function () {
    return Inertia::render('Partner/Dashboard');
})->middleware(['auth', 'verified','role:partner'])->name('partner.dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::middleware('auth','verified','role:user')->group(function () {


Route::get('/post/create/',[PostController::class,'create'])->middleware(['auth','verified'])->name('poster');


Route::post('/poster',[PostController::class,'store'])->middleware(['auth','verified'])->name('poster.create');


Route::get('/post/{post}/edit/',[PostController::class,'edit'])->middleware(['auth','verified'])->name('poster.edit');
Route::put('/post/{post}/update/',[PostController::class,'update'])->middleware(['auth','verified'])->name('post.update');
Route::delete('/post/{post}',[PostController::class,'destroy'])->middleware(['auth','verified'])->name('post.delete');

//// Commentaires //////////////////////////////////






});
Route::post('/post/comm',[CommentaireController::class,'store'])->middleware(['auth','verified'])->name('commentaires.create');
Route::get('/post/{post}',[PostController::class,'show'])->middleware(['auth','verified'])->name('post.show');



Route::middleware('auth','verified','role:partner')->group(function(){

    Route::get('/partner/create',[PartnerController::class,'create']);
Route::post('/partner/create',[PartnerController::class,'store'])->name('partner.create');
Route::get('partner/profile/{partner}/',[PartnerController::class,'show'])->name('partner.profile');
Route::get('partner/profile/{partner}/edit',[PartnerController::class,'edit'])->name('partner.profile.edit');
Route::put('partner/profile/{partner}/update',[PartnerController::class,'update'])->name('partner.profile.update');



Route::get('/offer',[OfferController::class,'create'])->name('offer')->middleware('auth');
Route::post('/offer/create',[OfferController::class,'store'])->name('offers.create');

Route::get('/offer/{offer}/edit/',[OfferController::class,'edit'])->name('offer.edit');
Route::put('/offer/{offer}/update',[OfferController::class,'update'])->name('offer.update');
Route::delete('/offer/{offer}',[OfferController::class,'destroy'])->name('offer.delete');

});

require __DIR__.'/auth.php';
Route::get('/offer/{offer}',[OfferController::class,'show'])->name('offer.show')->middleware('role:user');


Route::get('/img/{path}',[ImagesController::class,'show'])->where('path', '.*')
->name('image');



require __DIR__.'/auth.php';


//     Profile //////////
// Route::get('profile/{user}/',[ProfileController::class,'create'])->name('profile.user')->middleware(['auth','verified']);
// Route::put('profile/{user}/update', [ProfileController::class, 'update'])
//     ->name('users.update')
//     ->middleware(['auth','verified']);


// Posts ////

















// Image Route


// Route::get('/img/{path}',[ImagesController::class,'show'])->where('path', '.*')
// ->name('image');