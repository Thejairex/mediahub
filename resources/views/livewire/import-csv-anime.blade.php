<main class="layout-container flex h-full grow flex-col">
    @if ($showSuccessModal)
        <div class="fixed inset-0 z-0 opacity-20 pointer-events-none filter blur-sm">
            <div class="layout-container flex h-full flex-col">
                <header class="flex items-center justify-between border-b border-white/10 px-10 py-3">
                    <div class="flex items-center gap-8">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-primary">grid_view</span>
                            <h2 class="text-lg font-bold">Media Hub</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-6">
                        <div class="h-8 w-32 bg-white/10 rounded"></div>
                        <div class="h-10 w-10 bg-white/10 rounded-full"></div>
                    </div>
                </header>
                <main class="p-10 grid grid-cols-3 gap-6">
                    <div class="h-64 bg-white/5 rounded-xl"></div>
                    <div class="h-64 bg-white/5 rounded-xl"></div>
                    <div class="h-64 bg-white/5 rounded-xl"></div>
                    <div class="h-96 col-span-2 bg-white/5 rounded-xl"></div>
                    <div class="h-96 bg-white/5 rounded-xl"></div>
                </main>
            </div>
        </div>
        <!-- Modal Overlay -->
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-md p-4"
            wire:click.self="$set('showSuccessModal', false)">
            <!-- Success Card -->
            <div
                class="w-full max-w-[520px] bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark rounded-xl shadow-2xl p-8 md:p-12 flex flex-col items-center text-center">
                <!-- Minimalist Success Icon -->
                <div class="mb-8 relative">
                    <div class="absolute inset-0 bg-primary/20 rounded-full blur-xl scale-150"></div>
                    <div
                        class="relative flex items-center justify-center size-24 rounded-full border-2 border-primary/30 bg-primary/5">
                        <span class="material-symbols-outlined text-primary text-5xl font-light">check</span>
                    </div>
                </div>
                <!-- Heading -->
                <h1 class="text-3xl font-bold tracking-tight text-[#111418] dark:text-white mb-3">Import Successful</h1>
                <!-- Summary Description -->
                <p class="text-text-secondary dark:text-slate-400 text-lg mb-10 max-w-[340px] leading-relaxed">
                    The items have been successfully added to your library.
                </p>
                <!-- Breakdown Grid -->
                <div class="grid grid-cols-1 w-full gap-4 mb-10">
                    <div class="flex flex-col items-center p-4 rounded-lg bg-primary/5 border border-primary/10">
                        <span
                            class="text-text-secondary dark:text-slate-400 text-xs font-medium uppercase tracking-wider mb-1">Anime</span>
                        <span class="text-2xl font-bold text-[#111418] dark:text-white">{{ $importedCount }}</span>
                    </div>
                </div>
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 w-full">
                    <a href="{{ route('media-items.library') }}"
                        class="flex-1 h-14 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg transition-colors flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-xl">auto_stories</span>
                        Go to Library
                    </a>
                    <a href="{{ route('dashboard') }}"
                        class="flex-1 h-14 bg-gray-100 dark:bg-white/5 hover:bg-gray-200 dark:hover:bg-white/10 text-text-main dark:text-white font-semibold rounded-lg border border-border-light dark:border-white/10 transition-colors flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-xl">history</span>
                        Recent Updates
                    </a>
                </div>
                <!-- Dismiss Note -->
                <button wire:click="$set('showSuccessModal', false)"
                    class="mt-8 text-text-secondary hover:text-primary dark:text-slate-500 dark:hover:text-slate-300 text-sm font-medium transition-colors">
                    Close this window
                </button>
            </div>
        </div>
        <!-- Background Decorative Element -->
        <div
            class="fixed bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-primary/50 to-transparent opacity-30">
        </div>
    @endif
    <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-8">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1 gap-8">
            <!-- Page Header & Breadcrumbs -->
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-2">
                    <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-[#111418] dark:text-white">Import
                        from Excel</h1>
                    <p class="text-text-secondary text-base max-w-2xl">Use this wizard to bulk import your tracking
                        history. We support .xlsx and .csv files.</p>
                </div>

                <!-- Wizard Progress Stepper -->
                <div class="flex flex-col gap-2 w-full">
                    <div class="flex justify-between items-center text-sm font-medium">
                        <span
                            class="{{ $step >= 1 ? 'text-primary' : 'text-text-secondary dark:text-gray-400' }} flex items-center gap-2"><span
                                class="material-symbols-outlined text-lg">upload_file</span> 1. Upload</span>
                        <span
                            class="{{ $step >= 2 ? 'text-primary' : 'text-text-secondary dark:text-gray-400' }} flex items-center gap-2"><span
                                class="material-symbols-outlined text-lg">dvr</span> 2. Map Columns</span>
                        <span
                            class="{{ $step >= 3 ? 'text-primary' : 'text-text-secondary dark:text-gray-400' }} flex items-center gap-2"><span
                                class="material-symbols-outlined text-lg">table_view</span> 3. Preview</span>
                    </div>
                    <div class="w-full h-2 bg-[#e5e7eb] dark:bg-border-dark rounded-full overflow-hidden">
                        <div
                            class="h-full bg-primary {{ $step == 1 ? 'w-1/3' : ($step == 2 ? 'w-2/3' : 'w-full') }} rounded-full transition-all duration-300">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Wizard Steps Container -->
            <div class="flex flex-col gap-8">
                @if ($step >= 1)
                    <!-- Step 1: Upload (Completed State) -->
                    <div
                        class="rounded-xl border border-[#e5e7eb] dark:border-border-dark bg-white dark:bg-surface-dark overflow-hidden">
                        <div
                            class="p-4 border-b border-[#e5e7eb] dark:border-border-dark flex justify-between items-center bg-gray-50 dark:bg-[#1f2937]/50">
                            <h3 class="font-bold text-lg flex items-center gap-2">
                                <span class="flex items-center justify-center size-6 rounded-full 
                                                                            @if ($csvFile) bg-green-500/20 text-green-500 @else bg-primary/20 text-primary @endif
                                                                            text-xs">
                                    <span class="material-symbols-outlined text-sm font-bold"> @if ($csvFile) check
                                    @else
                                            upload_file
                                        @endif</span>
                                </span>

                                Step 1: File Upload
                            </h3>
                            <input type="file" class="hidden" x-ref="fileInput" wire:model="csvFile" accept=".csv,.txt">
                            <button type="button" @click="$refs.fileInput.click()"
                                class="text-sm text-text-secondary hover:text-white transition-colors underline">
                                @if ($csvFile)
                                    Change File
                                @else
                                    Upload File
                                @endif
                            </button>
                        </div>
                        <div wire:loading wire:target="csvFile" class="p-6 flex items-center gap-4">
                            <div class="p-6 flex items-center gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="animate-spin">
                                        <span class="material-symbols-outlined text-2xl">
                                            progress_activity
                                        </span>
                                    </div>
                                    <p class="text-xs text-text-secondary">Uploading...</p>
                                </div>
                            </div>
                        </div>
                        @if ($csvFile)
                            <div class="p-6 flex items-center gap-4">
                                <div class="size-12 rounded-lg bg-green-500/10 flex items-center justify-center text-green-500">
                                    <span class="material-symbols-outlined text-2xl">description</span>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-bold text-[#111418] dark:text-white">
                                        {{ $csvFile->getClientOriginalName() }}
                                    </p>
                                    <p class="text-xs text-text-secondary">{{ $csvFile->getSize() }} • Uploaded just now</p>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
                @if ($step >= 2)
                    <!-- Step 2: Column Mapping (Active State) -->
                    <div
                        class="rounded-xl border-2 border-primary/50 shadow-[0_0_0_4px_rgba(25,127,230,0.1)] bg-white dark:bg-surface-dark overflow-hidden relative">
                        <div class="absolute top-0 left-0 w-1 h-full bg-primary"></div>
                        <div
                            class="p-5 border-b border-[#e5e7eb] dark:border-border-dark flex justify-between items-center">
                            <div class="flex flex-col gap-1">
                                <h3 class="font-bold text-xl text-primary">Step 2: Map Columns</h3>
                                <p class="text-sm text-text-secondary">Match the columns from your Excel file to Media
                                    Hub fields.</p>
                            </div>
                            <span
                                class="px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider">Active</span>
                        </div>
                        <div class="p-6 grid gap-6">
                            @foreach ($fields as $key => $field)
                                <div class="grid grid-cols-1 md:grid-cols-[1fr_auto_1fr] gap-4 items-center">

                                    {{-- Campo interno --}}
                                    <div
                                        class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 dark:bg-[#111418] border border-[#e5e7eb] dark:border-border-dark">
                                        <span class="material-symbols-outlined text-text-secondary">
                                            {{ $field['icon'] }}
                                        </span>

                                        <div class="flex flex-col">
                                            <span class="text-sm font-bold">{{ $field['label'] }}</span>

                                            @if($field['required'])
                                                <span class="text-xs text-red-500">Required</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="hidden md:flex justify-center text-text-secondary">
                                        <span class="material-symbols-outlined">arrow_forward</span>
                                    </div>

                                    {{-- Selector dinámico --}}
                                    <div class="relative">
                                        <select wire:model="mapping.{{ $key }}"
                                            class="w-full h-12 rounded-lg bg-white dark:bg-[#111418] border border-[#e5e7eb] dark:border-border-dark text-[#111418] dark:text-white px-4 focus:ring-2 focus:ring-primary focus:border-transparent outline-none appearance-none cursor-pointer">

                                            <option value="">Select Column...</option>

                                            @foreach ($headers as $index => $header)
                                                <option value="{{ $header }}">
                                                    {{ $header }} (Column {{ chr(65 + $index) }})
                                                </option>
                                            @endforeach
                                            @if ($field['label'] == 'Status')
                                                <option value="__static__:watching">Watching</option>
                                                <option value="__static__:completed">Completed</option>
                                                <option value="__static__:on_hold">On Hold</option>
                                                <option value="__static__:dropped">Dropped</option>
                                                <option value="__static__:plan_to_watch">Plan to Watch</option>
                                            @endif
                                        </select>
                                    </div>

                                </div>
                            @endforeach

                            <div class="flex justify-end">
                                <button wire:click="buildPreview"
                                    class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                                    Preview
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($step >= 3)
                    <!-- Step 3: Preview (Pending/Preview State) -->
                    <div
                        class="rounded-xl border border-[#e5e7eb] dark:border-border-dark bg-white dark:bg-surface-dark overflow-hidden opacity-90">
                        <div
                            class="p-4 border-b border-[#e5e7eb] dark:border-border-dark flex justify-between items-center bg-gray-50 dark:bg-[#1f2937]/50">
                            <h3 class="font-bold text-lg text-text-secondary dark:text-gray-300">Step 3: Preview Data
                            </h3>
                            <span
                                class="text-xs font-medium text-text-secondary bg-gray-200 dark:bg-[#293038] px-2 py-1 rounded">5
                                rows preview</span>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm text-text-secondary">
                                <thead
                                    class="bg-gray-100 dark:bg-[#111418] text-[#111418] dark:text-white uppercase font-bold text-xs tracking-wider">
                                    <tr>
                                        <th class="px-6 py-3" scope="col">Media Title</th>
                                        <th class="px-6 py-3" scope="col">Progress</th>
                                        <th class="px-6 py-3" scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[#e5e7eb] dark:divide-border-dark">

                                    @foreach ($normalizedPreview as $row)
                                        <tr class="hover:bg-gray-50 dark:hover:bg-[#1f2937]/50">

                                            <td class="px-6 py-4 font-medium text-[#111418] dark:text-white">
                                                {{ ucfirst($row['title']) ?? '-' }}
                                            </td>

                                            <td class="px-6 py-4">
                                                {{ $row['progress_current'] ?? '-' }}
                                                /
                                                {{ $row['progress_total'] ?? '-' }}
                                            </td>

                                            <td class="px-6 py-4">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-{{ $styleStatus[$row['status']] }}-100 text-{{ $styleStatus[$row['status']] }}-700 dark:bg-{{ $styleStatus[$row['status']] }}-900/30 dark:text-{{ $styleStatus[$row['status']] }}-400">
                                                    {{ ucfirst($row['status']) ?? '-' }}
                                                </span>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
            <!-- Footer Actions -->
            @if ($step >= 3)
                <div
                    class="sticky bottom-0 z-10 -mx-4 md:-mx-10 lg:-mx-40 px-4 md:px-10 lg:px-40 py-4 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm border-t border-[#e5e7eb] dark:border-border-dark flex justify-end gap-3">
                    <button
                        class="px-6 h-10 rounded-lg border border-[#e5e7eb] dark:border-border-dark font-bold text-sm hover:bg-gray-100 dark:hover:bg-[#293038] transition-colors">
                        Cancel
                    </button>
                    <button wire:click="import" wire:loading.attr="disabled"
                        class="px-6 h-10 rounded-lg bg-primary text-white font-bold text-sm shadow-lg hover:bg-primary/90 transition-colors flex items-center gap-2">
                        <span>Import {{ count($preview) }} Items</span>
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </div>
            @endif
        </div>
    </div>
</main>