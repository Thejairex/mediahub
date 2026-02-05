<?php

namespace App\Http\Controllers;

use App\Livewire\Animes;
use App\Models\MediaItems;
use Illuminate\Http\Request;

class MediaItemsController extends Controller
{

    public function index(Request $request) {
        $type = $request->type;
        return view('media-items.index', compact('type'));
    }

    public function library(){
        $type = 'library';
        return view('media-items.index', compact('type'));
    }

    public function create(){
        return view('media-items.create');
    }

    public function show(Request $request){
        $mediaItem = MediaItems::find($request->id);
        return view('media-items.show', compact('mediaItem'));
    }

    public function store(Request $request){
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
        MediaItems::create($validated);

        return redirect('/media-items');
    }

    public function edit(){
        return view('media-items.edit');
    }

    public function update(){

    }

    public function destroy(){

    }
}
