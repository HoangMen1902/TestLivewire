<?php

namespace Modules\First\Livewire\Components;

use Livewire\Component;

class TestFirst extends Component
{
    public $data;

    public function mount() {
        $this->data = 'Test Data';
    }
    public function render()
    {
        return view('first::livewire.components.test-first');
    }
}
