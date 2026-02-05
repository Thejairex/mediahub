<?php

namespace App\Http\Controllers;

use App\Models\MediaItems;
use Illuminate\Http\Request;

class MediaItemsController extends Controller
{
    public function create(){
        return view('media-items.create');
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
