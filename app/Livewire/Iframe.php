<?php

namespace App\Livewire;

use Livewire\Component;

class Iframe extends Component
{
    public $slug;

    public $iframeCode;

    public $fakeTestimonials = [
        [
            'image' => 'https://ui-avatars.com/api/?name=John%20Doe',
            'name' => 'John Doe',
            'position' => 'Marketing Manager',
            'company' => 'Fake Company',
            'testimonial' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora magnam doloremque eius modi quaerat, tempore magni iste aut quia ad aperiam perferendis, sit itaque! Esse modi voluptatibus quam eaque libero.'
        ],
        [
            'image' => 'https://ui-avatars.com/api/?name=Norman%20Osborn',
            'name' => 'Norman Osborn',
            'position' => 'Scientist',
            'company' => 'Oscorp Industries',
            'testimonial' => 'Tempora magnam doloremque eius modi quaerat, tempore magni iste aut quia ad aperiam perferendis, sit itaque! Esse modi voluptatibus quam eaque libero.'
        ]
    ];

    public function mount() {
        $this->iframeCode = '&lt;script src="'.route('home').'/assets/js/iframe.js"&gt&lt;/script&gt;
&lt;iframe id="lemonbestieframe" src="'.route('board.iframe', [$this->slug]).'" frameborder="0" scrolling="no" width="100%"&gt;&lt;/iframe&gt;
&lt;script type="text/javascript"&gt;iFrameResize({log: false, checkOrigin: false}, "#lemonbestieframe");&lt;/script&gt;';
    }

    public function render()
    {
        return view('livewire.iframe');
    }
}
