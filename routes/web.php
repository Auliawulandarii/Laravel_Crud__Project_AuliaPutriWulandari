<?php

use Illuminate\Support\Facades\Route;
use App\Models\Students;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardClassController;
use App\Http\Controllers\DashboardMuridController;





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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return ('Hello World!');
});

Route::get('/home', function () {
    return view ('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view ('about',  [
        "title" => "about",
        "nama" => "Aulia Putri Wulandari",
        "email" => "Aulia1203@gmail.com",
        "kelas" => "11 pplg 1",
        "foto" => "img/profile.jpeg"
    ]);
});

Route::get('/student/all', [StudentsController:: class, 'index']);

Route::get('/extracurricular', [ExtracurricularController:: class, 'index']);
Route::get('/student/detail/{student}', [StudentsController:: class, 'show2']);
Route::get('/student/create', [StudentsController:: class, 'create']);
Route::post('/student/add', [StudentsController::class, 'store']);
Route::delete('/student/delete/{id}', [StudentsController::class, 'destroy'])->name('student.destroy');
Route::get('/student/edit/{id}', [StudentsController::class, 'edit'])->name('student.edit');
Route::post('/student/update/{student}', [StudentsController::class, 'update'])->name('student.update');
Route::get('/kelas', [KelasController::class, 'index3'])->name('kelas.index3');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/{id}/update', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('/kelas/{id}/destroy', [KelasController::class, 'destroy'])->name('kelas.destroy');
Route::get('/kelas/add', [KelasController::class, 'addForm'])->name('kelas.addForm');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->Middleware('guest');
Route::get('/login', [LoginController::class, "loginV"])-> name("login")->Middleware('guest'); ;
Route::post('/login', [LoginController::class, "loginR"])-> name("loginR"); ;

Route::get('/signup', [RegisterController::class, "signupV"])-> name("signup");
Route::post('/signup', [RegisterController::class, 'signupR'])->name('signupR');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::group(["prefix" => "/dashboard"], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name("dashboard");
})->middleware('auth');

Route::group(["prefix" => "/class"], function () {
    Route::get('/class', [DashboardClassController::class, 'index3'])->name('kelas.index3');
    Route::get('/class/create', [DashboardClassController::class, 'create'])->middleware('auth');
    Route::post('/class/store', [DashboardClassController::class, 'store'])->middleware('auth');
    Route::get('/class/add', [DashboardClassController::class, 'addForm'])->name('kelas.addForm')->middleware('auth');

    Route::get('/class/{id}/edit', [DashboardClassController::class, 'edit'])->name('kelas.edit')->middleware('auth');
    Route::post('/class/{id}/update', [DashboardClassController::class, 'update'])->middleware('auth');
    Route::delete('/class/{id}/destroy', [DashboardClassController::class, 'destroy'])->middleware('auth');
});

Route::group(["prefix" => "/murid"], function () {
    Route::get('/students/all', [DashboardMuridController::class, 'index'])->name('dashboard.students.index');
    Route::get('/students/{student}', [DashboardMuridController::class, 'show'])->name('dashboard.students.show');
    Route::get('/students/create', [DashboardMuridController::class, 'create'])->name('dashboard.students.create');
    Route::post('/students/store', [DashboardMuridController::class, 'store'])->name('dashboard.students.store');
    Route::delete('/students/{id}/destroy', [DashboardMuridController::class, 'destroy'])->name('dashboard.students.destroy');
    Route::get('/students/{id}/edit', [DashboardMuridController::class, 'edit'])->name('dashboard.students.edit');
    Route::put('/students/{student}/update', [DashboardMuridController::class, 'update'])->name('dashboard.students.update');
});

Route::get('/murid/detail/{student}', [StudentsController:: class, 'show']);




