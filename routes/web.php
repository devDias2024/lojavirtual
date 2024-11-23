<?php
use App\http\Controllers\Backend\AdminController;
use App\http\Controllers\Backend\VendorController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//ROTA PAINEL ADMINISTRATIVO
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth','admin')
->name('admin.dashboard');

//ROTA PAINEL VENDEDOR
Route::get('vendor/dashboard', [VendorController::class, 'dashboard'])->middleware(['auth', 'vendor'])
->name('vendor.dashboard');
