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
//home
Route::view('/', 'frontend.home');
//about
Route::view('about', 'frontend.about')->name('about');
//contact
Route::view('contact', 'frontend.contact')->name('contact');
//services
Route::view('services', 'frontend.services')->name('services');
Route::view('services/{slug}', 'frontend.service-profile')->name('service-profile');
//departments
Route::view('departments', 'frontend.departments')->name('departments');
Route::view('departments/{slug}', 'frontend.department-profile')->name('department-profile');
//doctors
Route::view('doctors', 'frontend.doctors')->name('doctors');
Route::view('doctors/{slug}', 'frontend.doctor-profile')->name('doctor-profile');
//appointment
Route::view('appointment', 'frontend.appointment')->name('appointment');
//blogs
Route::view('blogs', 'frontend.blogs')->name('blogs');
Route::view('blogs/{slug}', 'frontend.blog-profile')->name('blog-profile');
//gallery
Route::view('gallery', 'frontend.gallery')->name('gallery');
//faqs
Route::view('faqs', 'frontend.faqs')->name('faqs');
//terms
Route::view('terms', 'frontend.terms')->name('terms');
//privacy
Route::view('privacy', 'frontend.privacy')->name('privacy');
//404
Route::view('404', 'frontend.404')->name('404');


//admin
Route::view('dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'admin.profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
