<?php

namespace App\Livewire;

use App\Models\Board;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    #[Locked]
    public $board;

    public $name, $slug, $uniqueId;


    public $total, $accepted, $pending, $declined = 0;

    public $status = '';

    public function mount() {
        $user = auth()?->user();
        $this->board = Board::where('user_id', $user->id)->first();

        $this->name = $this->board->name;
        $this->slug = $this->board->slug;
        $this->uniqueId = $this->board->unique_id;
    }

    public function render()
    {
        $board = $this->board;
        $testimonialsModal = $board->testimonials()->orderBy('created_at', 'desc');
        $testimonials = $testimonialsModal->get();

        if($this->status) {
            $testimonialsModal->where('status', $this->status);
        }

        $testimonialsPagination = $testimonialsModal->paginate(10);

        $accepted = $testimonials->filter(fn($testimonial) => $testimonial->status === 'accepted');
        $pending = $testimonials->filter(fn($testimonial) => $testimonial->status === 'pending');
        $declined = $testimonials->filter(fn($testimonial) => $testimonial->status === 'declined');
        
        $this->total = $testimonials->count();
        $this->accepted = $accepted->count();
        $this->pending = $pending->count();
        $this->declined = $declined->count();

        return view('livewire.dashboard', [
            'testimonials' => $testimonialsPagination
        ]);
    }
}
