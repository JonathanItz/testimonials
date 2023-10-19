<?php

namespace App\Livewire\Boards;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\Attributes\Locked;

class Form extends Component
{
    #[Locked]
    public $boardId;

    public $fullName, $company, $jobPosition, $testimonial, $email;
    public bool $termsOfService;

    public function submit() {
        $this->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'jobPosition' => ['nullable', 'string', 'max:255'],
            'testimonial' => ['required', 'string', 'max:5000'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'termsOfService' => ['required', 'accepted'],
        ]);

        $testimonail = Testimonial::create([
            'board_id' => $this->boardId,
            'full_name' => $this->fullName,
            'company' => $this->company,
            'job_position' => $this->jobPosition,
            'testimonial' => $this->testimonial,
            'email' => $this->email,
            'tos_agreement' => true,
        ]);

        $this->js('nextStep(2)');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.boards.form');
    }
}
