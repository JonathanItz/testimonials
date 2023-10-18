<?php

namespace App\Livewire;

use App\Models\Board;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public $name;

    public $slug;

    public $uniqueId;

    public $total = 0;

    public $accepted = 0;

    public $pending = 0;

    public $status;

    public function render()
    {
        $user = auth()?->user();

        $board = Board::where('user_id', $user->id)->first();
        $testimonialsModal = $board->testimonials()->orderBy('created_at', 'desc');
        $testimonials = $testimonialsModal->get();

        if($this->status) {
            $testimonialsModal->where('status', $this->status);
        }

        $testimonialsPagination = $testimonialsModal->paginate(1);
        // $testimonials = $board->testimonials->sortDesc();

        $accepted = $testimonials->filter(fn($testimonial) => $testimonial->status === 'accepted');
        $pending = $testimonials->filter(fn($testimonial) => $testimonial->status === 'pending');
        
        $this->name = $board->name;
        $this->slug = $board->slug;
        $this->uniqueId = $board->unique_id;
        $this->total = $testimonials->count();
        $this->accepted = $accepted->count();
        $this->pending = $pending->count();

        return view('livewire.dashboard', [
            'testimonials' => $testimonialsPagination
        ]);
    }
}
