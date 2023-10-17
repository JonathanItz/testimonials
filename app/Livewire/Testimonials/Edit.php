<?php

namespace App\Livewire\Testimonials;

use Livewire\Attributes\Locked;
use Livewire\Component;

class Edit extends Component
{

    #[Locked]
    public $testimonialModal;

    public $fullName, $website, $jobPosition, $testimonial, $email, $status, $gravitarUrl, $initialUrl, $avatar;


    public function mount() {
        $this->fullName = $this->testimonialModal->full_name;
        $this->website = $this->testimonialModal->website;
        $this->jobPosition = $this->testimonialModal->job_position;
        $this->testimonial = $this->testimonialModal->testimonial;
        $this->email = $this->testimonialModal->email;
        $this->status = $this->testimonialModal->status;

        $emailHash = md5($this->email);

        $this->initialUrl = "https://ui-avatars.com/api/?name=$this->fullName";
        $this->gravitarUrl = "https://www.gravatar.com/avatar/$emailHash";

        if($this->testimonialModal->image_to_use) {
            $this->avatar = $this->testimonialModal->image_to_use;
        } else {
            $this->avatar = $this->initialUrl;
        }
    }

    public function submit() {
        dd($this);
    }

    public function render()
    {
        return view('livewire.testimonials.edit');
    }
}
