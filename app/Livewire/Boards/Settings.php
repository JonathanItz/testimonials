<?php

namespace App\Livewire\Boards;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Locked;
use Illuminate\Validation\Rules\File;

class Settings extends Component
{
    use WithFileUploads;

    #[Locked]
    public $board;

    public $existingLogo, $logo, $company, $website, $slug;

    public $testimonialLimit = 1000;

    public $border = 'border';
    public $borderColor = '#e5e7eb';
    public $radius = 'rounded-xl';

    public $shadow = 'shadow-md';


    public $isSubscribed = false;

    public function mount() {
        if(session('slug-updated')) {
            $this->showSuccess();
        }

        $user = auth()?->user();

        $this->isSubscribed = $user?->subscribed();

        $board = $this->board;

        $this->company = $board->name;
        $this->slug = $board->slug;

        $testimonialSettings = $board?->settings['testimonials'];

        if(isset($testimonialSettings['limit'])) {
            $this->testimonialLimit = $testimonialSettings['limit'];
        }

        if(isset($board?->settings['website'])) {
            $this->website = $board?->settings['website'];
        }

        if(isset($testimonialSettings['border'])) {
            $this->border = $testimonialSettings['border'];
        }

        if(isset($testimonialSettings['borderColor'])) {
            $this->borderColor = $testimonialSettings['borderColor'];
        }

        if(isset($testimonialSettings['radius'])) {
            $this->radius = $testimonialSettings['radius'];
        }

        if(isset($testimonialSettings['shadow'])) {
            $this->shadow = $testimonialSettings['shadow'];
        }

        $companyLogo = $board->getFirstMedia('companylogo');
        if($companyLogo) {
            $this->existingLogo = $companyLogo->getFullUrl();
        }
    }

    public function submit() {
        $rules = [
            'company' => ['required', 'max:255', 'string'],
            'website' => ['nullable', 'max:255', 'string'],
            'testimonialLimit' => ['numeric', 'min:1', 'max:1000', 'nullable'],
            'logo' => [
                'nullable',
                File::types(['jpeg', 'jpg', 'png', 'svg'])
                    ->max(3 * 1024)
            ],
            'border' => Rule::in(['','border', 'border-2', 'border-4']),
            'borderColor' => ['string', 'max:7'],
            'radius' => Rule::in(['','rounded-md', 'rounded-lg', 'rounded-xl']),
            'shadow' => Rule::in(['','shadow-md', 'shadow-lg', 'shadow-xl']),
        ];

        $messages = [
            'logo.max' => 'The logo field must not be greater than 3 megabytes.',
            'border.in' => 'Please select a border size.',
            'radius.in' => 'Please select a border radius.',
            'shadow.in' => 'Please select a shadow.',
        ];

        $this->validate($rules, $messages);

        // $this->board->name = $this->company;
        // $this->board->settings['testimonials']['limit'] = $this->testimonialLimit;

        $this->board->update([
            'name' => $this->company,
            'settings' => [
                'testimonials' => [
                    'limit' => $this->testimonialLimit,
                    'border' => $this->border,
                    'borderColor' => $this->borderColor,
                    'radius' => $this->radius,
                    'shadow' => $this->shadow,
                ],
                'website' => $this->website,
            ]
        ]);


        if($this->logo) {
            $this->existingLogo = $this->logo->temporaryUrl();

            $existingCompanyLogo = $this->board->getFirstMedia('companylogo');
            if($existingCompanyLogo) {
                $existingCompanyLogo->delete();
            }
    
            $this->board
                ->addMedia($this->logo)
                ->toMediaCollection('companylogo');

            $this->reset('logo');
        } elseif(! $this->logo && ! $this->existingLogo) {
            $existingCompanyLogo = $this->board->getFirstMedia('companylogo');
            if($existingCompanyLogo) {
                $existingCompanyLogo->delete();
            }
        }

        $this->showSuccess();

        if($this->slug !== $this->board->slug) {
            session()->flash('slug-updated', true);
            return $this->redirect(route('boards.settings', [$this->board->slug]), navigate: true);
        }
    }

    public function removeLogo() {
        $this->reset('logo');
        $this->existingLogo = '';
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
