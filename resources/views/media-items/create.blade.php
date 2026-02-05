<x-layouts.auth>
    <div class="flex-1 flex flex-col items-center justify-center p-4 sm:p-6 lg:p-8">

        <!-- Form Container -->
        <div
            class="w-full max-w-[640px] bg-white dark:bg-surface-dark rounded-xl shadow-xl border border-slate-200 dark:border-border-dark overflow-hidden flex flex-col">
            <!-- Header -->
            <div
                class="px-6 py-5 border-b border-slate-200 dark:border-border-dark flex justify-between items-center bg-slate-50 dark:bg-[#151a21]">
                <h1 class="text-xl font-bold text-slate-900 dark:text-white tracking-tight">Add to Collection</h1>
                <button
                    class="text-slate-400 hover:text-slate-600 dark:text-slate-500 dark:hover:text-white transition-colors p-1 rounded-lg hover:bg-slate-100 dark:hover:bg-border-dark">
                    <span class="material-symbols-outlined text-2xl leading-none">close</span>
                </button>
            </div>
            <!-- Form Content -->
            <form class="p-6 md:p-8 space-y-6 flex-1 overflow-y-auto" action="{{ route('media-items.store') }}"
                method="POST" id="form-create">
                @csrf
                <!-- Title Field -->
                <div class="flex flex-col gap-2">
                    <label class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-normal"
                        for="name">Title</label>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-0 focus:ring-2 focus:ring-primary/50 focus:border-primary border border-slate-300 dark:border-input-border-dark bg-white dark:bg-input-bg-dark h-12 px-4 text-base font-normal leading-normal transition-all"
                            id="name" placeholder="e.g. One Piece" type="text" name="name" />
                    </div>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Type & Status Row -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-normal"
                            for="type">Type</label>
                        <div class="relative">
                            <select
                                class="form-select flex w-full min-w-0 appearance-none rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 focus:border-primary border border-slate-300 dark:border-input-border-dark bg-white dark:bg-input-bg-dark h-12 px-4 pr-10 text-base font-normal leading-normal transition-all"
                                id="type" name="type"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBtCKO3A8YwcM-c4KbC9YuufZ_ApIGDbRWltbOh4ocN7GckBArGM_wX9cgNnPzuaREGl1fJCpaUpj1hGsQ_9Le5z3e7KsrSrV85nRTBKV17lC6tu0WKpx4hoRRiYTytL8I4C-9VXcWsVxh4YndJanRaDj3VjCv458ssfWkW3xR3B1FAr2g3NmLjm_OqOFVMGK8Mljw3qS6cohgFwHwtTr-xU4dQJmoWokXMXmB6jUnRH1xzWYnj9RtIMszN7nxiWZvawYAdlWPP_NAA'); background-position: right 0.75rem center; background-size: 1.25em 1.25em;">
                                <option disabled="" selected="" value="">Select format</option>
                                <option value="anime">Anime</option>
                                <option value="manga">Manga</option>
                                <option value="novel">Novel</option>
                            </select>
                        </div>
                        @error('type')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-normal"
                            for="status">Status</label>
                        <div class="relative">
                            <select
                                class="form-select flex w-full min-w-0 appearance-none rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 focus:border-primary border border-slate-300 dark:border-input-border-dark bg-white dark:bg-input-bg-dark h-12 px-4 pr-10 text-base font-normal leading-normal transition-all"
                                id="status" name="status"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuConhtjL89s5qm-jpqE1VMuLbDgC5BYcihnUaLbo18hh2kwAcdSL7ibOyXoLYvg9nuCxlYSkOEE-Q9VNu8eCeCkOpjvuG-2GK-2v6a0iH5_3lwEwLosZis0PeFJFrx9LGwgOtjTXbaxBW7ZyoBVFzIy0QMiF-8dUAdew54PmAIdZHYAg8T13AhC3HzZDehflIZKZnqo92kXNpLoq-0NdHzTVI6oBAPiYOOOGrGZ9f2DHSJYvVsJGXVYAAl-5uDx2FmW6W9dYgpJqrN-'); background-position: right 0.75rem center; background-size: 1.25em 1.25em;">
                                <option disabled="" selected="" value="">Select status</option>
                                <option value="plan">Plan to Watch</option>
                                <option value="watching">In Progress</option>
                                <option value="completed">Completed</option>
                                <option value="paused">Paused</option>
                                <option value="dropped">Dropped</option>
                            </select>
                        </div>
                        @error('status')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- Progress Row -->
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between items-center">
                        <label
                            class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-normal">Progress</label>
                        <span class="text-xs text-slate-400 dark:text-slate-500">Episodes / Chapters</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="relative flex-1">
                            <input
                                class="form-input w-full rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-0 focus:ring-2 focus:ring-primary/50 focus:border-primary border border-slate-300 dark:border-input-border-dark bg-white dark:bg-input-bg-dark h-12 px-4 text-base font-normal transition-all"
                                min="0" placeholder="0" type="number" name="progress_current" />
                            <div
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 dark:text-slate-600 text-xs font-semibold pointer-events-none">
                                CURR</div>
                        </div>
                        <span class="text-slate-300 dark:text-slate-600 font-light text-2xl">/</span>
                        <div class="relative flex-1">
                            <input
                                class="form-input w-full rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-0 focus:ring-2 focus:ring-primary/50 focus:border-primary border border-slate-300 dark:border-input-border-dark bg-white dark:bg-input-bg-dark h-12 px-4 text-base font-normal transition-all"
                                placeholder="?" type="number" name="progress_total" />
                            <div
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 dark:text-slate-600 text-xs font-semibold pointer-events-none">
                                TOTAL</div>
                        </div>
                        @error('progress_current')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        @error('progress_total')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- Notes -->
                <div class="flex flex-col gap-2">
                    <label class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-normal"
                        for="notes">Personal Notes</label>
                    <textarea
                        class="form-textarea w-full resize-y rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-0 focus:ring-2 focus:ring-primary/50 focus:border-primary border border-slate-300 dark:border-input-border-dark bg-white dark:bg-input-bg-dark p-4 text-base font-normal leading-normal transition-all"
                        id="notes" placeholder="Write your thoughts, reviews, or key moments here..."
                        rows="4" name="notes"></textarea>
                    @error('notes')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Source --}}
                <div class="flex items-center gap-3">
                    <div class="relative flex-1">
                        <label for="source"
                            class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-normal">Source</label>
                        <input type="text" name="source" id="source"
                            class="form-textarea w-full resize-y rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-0 focus:ring-2 focus:ring-primary/50 focus:border-primary border border-slate-300 dark:border-input-border-dark bg-white dark:bg-input-bg-dark p-4 text-base font-normal leading-normal transition-all"
                            placeholder="Source of the media where consumed/consumes">
                    </div>
                    <div class="relative flex-1">
                        <label for="source_url"
                            class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-normal">Source
                            Link</label>
                        <input type="text" name="source_url" id="source_url"
                            class="form-textarea w-full resize-y rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-0 focus:ring-2 focus:ring-primary/50 focus:border-primary border border-slate-300 dark:border-input-border-dark bg-white dark:bg-input-bg-dark p-4 text-base font-normal leading-normal transition-all"
                            placeholder="Source link of the media where consumed/consumes">
                    </div>
                    @error('source')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    @error('source_url')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <label for="image_url"
                        class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-normal">Image Link</label>
                    <input type="text" name="image_url" id="image_url"
                        class="form-textarea w-full resize-y rounded-lg text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:outline-0 focus:ring-2 focus:ring-primary/50 focus:border-primary border border-slate-300 dark:border-input-border-dark bg-white dark:bg-input-bg-dark p-4 text-base font-normal leading-normal transition-all"
                        placeholder="Image link for portrait">
                    @error('image_url')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </form>
            <!-- Actions Footer -->
            <div
                class="px-6 py-4 bg-slate-50 dark:bg-[#151a21] border-t border-slate-200 dark:border-border-dark flex flex-col-reverse sm:flex-row sm:justify-end gap-3">
                <button
                    class="flex items-center justify-center h-11 px-6 rounded-lg text-slate-700 dark:text-white hover:bg-slate-200 dark:hover:bg-border-dark border border-transparent dark:border-transparent font-medium transition-colors">
                    Cancel
                </button>
                <button
                    class="flex items-center justify-center gap-2 h-11 px-8 rounded-lg bg-primary hover:bg-blue-600 text-white font-semibold shadow-lg shadow-primary/20 transition-all"
                    type="submit" form="form-create">
                    <span class="material-symbols-outlined text-[20px]">save</span>
                    <span>Save Item</span>
                </button>
            </div>
        </div>
    </div>
</x-layouts.auth>