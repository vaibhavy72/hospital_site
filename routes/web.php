<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DoctorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the 'web' middleware group. Make something great!
|
*/

// Route::view( '/', 'welcome' );
//home
Route::view( '/', 'frontend.home' );
//about
Route::view( 'about', 'frontend.about' )->name( 'about' );
//contact
Route::view( 'contact', 'frontend.contact' )->name( 'contact' );
//services
Route::view( 'services', 'frontend.services' )->name( 'services' );
Route::view( 'services/{slug}', 'frontend.service-profile' )->name( 'service-profile' );
//departments
Route::view( 'departments', 'frontend.departments' )->name( 'departments' );
Route::view( 'departments/{slug}', 'frontend.department-profile' )->name( 'department-profile' );
//doctors
Route::view( 'doctors', 'frontend.doctors' )->name( 'doctors' );
Route::view( 'doctors/{slug}', 'frontend.doctor-profile' )->name( 'doctor-profile' );
//appointment
Route::view( 'appointment', 'frontend.appointment' )->name( 'appointment' );
//blogs
Route::view( 'blogs', 'frontend.blogs' )->name( 'blogs' );
Route::view( 'blogs/{slug}', 'frontend.blog-profile' )->name( 'blog-profile' );
//gallery
Route::view( 'gallery', 'frontend.gallery' )->name( 'gallery' );
//faqs
Route::view( 'faqs', 'frontend.faqs' )->name( 'faqs' );
//terms
Route::view( 'terms', 'frontend.terms' )->name( 'terms' );
//privacy
Route::view( 'privacy', 'frontend.privacy' )->name( 'privacy' );
//404
Route::view( '404', 'frontend.404' )->name( '404' );

//admin
Route::group( [ 'prefix' => '/admin' ], function () {
    Route::view( 'dashboard', 'admin.dashboard' )->middleware( [ 'auth', 'verified' ] )->name( 'dashboard' );

    Route::view( 'profile', 'admin.profile' )->middleware( [ 'auth' ] )->name( 'profile' );

    Route::get('users', [UserController::class, 'index'])->middleware(['auth'])->name('users');
    //edit
    Route::get('users/edit/{id}', [UserController::class, 'edit'])->middleware(['auth'])->name('users.edit');



    Route::get('doctors', [DoctorController::class, 'index'])->middleware(['auth'])->name('doctors');
    //create
    Route::get('doctors/create', [DoctorController::class, 'create'])->middleware(['auth'])->name('doctors.create');
    //edit
    Route::get('doctors/edit/{id}', [DoctorController::class, 'edit'])->middleware(['auth'])->name('doctors.edit');

    Route::post('/admin/doctors', [DoctorController::class, 'store'])->name('admin.doctors.store');

    Route::view( 'roles', 'admin.roles' )->middleware( [ 'auth' ] )->name( 'roles' );

    Route::view( 'permissions', 'admin.permissions' )->middleware( [ 'auth' ] )->name( 'permissions' );

    // Route::view( 'doctors', 'admin.doctors' )->middleware( [ 'auth' ] )->name( 'doctors' );
});
require __DIR__.'/auth.php';
