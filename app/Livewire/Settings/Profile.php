<?php

namespace App\Livewire\Settings;

use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\WithFileUploads;

#[Layout('components.layouts.auth')]
#[Title('Profile Settings')]
class Profile extends Component
{
    use WithFileUploads;

    public $state = [];

    public $settings = [
        'dark_mode' => false,
        'language' => 'en',
        // 'timezone' => 'UTC',
    ];

    public $showModalUploadPhoto = false;
    public $photo_source = 'file'; // 'file' or 'url'
    public $image_url = '';
    public $profile_photo;

    protected $rules = [
        'profile_photo' => 'nullable|image|max:2048',
        'image_url' => 'nullable|url',
    ];

    public function mount()
    {
        $user = Auth::user();
        $this->state = $user->withoutRelations()->toArray();
        $this->settings['dark_mode'] = $user->setting('dark_mode', false);
        $this->settings['language'] = $user->setting('language', 'en');
    }

    public function updateSettings()
    {
        $this->resetErrorBag();
        $user = Auth::user();

        foreach ($this->settings as $key => $value) {
            $user->setSetting($key, $value);
        }

        $this->dispatch('toast', [
            'type' => 'success',
            'message' => 'Settings saved successfully',
        ]);

        // $this->dispatch('refresh-user');
        return redirect()->route('profile.edit');
    }

    public function modalUploadPhoto()
    {
        $this->showModalUploadPhoto = !$this->showModalUploadPhoto;
        $this->reset(['image_url', 'profile_photo', 'photo_source']);
        $this->resetErrorBag();
    }

    public function closeModal()
    {
        $this->showModalUploadPhoto = false;
    }

    public function setPhotoSource($source)
    {
        $this->photo_source = $source;
    }

    public function uploadPhoto()
    {
        $user = Auth::user();

        if ($this->photo_source === 'file') {
            $this->validate([
                'profile_photo' => 'required|image|max:2048',
            ]);

            $user->addMedia($this->profile_photo->getRealPath())
                ->usingFileName($this->profile_photo->getClientOriginalName())
                ->toMediaCollection('profile_photo');
        } else {
            $this->validate([
                'image_url' => 'required|url',
            ]);

            try {
                $user->addMediaFromUrl($this->image_url)
                    ->toMediaCollection('profile_photo');
            } catch (\Exception $e) {
                $this->addError('image_url', 'Could not download the image from the provided URL.');
                return;
            }
        }

        $user->refresh();
        $this->modalUploadPhoto();
        $this->dispatch('toast', [
            'type' => 'success',
            'message' => 'Profile photo updated!',
        ]);
    }

    public function removePhoto()
    {
        $user = Auth::user();
        $user->clearMediaCollection('profile_photo');
        $user->refresh();
        $this->dispatch('profile-updated');
    }

    public function render()
    {
        $user = Auth::user();
        return view('livewire.settings.profile', compact('user'));
    }
}
