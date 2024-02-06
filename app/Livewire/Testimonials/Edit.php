<?php

namespace App\Livewire\Testimonials;

use Livewire\Component;
use App\Models\Testimonial;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Locked;

class Edit extends Component
{

    #[Locked]
    public $testimonialModal;

    public $fullName, $company, $jobPosition, $testimonial, $email, $status, $gravitarUrl, $initialsUrl, $avatar;

    public $limit = 1000;

    public function mount() {
        $user = auth()?->user();

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
            // dd($this->testimonialModal->image_to_use);
            $this->avatar = $this->testimonialModal->image_to_use;
        } else {
            $this->avatar = $this->initialsUrl;
        }

        $possibleAvatars = [$this->initialsUrl, $this->gravitarUrl];

        if(! in_array($this->avatar, $possibleAvatars)) {
            $this->avatar = $this->initialsUrl;
        }
    }

    public function submit() {
        $possibleAvatars = [$this->initialsUrl, $this->gravitarUrl];

        if(! in_array($this->avatar, $possibleAvatars)) {
            $this->avatar = $this->initialsUrl;
        }

        $rules = [
            'status' => ['required', Rule::in(['pending', 'accepted', 'declined'])],
        ];

        $rules = array_merge($rules, [
            'fullName' => ['required', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'jobPosition' => ['nullable', 'string', 'max:255'],
            'testimonial' => ['required', 'string', "max:$this->limit"],
        ]);

        $this->validate($rules);

        $this->testimonialModal->status = $this->status;
        $this->testimonialModal->image_to_use = $this->avatar;
        $this->testimonialModal->full_name = $this->fullName;
        $this->testimonialModal->company = $this->company;
        $this->testimonialModal->job_position = $this->jobPosition;
        $this->testimonialModal->testimonial = $this->testimonial;
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
    }

    public function render()
    {
        return view('livewire.testimonials.edit');
    }
}
