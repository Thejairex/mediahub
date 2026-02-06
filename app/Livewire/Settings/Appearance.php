<?php

namespace App\Livewire\Settings;

use Livewire\Component;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.auth')]
#[Title('Appearance')]
class Appearance extends Component
{
    public function render()
    {
        return view('livewire.settings.appearance');
    }
}
