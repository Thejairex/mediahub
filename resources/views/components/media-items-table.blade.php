<?php

use Livewire\Component;
use App\Models\MediaItems;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;
    protected $queryString = ['search'];
    protected $paginationTheme = 'tailwind';
    public $type, $search;

    public $styleStatus = [
        'watching' => 'green',
        'completed' => 'blue',
        'plan_to_watch' => 'teal',
        'on_hold' => 'yellow',
        'dropped' => 'red',
    ];

    public $styleType = [
        'anime' => 'sky',
        'manga' => 'orange',
        'novel' => 'violet',
        'book' => 'red',
    ];

    public function updatingSearch()
{
    $this->resetPage();
}

    public function dropItem($id)
    {
        $mediaItem = MediaItems::find($id);
        $mediaItem->status = 'dropped';
        $mediaItem->save();
    }

    public function incrementProgress($id)
    {
        $mediaItem = MediaItems::find($id);
        if ($mediaItem->progress_total !== null) {
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

    public function mount($type)
    {
        $this->type = $type;
    }

    public function render()
    {
        $items = MediaItems::when($this->type !== 'library', function ($query) {
            $query->where('type', $this->type);
        })
        ->when($this->search !== '', function ($query) {
            $query->where('name', 'ilike', '%' . $this->search . '%');
        })
        ->orderBy('id', 'desc')->paginate(10);
        return view('components.media-items-table', compact('items'));
    }
};
?>

<div>
    <header class="flex flex-col gap-6 p-8 max-w-[1200px] w-full mx-auto">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h2 class="text-[#111418] dark:text-white text-4xl font-black tracking-tight">{{ ucfirst($type) }}
                    Library</h2>
                <p class="text-[#637588] dark:text-gray-400 text-sm mt-1">Manage your {{ $type }} progress and
                    collection
                </p>
            </div>
            <a href="{{ route('media-items.create', $type) }}"
                class="flex items-center gap-2 h-11 px-6 bg-primary text-white rounded-lg font-bold hover:bg-primary/90 transition-all shadow-sm">
                <span class="material-symbols-outlined text-[20px]">add</span>
                <span>Add {{ ucfirst($type) }}</span>
            </a>
        </div>
        <!-- Search and Filter Bar -->
        <div class="flex flex-col md:flex-row gap-4 items-center">
            <div class="relative flex-1 w-full">
                <span
                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#637588]">search</span>
                <input
                    class="w-full h-12 pl-12 pr-4 rounded-xl border-none bg-white dark:bg-gray-800 shadow-sm focus:ring-2 focus:ring-primary/20 dark:text-white text-[#111418] placeholder:text-[#637588]"
                    placeholder="Search titles, authors, or genres..."
                    wire:model.live.debounce.300ms="search" />
            </div>
            <div
                class="flex bg-white dark:bg-gray-800 p-1 rounded-xl shadow-sm border border-[#dce0e5] dark:border-gray-700">
                <button
                    class="px-4 py-2 text-sm font-bold rounded-lg text-[#637588] dark:text-gray-400 hover:text-primary transition-colors">All</button>
                <button class="px-4 py-2 text-sm font-bold rounded-lg bg-primary/10 text-primary">Reading</button>
                <button
                    class="px-4 py-2 text-sm font-bold rounded-lg text-[#637588] dark:text-gray-400 hover:text-primary transition-colors">Completed</button>
                <button
                    class="px-4 py-2 text-sm font-bold rounded-lg text-[#637588] dark:text-gray-400 hover:text-primary transition-colors">Planned</button>
            </div>
        </div>
        <!-- Table Container -->
        <div
            class="overflow-hidden rounded-xl border border-[#dce0e5] dark:border-gray-800 bg-white dark:bg-gray-900 shadow-sm">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50 dark:bg-gray-800/50 border-b border-[#dce0e5] dark:border-gray-800">
                        <th class="px-6 py-4 text-sm font-semibold text-[#111418] dark:text-gray-200">Title</th>
                        @if ($type === 'library')
                            <th class="px-6 py-4 text-sm font-semibold text-[#111418] dark:text-gray-200">Type</th>
                        @endif
                        <th class="px-6 py-4 text-sm font-semibold text-[#111418] dark:text-gray-200">Status</th>
                        <th class="px-6 py-4 text-sm font-semibold text-[#111418] dark:text-gray-200">Progress</th>
                        <th class="px-6 py-4 text-sm font-semibold text-right text-[#637588] dark:text-gray-400">Quick
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#dce0e5] dark:divide-gray-800">
                    <!-- Row 1 -->

                    @foreach ($items as $item)

                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-10 h-14 bg-gray-200 dark:bg-gray-700 rounded overflow-hidden flex-shrink-0">
                                        <div class="w-full h-full bg-cover bg-center"
                                            data-alt="Manga cover illustration for One Piece"
                                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBs5yBAua3xmuhZHXQ_66AqKrB2Y43wbOmmTDFDWDf_aFsYENLbxtLtCg3WXm4Mtq-bwJJTicFICB0ysXl91pPnTpsT5RPudAd_LuBo6MOBSsg3WqrHLwb3CrsCJMUFfgmSRWc-z-1837uCBQE6VUIdNUaIQa0o9iNX_gs1MKMjQQNCx2u2nZVjIuqIyth-KsVnDjGVzE_sNMpu0OjQcDbMHL39Z3Jrdo7cqD9Y3WnVyXFqOkK9huLs_kOeAl6IQo7Y927FNPi58M6U')">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-[#111418] dark:text-white leading-tight">One Piece
                                        </p>
                                        <p class="text-xs text-[#637588] dark:text-gray-400">Eiichiro Oda</p>
                                    </div>
                                </div>
                            </td>
                            @if ($type === 'library')
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-{{ $styleType[$item->type] }}-100 text-{{ $styleType[$item->type] }}-700 dark:bg-{{ $styleType[$item->type] }}-900/30 dark:text-{{ $styleType[$item->type] }}-400">
                                        {{ ucfirst($item->type) }}
                                    </span>
                                </td>
                            @endif
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-{{ $styleStatus[$item->status] }}-100 text-{{ $styleStatus[$item->status] }}-700 dark:bg-{{ $styleStatus[$item->status] }}-900/30 dark:text-{{ $styleStatus[$item->status] }}-400">
                                    @switch($item->status)
                                        @case('watching')
                                            Reading
                                            @break
                                        @case('completed')
                                            Completed
                                            @break
                                        @case('on_hold')
                                            On Hold
                                            @break
                                        @case('dropped')
                                            Dropped
                                            @break
                                        @case('plan_to_watch')
                                            Planned
                                            @break
                                        @default
                                            
                                    @endswitch
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <p class="text-sm text-[#111418] dark:text-gray-200 font-medium">{{ $item->progress_current }} / {{ $item->progress_total ? $item->progress_total : '?' }}</p>
                                    <button class="flex h-7 w-7 items-center justify-center rounded bg-primary text-white shadow hover:bg-blue-600 active:scale-95" title="Start Reading" wire:click="incrementProgress({{ $item->id }})">
                                        <span class="material-symbols-outlined text-sm font-bold">add</span>
                                    </button>
                                    <button class="flex h-7 w-7 items-center justify-center rounded bg-primary text-white shadow hover:bg-blue-600 active:scale-95" title="Start Reading" wire:click="decrementProgress({{ $item->id }})">
                                        <span class="material-symbols-outlined text-sm font-bold">remove</span>
                                    </button>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg border border-blue-500 text-blue-500 text-xs font-bold hover:bg-blue-500 hover:text-white transition-all" href="{{ route('media-items.edit', $item->id) }}">
                                    <span class="material-symbols-outlined text-base">edit</span>
                                    <span>Edit</span>
                                </a>
                                <button
                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg border border-red-500 text-red-500 text-xs font-bold hover:bg-red-500 hover:text-white transition-all" wire:click="dropItem({{ $item->id }})">
                                    <span class="material-symbols-outlined text-base">delete</span>
                                    <span>Drop</span>
                                </button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- Pagination/Footer -->
        <div class="flex items-center justify-between mt-2">
            <p class="text-sm text-[#637588] dark:text-gray-400">
                @if($items->total() > 0)
                    Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} of {{ $items->total() }} titles
                @else
                    No titles found
                @endif
            </p>
            <div class="flex gap-2">
                {{-- Previous Page Button --}}
                @if ($items->onFirstPage())
                    <button class="flex items-center justify-center size-9 rounded-lg border border-[#dce0e5] dark:border-gray-800 text-[#637588] opacity-50 cursor-not-allowed" disabled>
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </button>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" class="flex items-center justify-center size-9 rounded-lg border border-[#dce0e5] dark:border-gray-800 text-[#637588] hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </button>
                @endif

                {{-- Page Numbers --}}
                @foreach ($items->getUrlRange(max(1, $items->currentPage() - 2), min($items->lastPage(), $items->currentPage() + 2)) as $page => $url)
                    @if ($page == $items->currentPage())
                        <button class="flex items-center justify-center size-9 rounded-lg bg-primary text-white font-bold shadow-sm" wire:key="page-{{ $page }}">{{ $page }}</button>
                    @else
                        <button wire:click="gotoPage({{ $page }})" wire:loading.attr="disabled" wire:key="page-{{ $page }}" class="flex items-center justify-center size-9 rounded-lg border border-[#dce0e5] dark:border-gray-800 text-[#637588] hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors font-medium">
                            {{ $page }}
                        </button>
                    @endif
                @endforeach

                {{-- Next Page Button --}}
                @if ($items->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" class="flex items-center justify-center size-9 rounded-lg border border-[#dce0e5] dark:border-gray-800 text-[#637588] hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <span class="material-symbols-outlined text-lg">chevron_right</span>
                    </button>
                @else
                    <button class="flex items-center justify-center size-9 rounded-lg border border-[#dce0e5] dark:border-gray-800 text-[#637588] opacity-50 cursor-not-allowed" disabled>
                        <span class="material-symbols-outlined text-lg">chevron_right</span>
                    </button>
                @endif
            </div>
        </div>
    </header>
</div>