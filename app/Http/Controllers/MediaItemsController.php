<?php

namespace App\Http\Controllers;

use App\Livewire\Animes;
use App\Models\Activity;
use App\Models\MediaItems;
use Illuminate\Http\Request;

class MediaItemsController extends Controller
{

    public function index(Request $request)
    {
        $type = $request->type;
        return view('media-items.index', compact('type'));
    }

    public function library()
    {
        $type = 'library';
        return view('media-items.index', compact('type'));
    }

    public function create()
    {
        return view('media-items.create');
    }

    public function show(Request $request)
    {
        $mediaItem = MediaItems::find($request->id);
        return view('media-items.show', compact('mediaItem'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'progress_current' => ['required', 'integer'],
            'progress_total' => ['nullable', 'integer'],
            'notes' => ['nullable', 'string', 'max:255'],
            'source' => ['nullable', 'string', 'max:255'],
            'source_url' => ['nullable', 'string', 'max:255'],
            'image_url' => ['nullable', 'string', 'max:255'],
        ]);
        $validated['name'] = ucwords(strtolower(trim($validated['name'])));
        $validated['user_id'] = auth()->user()->id;
        $mediaItem = MediaItems::create($validated);

        // Log activity
        Activity::create([
            'user_id' => auth()->id(),
            'media_item_id' => $mediaItem->id,
            'activity_type' => 'created',
            'description' => 'Added new ' . $mediaItem->type,
            'old_value' => null,
            'new_value' => $mediaItem->name,
        ]);

        return redirect('/media-items/' . $mediaItem->type);
    }

    public function edit(Request $request)
    {
        $mediaItem = MediaItems::find($request->id);
        return view('media-items.edit', compact('mediaItem'));
    }

    public function update(Request $request)
    {
        $mediaItem = MediaItems::find($request->id);
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'progress_current' => ['required', 'integer'],
            'progress_total' => ['nullable', 'integer'],
            'notes' => ['nullable', 'string', 'max:255'],
            'source' => ['nullable', 'string', 'max:255'],
            'source_url' => ['nullable', 'string', 'max:255'],
            'image_url' => ['nullable', 'string', 'max:255'],
        ]);
        $validated['name'] = ucwords(strtolower(trim($validated['name'])));
        $mediaItem->update($validated);

        if (isset($validated['image_url'])) {
            $mediaItem->addMediaFromUrl($validated['image_url'])->toMediaCollection('cover');
        }
        // Log activity
        Activity::create([
            'user_id' => auth()->id(),
            'media_item_id' => $mediaItem->id,
            'activity_type' => 'updated',
            'description' => 'Updated ' . $mediaItem->type,
            'old_value' => $mediaItem->name,
            'new_value' => $mediaItem->name,
        ]);

        return redirect('/media-items/' . $mediaItem->type);
    }

    public function destroy(Request $request)
    {
        $mediaItem = MediaItems::find($request->id);
        $mediaItem->delete();
        return redirect('/media-items/' . $mediaItem->type);
    }

    public function importCsv(Request $request){
        return view('media-items.importCsv');
    }

    public function sucessImport(Request $request){
        return view('media-items.sucessImport');
    }
}
