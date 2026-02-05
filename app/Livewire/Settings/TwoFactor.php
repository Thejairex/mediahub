<?php

namespace App\Livewire\Settings;

use Livewire\Component;
use Laravel\Fortify\Actions\EnableTwoFactorAuthentication;
use Laravel\Fortify\Actions\DisableTwoFactorAuthentication;
use Laravel\Fortify\Actions\ConfirmTwoFactorAuthentication;
use Illuminate\Support\Facades\Auth;

class TwoFactor extends Component
{
    public $confirmingTwoFactorAuthentication = false;
    public $confirmationCode = '';

    public function enableTwoFactorAuthentication(EnableTwoFactorAuthentication $enable)
    {
        $enable(Auth::user());

        $this->confirmingTwoFactorAuthentication = true;
    }

    public function confirmTwoFactorAuthentication(ConfirmTwoFactorAuthentication $confirm)
    {
        $confirm(Auth::user(), $this->confirmationCode);

        $this->confirmingTwoFactorAuthentication = false;
    }

    public function disableTwoFactorAuthentication(DisableTwoFactorAuthentication $disable)
    {
        $disable(Auth::user());
    }

    public function render()
    {
        return view('livewire.settings.two-factor', [
            'user' => Auth::user(),
        ]);
    }
}
