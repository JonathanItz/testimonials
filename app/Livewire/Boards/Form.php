<?php

namespace App\Livewire\Boards;

use App\Models\Testimonial;
use Livewire\Component;

class Form extends Component
{
    public $boardId;

    public string $fullName, $website, $jobPosition, $testimonial, $email;
    public bool $termsOfService;

    public function submit() {
        $this->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'website' => ['nullable', 'string', 'max:255'],
            'jobPosition' => ['nullable', 'string', 'max:255'],
            'testimonial' => ['required', 'string', 'max:5000'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'termsOfService' => ['required', 'accepted'],
        ]);

        $testimonail = Testimonial::create([
            'board_id' => $this->boardId,
            'full_name' => $this->fullName,
            'website' => $this->website,
            'job_position' => $this->jobPosition,
            'testimonial' => $this->testimonial,
            'email' => $this->email,
            'tos_agreement' => true,
        ]);

        dd($testimonail);
    }

    public function render()
    {
        return view('livewire.boards.form');
    }
}
