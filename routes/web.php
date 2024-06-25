<?php

use App\Http\Controllers\CrudController;
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

// Route::get('/crud/create', function () {
//     return view('crud/create');
// });



Route::controller(CrudController::class)->group(function () {
    Route::get('/', [CrudController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [CrudController::class, 'dashboard'])->name('dashboard');
    Route::get('/crud/create', [CrudController::class, 'create'])->name('crud.create');
    Route::get('/crud/data', [CrudController::class, 'index'])->name('crud.data');
    Route::get('/create', [CrudController::class, 'store'])->name('data');
    Route::get('/crud/{crud}/edit', [CrudController::class, 'edit'])->name('crud.edit');
    Route::put('/crud/{crud}', [CrudController::class, 'update'])->name('crud.update');
    Route::delete('/crud/{crud}', [CrudController::class, 'destroy'])->name('crud.destroy');
});

