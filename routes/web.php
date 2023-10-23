<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Home;
use App\Http\Controllers\Users;
use App\Http\Controllers\Biodata;
use App\Http\Controllers\Select;
use App\Http\Controllers\Admin;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome', ['users' => DB::table('users')->get()]);
// });

Route::get('/', [Home::class, 'index']);
Route::post('register', [Users::class, 'register_submit'])->name('register');
Route::post('actionlogin', [Users::class, 'login_submit'])->name('actionlogin');
Route::post('actionlogout', [Users::class, 'actionlogout'])->name('actionlogout');
Route::get('/login', [Users::class, 'login'])->name('login');
Route::get('/profile', [Biodata::class, 'profile']);
Route::get('/profile/process', [Biodata::class, 'profile_submit']);
Route::post('/profile/add_pendidikan', [Biodata::class, 'add_pendidikan']); 
Route::post('/profile/add_pekerjaan', [Biodata::class, 'add_pekerjaan']); 
Route::post('/profile/save_biodata', [Biodata::class, 'save_biodata']);
Route::post('/profile/save_avatar', [Biodata::class, 'save_avatar']);
Route::group(['middleware' => ['auth']], function () { 
});

// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

//Admin
Route::get('/admin', [Admin::class, 'index'])->name('admin');
Route::post('/admin/save_job', [Admin::class, 'save_job']);
Route::get('/admin/pelamar', [Admin::class, 'index']);

//SELECT
Route::post('/select/prov', [Select::class, 'prov']);
Route::post('/select/kab/{id}', [Select::class, 'kab']);
Route::post('/select/kec/{id}', [Select::class, 'kec']);
Route::post('/select/kel/{id}', [Select::class, 'kel']);
Route::post('/select/kawin', [Select::class, 'kawin']);
Route::post('/select/sekolah', [Select::class, 'sekolah']);
Route::post('/select/agama', [Select::class, 'agama']);
Route::post('/select/kelamin', [Select::class, 'kelamin']);
Route::post('/select/lokasi', [Select::class, 'lokasi']);