<?php

namespace App\Livewire;

use App\Models\MediaItems;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.auth')]
class Dashboard extends Component
{

    public function incrementProgress($id)
    {
        $mediaItem = MediaItems::find($id);
        if ($mediaItem->progress_total === null) {
            if ($mediaItem->progress_current >= $mediaItem->progress_total) {
                return;
            }
        }

        $mediaItem->progress_current += 1;
        $mediaItem->save();
    }

    public function decrementProgress($id)
    {
        $mediaItem = MediaItems::find($id);
        if ($mediaItem->progress_current == 0) {
            return;
        }
        $mediaItem->progress_current -= 1;
        $mediaItem->save();
    }

    public function render()
    {
        $mediaItems = MediaItems::orderBy('id', 'desc')->get();
        return view('livewire.dashboard', compact('mediaItems'));
    }
}
