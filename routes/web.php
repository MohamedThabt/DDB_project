<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// PROFILE ROUTES
Route::prefix('profile')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });    
});

// COURSE ROUTES
Route::prefix('courses')->group(function () {
    // Public routes
    Route::get('/',[CourseController::class,'index'])->name('course.index');
    Route::get('/search',[CourseController::class,'search'])->name('course.search');
    Route::get('/{course}',[CourseController::class,'show'])->name('course.show'); 
    
    // Protected routes (require authentication)
    Route::middleware('auth')->group(function () {
    Route::get('/create',[CourseController::class,'create'])->name('course.create');
    Route::post('/',[CourseController::class,'store'])->name('course.store');
    Route::get('/{course}/edit',[CourseController::class,'edit'])->name('course.edit');
    Route::patch('/{course}',[CourseController::class,'update'])->name('course.update');
    Route::delete('/{course}',[CourseController::class,'destroy'])->name('course.destroy');
    });
});

// todo  apply middleware to the routes that only admin can access
//USER ROUTES && only admin can access these routes 
Route::prefix('users')->group(function () {
    Route::middleware('auth')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('user.index');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/',[UserController::class,'store'])->name('user.store');
    Route::get('/{user}/edit',[UserController::class,'edit'])->name('user.edit');
    Route::patch('/{user}',[UserController::class,'update'])->name('user.update');
    Route::delete('/{user}',[UserController::class,'destroy'])->name('user.destroy');
    Route::get('/{user}',[UserController::class,'show'])->name('user.show'); 
    Route::get('/search',[UserController::class,'search'])->name('user.search');
    });
});

// Coming Soon
Route::get('/coming-soon', function () {
    return view('coming_soon.underconstruction');
})->name('coming-soon');

// TODO authenticate it for only admins
// Admin analytics
Route::get('/analytics', [UserController::class, 'userAnalytics'])->name('analytics');
Route::get('analytics/courses', [CourseController::class, 'adminViewCourses'])->name('courses.analytics');




require __DIR__.'/auth.php';
