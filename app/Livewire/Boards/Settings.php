<?php

namespace App\Livewire\Boards;

use Livewire\Component;
use Livewire\Attributes\Locked;

class Settings extends Component
{
    #[Locked]
    public $board;

    public $company, $slug;

    public $testimonialLimit = 1000;

    public function mount() {
        if(session('slug-updated')) {
            $this->showSuccess();
        }

        $board = $this->board;

        $this->company = $board->name;
        $this->slug = $board->slug;
        if(isset($board?->settings['testimonials']['limit'])) {
            $this->testimonialLimit = $board?->settings['testimonials']['limit'];
        }
    }

    public function submit() {
        $this->validate([
            'company' => ['required', 'max:255', 'string'],
            'testimonialLimit' => ['numeric', 'min:0', 'max:1000', 'nullable']
        ]);

        // $this->board->name = $this->company;
        // $this->board->settings['testimonials']['limit'] = $this->testimonialLimit;

        $this->board->update([
            'name' => $this->company,
            'settings' => [
                'testimonials' => [
                    'limit' => $this->testimonialLimit
                ]
            ]
        ]);

        // $this->board->name = $this->company;
        // $this->board->settings['testimonials']['limit'] = $this->testimonialLimit;

        // $this->board->save();

        $this->showSuccess();

        if($this->slug !== $this->board->slug) {
            session()->flash('slug-updated', true);
            return $this->redirect(route('boards.settings', [$this->board->slug]), navigate: true);
        }
    }

    public function showSuccess() {
        $this->js('
            Toastify({
                text: "Saved!",
                duration: 3000,
                close: true,
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "#66c2c8",
                    borderRadius: "0.375rem"
                },
            }).showToast();
        ');
    }

    public function render()
    {
        return view('livewire.boards.settings');
    }
}
