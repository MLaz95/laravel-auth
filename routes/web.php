<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
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

Route::redirect('/', '/projects');
Route::resource('projects', ProjectController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth', 'verified'])
//         ->name('admin.')
//         ->prefix('admin')
//         ->group(function() {
//             // qui ci metto tutte le rotte che voglio che siano:
//                 // raggruppate sotto lo stesso middelware
//                 // i loro nomi inizino tutti con "admin.
//                 // tutti i loro url inizino con "admin/"
                
//             Route::get('/', [ProjectController::class, 'index'])->name('index');
//         }
// );

require __DIR__.'/auth.php';
