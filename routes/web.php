<?php

use App\Models\Board;
use App\Models\Testimonial;
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

Route::view('/', 'welcome')
    ->name('home');

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

    $testimonails = $board->testimonials()->where('status', 'accepted')->orderBy('created_at', 'desc')->get();

    return view('boards.board', [
        'testimonails' => $testimonails
    ]);
})
->name('board');

Route::get('/form/{unique_id}/{slug}', function($id, $slug) {
    $board = Board::where('unique_id', $id)
        ->where('slug', $slug)
        ->firstOrFail();

    return view('boards.form', [
        'boardId' => $board->id
    ]);
})
->name('board.form');

Route::get('/testimonial/edit/{testimonial:id}', function(Testimonial $testimonial) {
    $board = $testimonial->board()->first();
    $user = auth()->user();
    $userId = $user->id;

    if($userId !== $board->id) {
        return abort(404);
    }

    return view('testimonials.edit', [
        'testimonial' => $testimonial
    ]);
})
->middleware(['auth'])
->name('testimonial.edit');

require __DIR__.'/auth.php';
