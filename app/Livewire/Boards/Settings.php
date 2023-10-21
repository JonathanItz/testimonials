<?php

namespace App\Livewire\Boards;

use Livewire\Component;
use Livewire\Attributes\Locked;

class Settings extends Component
{
    #[Locked]
    public $board;

    public $company;

    public $testimonialLimit = 1000;

    public function mount() {
        $board = $this->board;

        $this->company = $board->name;

        
        if(isset($board?->settings['testimonials']['limit'])) {
            $this->testimonialLimit = $board?->settings['testimonials']['limit'];
        }
    }

    public function render()
    {
        return view('livewire.boards.settings');
    }
}
