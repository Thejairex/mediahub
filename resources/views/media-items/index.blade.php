<x-layouts.auth title="{{ ucfirst($type) }}">
    @livewire('media-items-table' , ['type' => $type])
</x-layouts.auth>