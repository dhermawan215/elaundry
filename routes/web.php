<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrackingController;
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

Route::get('/', [HomeController::class, 'index'])->name('user.index');
Route::get('/tracking', [TrackingController::class, 'index'])->name('user.track');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//user admin edit akun
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//route admin
Route::prefix('admin')->middleware(['auth', 'verified', 'isadmin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    //master item route
    Route::get('/master-item', [MasterItemController::class, 'index'])->name('admin.master_item');
    Route::post('/master-items', [MasterItemController::class, 'masterItemData']);
    Route::post('/master-item', [MasterItemController::class, 'store']);
    Route::patch('/master-item/{item}', [MasterItemController::class, 'update']);
    Route::delete('/master-item/{item}', [MasterItemController::class, 'destroy']);
});
// Route::get('/admindash', [AdminController::class, 'index'])->name('admin.index');



//route web landing page

require __DIR__ . '/auth.php';
