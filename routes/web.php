<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;

use App\Http\Controllers\NoticeController;
use App\Http\Controllers\NewsAndEventsController;

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
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

// Design aria start
// ============================================================================================


Route::get('/about-us', function () {
    return view('website_view.about-us');
});

Route::get('/message-form-chairman', function () {
    return view('website_view.message-form-chairman');
});

Route::get('/message-form-principal', function () {
    return view('website_view.message-form-principal');
});

Route::get('/governing-body', function () {
    return view('website_view.governing-body');
});

Route::get('/approval-letter', function () {
    return view('website_view.approval-letter');
});

Route::get('/history', function () {
    return view('website_view.history');
});

Route::get('/vision-and-objectives', function () {
    return view('website_view.vision-and-objectives');
});

Route::get('/vision-and-objectives', function () {
    return view('website_view.vision-and-objectives');
});

Route::get('/activities', function () {
    return view('website_view.activities');
});

Route::get('/academic-calendar', function () {
    return view('website_view.academic-calendar');
});

Route::get('/syllabus', function () {
    return view('website_view.syllabus');
});

Route::get('/class-routine', function () {
    return view('website_view.class-routine');
});

Route::get('/lesson-plan', function () {
    return view('website_view.lesson-plan');
});

Route::get('/co-curricular-activities', function () {
    return view('website_view.co-curricular-activities');
});

Route::get('/notice', function () {
    return view('website_view.notice');
});

// shows notices on the base of url
//================================
Route::get('/notice/{notice}', NoticeController::class);
//================================

Route::get('/results', function () {
    return view('website_view.results');
});

Route::get('/teachers-info', function () {
    return view('website_view.teacher-info');
});

Route::get('/students-info', function () {
    return view('website_view.student-info');
});

Route::get('/list-of-holidays', function () {
    return view('website_view.list-of-holidays');
});

Route::get('/facilities', function () {
    return view('website_view.facilities');
});

Route::get('/downloads', function () {
    return view('website_view.downloads');
});

Route::get('/admission', function () {
    return view('website_view.admission');
});

Route::get('/news', function () {
    return view('website_view.news');
});
Route::get('/news/{news}', [NewsAndEventsController::class, 'news']);

Route::get('/events', function () {
    return view('website_view.events');
});

Route::get('/events/{event}', [NewsAndEventsController::class, 'event']);

Route::get('/gallery', function () {
    return view('website_view.gallery');
});


Route::get('/contact', function () {
    return view('website_view.contact');
});






















































// Design aria end
// ============================================================================================




// development aria Start
// ========================================================================================================================
Route::get('/', [Website::class, 'index']);










// development aria end
// ========================================================================================================================
// auth aria start
// ========================================================

Route::get('/admin', function () {
    return redirect('/dashboard');
})->middleware('auth');
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
    Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
    Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
    Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
    Route::get('/{page}', [PageController::class, 'index'])->name('page');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
