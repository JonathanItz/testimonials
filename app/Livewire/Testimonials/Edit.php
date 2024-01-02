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

    public $isSubscribed = false;

    public $limit = 1000;

    public function mount() {
        $user = auth()?->user();

        $this->fullName = $this->testimonialModal->full_name;
        $this->company = $this->testimonialModal->company;
        $this->jobPosition = $this->testimonialModal->job_position;
        $this->testimonial = $this->testimonialModal->testimonial;
        $this->email = $this->testimonialModal->email;
        $this->status = $this->testimonialModal->status;

        $this->isSubscribed = $user?->subscribed();

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
    }

    public function submit() {
        $rules = [
            'status' => ['required', Rule::in(['pending', 'accepted', 'declined'])],
            'avatar' => [Rule::in([$this->initialsUrl, $this->gravitarUrl])]
        ];

        if($this->isSubscribed) {
            $rules = array_merge($rules, [
                'fullName' => ['required', 'string', 'max:255'],
                'company' => ['nullable', 'string', 'max:255'],
                'jobPosition' => ['nullable', 'string', 'max:255'],
                'testimonial' => ['required', 'string', "max:$this->limit"],
            ]);
        } else {
            $testimonailsCount = Testimonial::where('board_id', $this->testimonialModal->board_id)
                ->where('status', 'accepted')
                ->count();

            
            if($testimonailsCount >= 10 && $this->status === 'accepted') {
                $this->js('
                    Toastify({
                        text: "You may only have up to 10 accepted testimonials on the free tier.",
                        duration: 3000,
                        close: true,
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                            background: "#f87171",
                            borderRadius: "0.375rem"
                        },
                    }).showToast();
                ');

                return;
            }
        }

        $this->validate($rules);

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
    }

    public function render()
    {
        return view('livewire.testimonials.edit');
    }
}
