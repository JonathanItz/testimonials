<?php

use App\Models\Board;
use App\Models\Testimonial;
use Illuminate\Http\Request;
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

Route::view('/terms', 'terms')
    ->name('terms');

// Route::get('create-board', function() {
//     return view('boards/create');
// })
// ->middleware(['auth'])
// ->name('board.create');

Route::middleware(['notSubscribed'])->group(function () {
    Route::get('/board/{slug}', function($slug, Request $request) {
        $board = Board::where('slug', $slug)
            ->firstOrFail();
    
        $testimonails = $board->testimonials()
            ->where('status', 'accepted')
            ->orderBy('created_at', 'desc')
            ->limit($request->get('maxTestimonials'))
            ->get();
    
        $logoUrl = '';
        $logo = $board->getFirstMedia('companylogo');
        if($logo) {
            $logoUrl = $board->getFirstMedia('companylogo')->getFullUrl();
        }
    
        $websiteUrl = '';
        if(isset($board?->settings['website']) && $board?->settings['website']) {
            $websiteUrl = 'https://'.$board?->settings['website'];
        }
    
        $testimonialSettings = $board?->settings['testimonials'];

        $border = 'border';
        if(isset($testimonialSettings['border'])) {
            $border = $testimonialSettings['border'];
        }

        $borderColor = '#e5e7eb';
        if(isset($testimonialSettings['borderColor'])) {
            $borderColor = $testimonialSettings['borderColor'];
        }

        $radius = 'rounded-xl';
        if(isset($testimonialSettings['radius'])) {
            $radius = $testimonialSettings['radius'];
        }

        $shadow = 'shadow-md';
        if(isset($testimonialSettings['shadow'])) {
            $shadow = $testimonialSettings['shadow'];
        }
    
        return view('boards.board', [
            'name' => $board->name,
            'slug' => $board->slug,
            'testimonails' => $testimonails,
            'logoUrl' => $logoUrl,
            'websiteUrl' => $websiteUrl,
            'radius' => $radius,
            'shadow' => $shadow,
            'border' => $border,
            'borderColor' => $borderColor,
        ]);
    })
    ->name('board');
    
    Route::get('/iframe/{slug}', function($slug, Request $request) {
        $board = Board::where('slug', $slug)
            ->firstOrFail();
    
        $testimonails = $board->testimonials()
            ->where('status', 'accepted')
            ->orderBy('created_at', 'desc')
            ->limit($request->get('maxTestimonials'))
            ->get();
        $isIframe = true;

        $testimonialSettings = $board?->settings['testimonials'];

        $border = 'border';
        if(isset($testimonialSettings['border'])) {
            $border = $testimonialSettings['border'];
        }

        $borderColor = '#e5e7eb';
        if(isset($testimonialSettings['borderColor'])) {
            $borderColor = $testimonialSettings['borderColor'];
        }

        $radius = 'rounded-xl';
        if(isset($testimonialSettings['radius'])) {
            $radius = $testimonialSettings['radius'];
        }

        $shadow = 'shadow-md';
        if(isset($testimonialSettings['shadow'])) {
            $shadow = $testimonialSettings['shadow'];
        }
    
        return view('boards.iframe', [
            'slug' => $board->slug,
            'testimonails' => $testimonails,
            'isIframe' => $isIframe,
            'radius' => $radius,
            'shadow' => $shadow,
            'border' => $border,
            'borderColor' => $borderColor,
        ]);
    })
    ->name('board.iframe');
});

Route::get('/form/{slug}', function($slug) {
    $board = Board::where('slug', $slug)
        ->firstOrFail();

    $logoUrl = '';
    $logo = $board->getFirstMedia('companylogo');
    if($logo) {
        $logoUrl = $board->getFirstMedia('companylogo')->getFullUrl();
    }

    $websiteUrl = '';
    if(isset($board?->settings['website']) && $board?->settings['website']) {
        $websiteUrl = 'https://'.$board?->settings['website'];
    }

    $limit = 1000;
    if(isset($board?->settings['testimonials']['limit']) && $board?->settings['testimonials']['limit']) {
        $limit = +$board?->settings['testimonials']['limit'];
    }

    return view('boards.form', [
        'boardId' => $board->id,
        'logoUrl' => $logoUrl,
        'websiteUrl' => $websiteUrl,
        'limit' => $limit
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

    $limit = 1000;
    if(isset($board?->settings['testimonials']['limit']) && $board?->settings['testimonials']['limit']) {
        $limit = +$board?->settings['testimonials']['limit'];
    }

    return view('testimonials.edit', [
        'testimonial' => $testimonial,
        'limit' => $limit,
    ]);
})
->middleware(['auth', 'verified'])
->name('testimonial.edit');

Route::get('/settings/{slug}', function($slug) {
    $user = auth()->user();
    $userId = $user->id;

    $board = Board::where('slug', $slug)
        ->firstOrFail();

    if($userId !== $board->user_id) {
        return abort(404);
    }

    return view('boards.settings', [
        'board' => $board
    ]);
})
->middleware(['auth', 'verified'])
->name('boards.settings');

require __DIR__.'/auth.php';
