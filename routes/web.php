<?php

use App\Http\Controllers\authContoller;
use App\Http\Controllers\viewController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [viewController::class, 'home'])->name('home');
Route::get('/firststep', [viewController::class, 'signup'])->name('firststep');
Route::post('/createprofile', [authContoller::class, 'createprofile']);
Route::get('confirmation/{code}', [viewController::class, 'confirmation']);
// Route::get('/login', [viewController::class, 'login'])->name('login');
// Route::post('/login', [authContoller::class, 'login']);
Route::post('/check', [viewController::class, 'check']);
Route::get('/accommodation', [viewController::class, 'accommodation']);
Route::post('/accommdate', [viewController::class, 'accommdate']);
Route::get('/checkaccommodation/{id}', [viewController::class, 'checkaccommodation']);
Route::get('/traveldetails', [viewController::class, 'travel']);
Route::post('/travelin', [viewController::class, 'travelin']);
Route::post('/adminlogin',  [authContoller::class, 'adminlogin']);
Route::get('/adminlogin', [viewController::class, 'adminloginview'])->name('adminloginview');

Route::group(['middleware' => ['adminmiddlee:admin']], function () {
Route::get('/admindashboard', [viewController::class, 'admindashboard'])->name('admindashboard');
Route::get('/registrants', [viewController::class, 'Registrants']);
Route::get('/hotel', [viewController::class, 'hotel']);
Route::get('/adminhotel', [viewController::class, 'adminhotel'])->name('adminhotel');
Route::get('/admintravels', [viewController::class, 'admintravels'])->name('admintravels');
Route::get('/admintravel', [viewController::class, 'admintravel']);
Route::get('/logout', [viewController::class, 'logout'])->name('logout');
});
