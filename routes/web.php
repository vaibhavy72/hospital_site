<?php

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

// Route::view('/', 'welcome');
Route::view('/', 'frontend.home');
Route::view('about', 'frontend.about');
Route::view('contact', 'frontend.contact');
//services
Route::view('services', 'frontend.services');
Route::view('services/{slug}', 'frontend.service-profile');
//departments
Route::view('departments', 'frontend.departments');
Route::view('departments/{slug}', 'frontend.department-profile');
//doctors
Route::view('doctors', 'frontend.doctors');
Route::view('doctors/{slug}', 'frontend.doctor-profile');
//appointment
Route::view('appointment', 'frontend.appointment');
//blogs
Route::view('blogs', 'frontend.blogs');
Route::view('blogs/{slug}', 'frontend.blog-profile');
//gallery
Route::view('gallery', 'frontend.gallery');
//faqs
Route::view('faqs', 'frontend.faqs');
//terms
Route::view('terms', 'frontend.terms');
//privacy
Route::view('privacy', 'frontend.privacy');
//404
Route::view('404', 'frontend.404');


//admin
Route::view('dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'admin.profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
