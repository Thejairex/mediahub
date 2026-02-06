<?php

namespace App\Livewire;

use App\Models\Activity;
use App\Models\MediaItems;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.auth')]
#[Title('Dashboard')]
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

        $oldProgress = $mediaItem->progress_current;
        $mediaItem->progress_current += 1;
        $mediaItem->save();

        // Log activity
        Activity::create([
            'user_id' => auth()->id(),
            'media_item_id' => $mediaItem->id,
            'activity_type' => 'progress_update',
            'description' => 'Updated progress',
            'old_value' => (string) $oldProgress,
            'new_value' => (string) $mediaItem->progress_current,
        ]);
    }

    public function decrementProgress($id)
    {
        $mediaItem = MediaItems::find($id);
        if ($mediaItem->progress_current == 0) {
            return;
        }

        $oldProgress = $mediaItem->progress_current;
        $mediaItem->progress_current -= 1;
        $mediaItem->save();

        // Log activity
        Activity::create([
            'user_id' => auth()->id(),
            'media_item_id' => $mediaItem->id,
            'activity_type' => 'progress_update',
            'description' => 'Updated progress',
            'old_value' => (string) $oldProgress,
            'new_value' => (string) $mediaItem->progress_current,
        ]);
    }

    public function render()
    {
        $mediaItems = MediaItems::orderBy('updated_at', 'desc')->get();
        $activities = Activity::with('mediaItem')
            ->where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return view('livewire.dashboard', compact('mediaItems', 'activities'));
    }
}
