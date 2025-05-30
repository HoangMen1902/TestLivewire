<?php

namespace Modules\First\Livewire\Components;

use Livewire\Component;
use Log;

class Test extends Component
{
    public $data;
    public function mount($data) {
        Log::info("Here: Mounted");
        $this->data = 'Test Data';
    }
    public function render()
    {
        return view('first::livewire.components.test');
    }
}
