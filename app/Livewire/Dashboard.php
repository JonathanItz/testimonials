<?php

namespace App\Livewire;

use App\Models\Board;
use Livewire\Component;

class Dashboard extends Component
{
    public $name;

    public $slug;

    public $uniqueId;

    public $total = 0;

    public $accepted = 0;

    public $pending = 0;

    public $testimonials;

    public function mount() {
        $user = auth()?->user();

        $board = Board::where('user_id', $user->id)->first();
        $testimonials = $board->testimonials->sortDesc();
        $this->testimonials = $testimonials;

        $accepted = $testimonials->filter(fn($testimonial) => $testimonial->status === 'accepted');
        $pending = $testimonials->filter(fn($testimonial) => $testimonial->status === 'pending');
        
        $this->name = $board->name;
        $this->slug = $board->slug;
        $this->uniqueId = $board->unique_id;
        $this->total = $testimonials->count();
        $this->accepted = $accepted->count();
        $this->pending = $pending->count();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
