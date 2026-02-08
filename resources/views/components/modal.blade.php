@props(['name', 'maxWidth' => '2xl'])

@php
    $maxWidth = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
    ][$maxWidth];
@endphp

<div id="{{ $name ?? 'modal' }}" class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-[60]">
    <!-- Backdrop -->
    <div class="fixed inset-0 transform transition-all" wire:click="closeModal">
        <div class="absolute inset-0 bg-gray-900/60 dark:bg-black/80 backdrop-blur-sm"></div>
    </div>

    <!-- Modal Content -->
    <div
        class="mb-6 bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-2xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto relative z-10">
        @if (isset($title))
            <div
                class="px-6 py-4 border-b border-border-light dark:border-border-dark flex items-center justify-between bg-gray-50/50 dark:bg-gray-800/30">
                <h3 class="text-xl font-bold text-text-main dark:text-white">
                    {{ $title }}
                </h3>
                <button wire:click="closeModal"
                    class="text-text-secondary hover:text-text-main dark:text-gray-400 dark:hover:text-white transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
        @endif

        <div class="px-6 py-6 font-sans">
            {{ $content }}
        </div>

        @if (isset($footer))
            <div
                class="px-6 py-4 bg-gray-50 dark:bg-gray-800/50 border-t border-border-light dark:border-border-dark flex justify-end gap-3">
                {{ $footer }}
            </div>
        @endif
    </div>
</div>