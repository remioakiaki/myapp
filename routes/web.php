<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\BelongingController;
use App\Http\Controllers\RecordController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Route::group(['prefix' => '/record'], function () {
//     Route::get('/', [RecordController::class, 'index'])->name('record.index');
//     Route::get('/welcome', [RecordController::class, 'welcome'])->name('record.welcome');
//     // Route::get('show/{id}', [RecordController::class, 'show'])->name('record.show');
//     // Route::get('edit/{id}', [RecordController::class, 'edit'])->name('record.edit');
//     Route::get('create', [RecordController::class, 'create'])->name('record.create');
//     Route::post('store', [RecordController::class, 'store'])->name('record.store');
//     // Route::post('update/{id}', [RecordController::class, 'update'])->name('record.update');
//     // Route::post('delete/{id}', [RecordController::class, 'delete'])->name('record.delete');
// });

Route::group(['prefix' => '/group'], function () {
    Route::get('/', [GroupController::class, 'index'])->name('group.index');
    Route::get('/welcome', [GroupController::class, 'welcome'])->name('group.welcome');
    // Route::get('show/{id}', [GroupController::class, 'show'])->name('group.show');
    // Route::get('edit/{id}', [GroupController::class, 'edit'])->name('group.edit');
    Route::get('create', [GroupController::class, 'create'])->name('group.create');
    Route::post('store', [GroupController::class, 'store'])->name('group.store');
    // Route::post('update/{id}', [GroupController::class, 'update'])->name('group.update');
    // Route::post('delete/{id}', [GroupController::class, 'delete'])->name('group.delete');
});

Route::group(['prefix' => '/belonging'], function () {
    Route::post('/attach/{user_id}/{group_id}', [BelongingController::class, 'attach'])->name('belonging.attach');
    Route::get('/detach', [BelongingController::class, 'detach'])->name('belonging.detach');
});

Route::group(['prefix' => '/record'], function () {
    Route::get('/', [RecordController::class, 'index'])->name('record.index');
    Route::get('/welcome', [RecordController::class, 'welcome'])->name('record.welcome');
    // Route::get('show/{id}', [RecordController::class, 'show'])->name('record.show');
    // Route::get('edit/{id}', [RecordController::class, 'edit'])->name('record.edit');
    Route::get('create', [RecordController::class, 'create'])->name('record.create');
    Route::post('store', [RecordController::class, 'store'])->name('record.store');
    // Route::post('update/{id}', [RecordController::class, 'update'])->name('record.update');
    // Route::post('delete/{id}', [RecordController::class, 'delete'])->name('record.delete');
});
