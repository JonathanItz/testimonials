<?php

namespace App\Livewire\Testimonials;

use Livewire\Component;

class Edit extends Component
{
    public $testimonialModal;

    public $fullName, $website, $jobPosition, $testimonial, $email;


    public function mount() {
        $this->fullName = $this->testimonialModal->full_name;
    }

    public function render()
    {
        return view('livewire.testimonials.edit');
    }
}
