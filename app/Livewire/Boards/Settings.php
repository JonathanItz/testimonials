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

    public $radius = 'rounded-xl';

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

        if(isset($board?->settings['website'])) {
            $this->website = $board?->settings['website'];
        }

        $companyLogo = $board->getFirstMedia('companylogo');
        if($companyLogo) {
            $this->existingLogo = $companyLogo->getFullUrl();
        }
    }

    public function submit() {
        $this->validate([
            'company' => ['required', 'max:255', 'string'],
            'website' => ['nullable', 'max:255', 'string'],
            'testimonialLimit' => ['numeric', 'min:0', 'max:1000', 'nullable'],
            'logo' => [
                'nullable',
                File::types(['jpeg', 'jpg', 'png', 'svg'])
                    ->max(3 * 1024)
            ],
            'radius' => [
                Rule::in(['','rounded-md', 'rounded-lg', 'rounded-xl'])
            ]
        ], [
            'logo.max' => 'The logo field must not be greater than 3 megabytes.',
            'radius.in' => 'Please select a border radius.',
        ]);

        // $this->board->name = $this->company;
        // $this->board->settings['testimonials']['limit'] = $this->testimonialLimit;

        $this->board->update([
            'name' => $this->company,
            'settings' => [
                'testimonials' => [
                    'limit' => $this->testimonialLimit,
                    'radius' => $this->radius
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
