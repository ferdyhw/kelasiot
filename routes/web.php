<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
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

/*
 ================================================================================
                                   Route Main
 ================================================================================
 */
# View Main
Route::get('/', [MainController::class, 'index'])->middleware('guest');

/*
 ================================================================================
                              Route Authentication
 ================================================================================
 */
# View & Post SignUp
Route::get('/signup', [AuthContoller::class, 'indexSignup'])->middleware('guest');
Route::post('/proses-signup', [AuthContoller::class, 'signup'])->middleware('guest');
# View & Post Login
Route::get('/login', [AuthContoller::class, 'indexLogin'])->name('login')->middleware('login');
Route::post('/proses-login', [AuthContoller::class, 'login']);
# Post Logout
Route::post('/proses-logout', [AuthContoller::class, 'logout'])->middleware('auth');

/*
 ================================================================================
                            Route Welcome & Dashboard
 ================================================================================
 */
# View Welcome
Route::get('/welcome', [DashboardController::class, 'welcome'])->middleware('auth');
# View Dashboard Admin
Route::get('/dashboard-admin', [DashboardController::class, 'dashboardAdmin'])->middleware('admin');

/*
 ================================================================================
                                Route CRUD Users
 ================================================================================
 */
# View user admin
Route::get('/admin-active', [DashboardController::class, 'adminActive'])->middleware('super.admin');
Route::get('/admin-nonactive', [DashboardController::class, 'adminNonActive'])->middleware('super.admin');
# View user Member
Route::get('/member-active', [DashboardController::class, 'memberActive'])->middleware('admin');
Route::get('/member-nonactive', [DashboardController::class, 'memberNonActive'])->middleware('admin');
# Post users
Route::post('/proses-active', [DashboardController::class, 'prosesActive'])->middleware('admin');
Route::post('/proses-nonactive', [DashboardController::class, 'prosesNonActive'])->middleware('admin');

/*
 ================================================================================
                               Route CRUD Dashboard
 ================================================================================
 */
# Route CRUD Account
Route::post('/edit-profile-admin', [UserController::class, 'editProfileAdmin'])->middleware('admin');
Route::post('/edit-password-admin', [UserController::class, 'editPasswordAdmin'])->middleware('admin');
# View & Post CRUD Features Basic
Route::get('/basic', [DashboardController::class, 'basic'])->middleware('admin');
Route::get('/basic/active', [DashboardController::class, 'basicActive'])->middleware('admin');
Route::get('/basic/non-active', [DashboardController::class, 'basicNonActive'])->middleware('admin');
Route::post('/insert-basic', [DashboardController::class, 'insertBasic'])->middleware('admin');
Route::post('/update-basic', [DashboardController::class, 'updateBasic'])->middleware('admin');
Route::post('/delete-basic', [DashboardController::class, 'deleteBasic'])->middleware('admin');
# View & Post CRUD Features Project
Route::get('/project', [DashboardController::class, 'project'])->middleware('admin');
Route::get('/project/active', [DashboardController::class, 'projectActive'])->middleware('admin');
Route::get('/project/non-active', [DashboardController::class, 'projectNonActive'])->middleware('admin');
Route::post('/insert-project', [DashboardController::class, 'insertProject'])->middleware('admin');
Route::post('/update-project', [DashboardController::class, 'updateProject'])->middleware('admin');
Route::post('/delete-project', [DashboardController::class, 'deleteProject'])->middleware('admin');
# View & Post CRUD Features Quiz
Route::get('/quiz', [DashboardController::class, 'quiz'])->middleware('admin');
Route::get('/quiz/active', [DashboardController::class, 'quizActive'])->middleware('admin');
Route::get('/quiz/non-active', [DashboardController::class, 'quizNonActive'])->middleware('admin');
Route::post('/insert-quiz', [DashboardController::class, 'insertQuiz'])->middleware('admin');
Route::post('/update-quiz', [DashboardController::class, 'updateQuiz'])->middleware('admin');
Route::post('/delete-quiz', [DashboardController::class, 'deleteQuiz'])->middleware('admin');
# View & Post CRUD Features Component
Route::get('/component', [DashboardController::class, 'component'])->middleware('admin');
Route::get('/component/active', [DashboardController::class, 'componentActive'])->middleware('admin');
Route::get('/component/non-active', [DashboardController::class, 'componentNonActive'])->middleware('admin');
Route::post('/insert-component', [DashboardController::class, 'insertComponent'])->middleware('admin');
Route::post('/update-component', [DashboardController::class, 'updateComponent'])->middleware('admin');
Route::post('/delete-component', [DashboardController::class, 'deleteComponent'])->middleware('admin');
# Route CRUD Comments
Route::get('/comment', [DashboardController::class, 'comment'])->middleware('super.admin');
Route::post('/delete-comment', [DashboardController::class, 'deleteComment'])->middleware('super.admin');
# View & Post CRUD Feature Question
Route::get('/quiz/question/{post:id}', [DashboardController::class, 'question'])->middleware('admin');
Route::post('/insert-question/{post:id}', [DashboardController::class, 'insertQuestion'])->middleware('admin');
Route::post('/update-question/{post:id}', [DashboardController::class, 'updateQuestion'])->middleware('admin');
Route::post('/delete-question/{post:id}', [DashboardController::class, 'deleteQuestion'])->middleware('admin');
# View & Post CRUD Feature Gallery
Route::get('/component/gallery/{post:id}', [DashboardController::class, 'gallery'])->middleware('admin');
Route::post('/insert-gallery/{post:id}', [DashboardController::class, 'insertGallery'])->middleware('admin');
Route::post('/update-gallery/{post:id}', [DashboardController::class, 'updateGallery'])->middleware('admin');
Route::post('/delete-gallery/{post:id}', [DashboardController::class, 'deleteGallery'])->middleware('admin');
