<?php

namespace App\Livewire\Testimonials;

use Illuminate\Validation\Rule;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Edit extends Component
{

    #[Locked]
    public $testimonialModal;

    public $fullName, $company, $jobPosition, $testimonial, $email, $status, $gravitarUrl, $initialsUrl, $avatar;


    public function mount() {
        $this->fullName = $this->testimonialModal->full_name;
        $this->company = $this->testimonialModal->company;
        $this->jobPosition = $this->testimonialModal->job_position;
        $this->testimonial = $this->testimonialModal->testimonial;
        $this->email = $this->testimonialModal->email;
        $this->status = $this->testimonialModal->status;

        $emailHash = md5($this->email);

        $fullName = rawurlencode("$this->fullName");

        $this->initialsUrl = "https://ui-avatars.com/api/?name=$fullName";
        $this->gravitarUrl = "https://www.gravatar.com/avatar/$emailHash?d=mp";

        if($this->testimonialModal->image_to_use) {
            $this->avatar = $this->testimonialModal->image_to_use;
        } else {
            $this->avatar = $this->initialsUrl;
        }
    }

    public function submit() {
        $this->validate([
            'status' => ['required', Rule::in(['pending', 'accepted', 'declined'])],
            'avatar' => [Rule::in([$this->initialsUrl, $this->gravitarUrl])]
        ]);

        $this->testimonialModal->status = $this->status;
        $this->testimonialModal->image_to_use = $this->avatar;
        $this->testimonialModal->save();

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
        // dd($this);
    }

    public function render()
    {
        return view('livewire.testimonials.edit');
    }
}
