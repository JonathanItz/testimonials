<?php

namespace App\Livewire;

use App\Models\Board;
use Livewire\Component;

class Dashboard extends Component
{
    public $name;

    public $slug;

    public function mount() {
        $user = auth()?->user();

        $board = Board::where('user_id', $user->id)->first();
        
        $this->name = $board->name;
        $this->slug = $board->slug;
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
