<?php

use App\Models\Board;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'hasboard'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth', 'hasboard'])
    ->name('profile');

// Route::get('create-board', function() {
//     return view('boards/create');
// })
// ->middleware(['auth'])
// ->name('board.create');

Route::get('/board/{unique_id}/{slug}', function($id, $slug) {

    $board = Board::where('unique_id', $id)
        ->where('slug', $slug)
        ->firstOrFail();

    return view('boards.board');
})
->name('board');

Route::get('/form/{unique_id}/{slug}', function($id, $slug) {
    $board = Board::where('unique_id', $id)
        ->where('slug', $slug)
        ->firstOrFail();

    return view('boards.form');
})
->name('board.form');

require __DIR__.'/auth.php';
