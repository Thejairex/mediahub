<div class="mx-auto flex max-w-7xl flex-col gap-8">
    <!-- Page Heading & Actions -->
    <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
        <div class="flex flex-col gap-2">
            <h1 class="text-3xl font-black tracking-tight text-slate-900 dark:text-white md:text-4xl">Dashboard
            </h1>
            <p class="text-slate-500 dark:text-[#9dabb8]">Track your anime, manga, and novel progress.</p>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <button
                class="inline-flex h-10 items-center justify-center gap-2 rounded-lg bg-[#293038] px-4 text-sm font-bold text-white transition-colors hover:bg-[#374151] hover:text-white border border-transparent dark:border-[#404b5a]">
                <span class="material-symbols-outlined text-[20px]">upload</span>
                <span>Import</span>
            </button>
            <a
                class="inline-flex h-10 items-center justify-center gap-2 rounded-lg bg-primary px-4 text-sm font-bold text-white transition-colors hover:bg-blue-600" href="{{ route('media-items.create') }}">
                <span class="material-symbols-outlined text-[20px]">add</span>
                <span>Add New</span>
            </a>
        </div>
    </div>
    <!-- Toolbar: Filters -->
    <div
        class="flex flex-wrap items-center justify-between gap-4 rounded-xl bg-white p-4 shadow-sm dark:bg-surface-dark dark:shadow-none">
        <div class="flex flex-wrap items-center gap-3">
            <span
                class="text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-slate-500 mr-2">Filters:</span>
            <!-- Type Filter -->
            <div class="relative group">
                <button
                    class="flex h-9 items-center gap-2 rounded-lg border border-slate-200 bg-slate-50 px-3 text-sm font-medium text-slate-700 hover:bg-slate-100 dark:border-[#293038] dark:bg-[#293038] dark:text-white dark:hover:border-slate-600">
                    <span>Type: All</span>
                    <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
                </button>
            </div>
            <!-- Status Filter -->
            <div class="relative group">
                <button
                    class="flex h-9 items-center gap-2 rounded-lg border border-slate-200 bg-slate-50 px-3 text-sm font-medium text-slate-700 hover:bg-slate-100 dark:border-[#293038] dark:bg-[#293038] dark:text-white dark:hover:border-slate-600">
                    <span>Status: All</span>
                    <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
                </button>
            </div>
        </div>
        <!-- Search within table (Small) -->
        <div class="hidden sm:block">
            <button class="text-sm font-medium text-primary hover:text-blue-400">Clear all filters</button>
        </div>
    </div>
    <!-- Data Table Section -->
    <div
        class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm dark:border-[#293038] dark:bg-surface-dark dark:shadow-none">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-50 text-slate-500 dark:bg-[#222b36] dark:text-[#9dabb8]">
                    <tr>
                        <th class="whitespace-nowrap px-6 py-4 font-semibold">Title</th>
                        <th class="whitespace-nowrap px-6 py-4 font-semibold">Type</th>
                        <th class="whitespace-nowrap px-6 py-4 font-semibold">Status</th>
                        <th class="whitespace-nowrap px-6 py-4 font-semibold">Progress</th>
                        <th class="whitespace-nowrap px-6 py-4 text-right font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-[#293038]">
                    <!-- Row 1: Anime - Watching -->
                    {{-- <tr class="group hover:bg-slate-50 dark:hover:bg-[#1f2833] transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded bg-slate-200 dark:bg-[#293038]"
                                    data-alt="Frieren anime cover art thumbnail"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC5GH343eH45E1enHLGn0yfi6_yJNjPRu0iHgtjkBCu5iSsgh9B-5VxS59l21R6WAIHXXeIwiZPQXWdZum-lYs1V-DrYfFCV5FnESFMaJxjBJNxEhlBhJXWo6ySF6sqNcliOxLdkHPJajAmPZ6A8re6hz-CxSfuf5idhANSpbg0kaFVNouzpi1vRnO74rItcU3UZyAsePThHowDchWKJ_yX7Hb1r5NkAbeHCpDFVPNGbGbN4b6nmCamnj8PiZaMKmtLhAW4zjvXtEYA'); background-size: cover;">
                                </div>
                                <div class="font-medium text-slate-900 dark:text-white">Frieren: Beyond
                                    Journey's End</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center rounded-full bg-purple-100 px-2.5 py-0.5 text-xs font-medium text-purple-800 dark:bg-purple-900/30 dark:text-purple-300">
                                Anime
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-2 rounded-full bg-green-500"></div>
                                <span class="text-slate-700 dark:text-slate-300">Watching</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <span class="w-12 font-medium text-slate-900 dark:text-white">14 <span
                                        class="text-slate-400">/ 28</span></span>
                                <button
                                    class="flex h-7 w-7 items-center justify-center rounded bg-primary text-white shadow hover:bg-blue-600 active:scale-95"
                                    title="Increment Progress">
                                    <span class="material-symbols-outlined text-sm font-bold">add</span>
                                </button>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button
                                class="rounded p-1 text-slate-400 hover:bg-slate-100 hover:text-slate-600 dark:hover:bg-[#293038] dark:hover:text-white">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 2: Manga - Reading -->
                    <tr class="group hover:bg-slate-50 dark:hover:bg-[#1f2833] transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded bg-slate-200 dark:bg-[#293038]"
                                    data-alt="One Piece manga cover art thumbnail"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCI_f0wsnVtCNMrh4TB8NK-c6q8qK7dLhHrOLq567BuSBBboRc3GnDs9ELMw08klp6BLFliYX_jDWKwJcnBC6gDedVLZqnpGIjLcuxmZQHe2Y6xjuuTpZticyNyoTVEK345u-nImvuyXoRFmFWssdE_EA6ci4Spg3aSuTVnFInghMy9cNeu0VFvdwJWhIHuJoRLif4JjsQKgNidXyY3vgT75f-Np6vuaW32kbf8XvkpoDhzzDNiG0lFWN5YZJAVTC31Ct6WB5zwXH8j'); background-size: cover;">
                                </div>
                                <div class="font-medium text-slate-900 dark:text-white">One Piece</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center rounded-full bg-orange-100 px-2.5 py-0.5 text-xs font-medium text-orange-800 dark:bg-orange-900/30 dark:text-orange-300">
                                Manga
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-2 rounded-full bg-green-500"></div>
                                <span class="text-slate-700 dark:text-slate-300">Reading</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <span class="w-12 font-medium text-slate-900 dark:text-white">1089 <span
                                        class="text-slate-400">/ ?</span></span>
                                <button
                                    class="flex h-7 w-7 items-center justify-center rounded bg-primary text-white shadow hover:bg-blue-600 active:scale-95"
                                    title="Increment Progress">
                                    <span class="material-symbols-outlined text-sm font-bold">add</span>
                                </button>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button
                                class="rounded p-1 text-slate-400 hover:bg-slate-100 hover:text-slate-600 dark:hover:bg-[#293038] dark:hover:text-white">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 3: Novel - Completed -->
                    <tr class="group hover:bg-slate-50 dark:hover:bg-[#1f2833] transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded bg-slate-200 dark:bg-[#293038]"
                                    data-alt="Overlord novel cover art thumbnail"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAPqQTVbqIxddVNbd6Qtl2cZY4h7TYwjzYjmaSywzhrM9b--fpLXWPW7bxzrYmXJHj7kZshEiGdL5gCGUWFZoxtHfsUGfHtMCdie4V-aEAkOBq0QnfwXydOTILD0E5T361f2hoIhvuPDcg7tZg573AQ8wOLBpNmT-zBfki4bcpcr49l_UQxZ4TCqGt9CqNox87WM_I4MFGTpZO-D18oB7U0j5BAVwMZGL19uSmNB3Xdxfc1JlTv6nncz6PLN_V0dfdkQTQti7Xemggw'); background-size: cover;">
                                </div>
                                <div class="font-medium text-slate-900 dark:text-white">Overlord</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">
                                Novel
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-2 rounded-full bg-blue-500"></div>
                                <span class="text-slate-700 dark:text-slate-300">Completed</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <span class="w-12 font-medium text-slate-900 dark:text-white">Vol 16</span>
                                <!-- Disabled button for completed -->
                                <button
                                    class="flex h-7 w-7 cursor-not-allowed items-center justify-center rounded bg-slate-200 text-slate-400 dark:bg-[#293038] dark:text-slate-600"
                                    disabled="">
                                    <span class="material-symbols-outlined text-sm font-bold">check</span>
                                </button>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button
                                class="rounded p-1 text-slate-400 hover:bg-slate-100 hover:text-slate-600 dark:hover:bg-[#293038] dark:hover:text-white">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 4: Anime - On Hold -->
                    <tr class="group hover:bg-slate-50 dark:hover:bg-[#1f2833] transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded bg-slate-200 dark:bg-[#293038]"
                                    data-alt="Attack on Titan anime cover art thumbnail"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBbI0N-DOUuCjHuBpr9sh3p7jksO1tf1VUj0GpslDiN6-VokxU8-Q2f4QWevUWZb1v8KnyvZ49zbQLBoP3DDkJFQ9Dr78MaUfJrSfjIgeflOtHV2cXKRQERMqYGKy4mv1qDOZx6V9ZMk6CJghuCkt15cfKLBxoxP8Fv6ghy7QRzxOwnm28YMy9Io9dtZQ8owwukTh1i598rUV65qG0vxnh0ZuhZrXrreLnd-_2K2zzbpbrL-4m106eFTywK2UivnamS9NWU9gDtCM6E'); background-size: cover;">
                                </div>
                                <div class="font-medium text-slate-900 dark:text-white">Attack on Titan: The
                                    Final Season</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center rounded-full bg-purple-100 px-2.5 py-0.5 text-xs font-medium text-purple-800 dark:bg-purple-900/30 dark:text-purple-300">
                                Anime
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-2 rounded-full bg-yellow-500"></div>
                                <span class="text-slate-700 dark:text-slate-300">On Hold</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <span class="w-12 font-medium text-slate-900 dark:text-white">60 <span
                                        class="text-slate-400">/ 88</span></span>
                                <button
                                    class="flex h-7 w-7 items-center justify-center rounded bg-primary text-white shadow hover:bg-blue-600 active:scale-95"
                                    title="Increment Progress">
                                    <span class="material-symbols-outlined text-sm font-bold">add</span>
                                </button>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button
                                class="rounded p-1 text-slate-400 hover:bg-slate-100 hover:text-slate-600 dark:hover:bg-[#293038] dark:hover:text-white">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 5: Manga - Plan to Read -->
                    <tr class="group hover:bg-slate-50 dark:hover:bg-[#1f2833] transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded bg-slate-200 dark:bg-[#293038]"
                                    data-alt="Berserk manga cover art thumbnail"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCTjEVRqodSTtb-nGPvRrpOXQM3bfWAiSvrpl8VchPq_WJoaLonBPYWaZrNBhvwDQFJ_saThphutJbSvi0XNDPcQDDPwjrEIveVZz6r7xDZhkMVcUFAvU-JrLWIMgM_zsP222sNuHLORJoioeR1bJ3Oc5VnVBsUY3z3ulP1cpVgiZp1NM0UZuspLP3EUsIxqHVFxcqyRrP9upD6MY4msR3Zfe9bSoLFakJP4pYvDTjxv7MMe6FHokOeQVdFUaA4w0uGjDOjq9DjxUII'); background-size: cover;">
                                </div>
                                <div class="font-medium text-slate-900 dark:text-white">Berserk</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center rounded-full bg-orange-100 px-2.5 py-0.5 text-xs font-medium text-orange-800 dark:bg-orange-900/30 dark:text-orange-300">
                                Manga
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-2 rounded-full bg-slate-400"></div>
                                <span class="text-slate-700 dark:text-slate-300">Plan to Read</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <span class="w-12 font-medium text-slate-900 dark:text-white">0 <span
                                        class="text-slate-400">/ 364</span></span>
                                <button
                                    class="flex h-7 w-7 items-center justify-center rounded bg-primary text-white shadow hover:bg-blue-600 active:scale-95"
                                    title="Start Reading">
                                    <span class="material-symbols-outlined text-sm font-bold">play_arrow</span>
                                </button>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button
                                class="rounded p-1 text-slate-400 hover:bg-slate-100 hover:text-slate-600 dark:hover:bg-[#293038] dark:hover:text-white">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                        </td>
                    </tr> --}}
                    @foreach ($mediaItems as $item)
                        <tr class="group hover:bg-slate-50 dark:hover:bg-[#1f2833] transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="h-10 w-10 shrink-0 overflow-hidden rounded bg-slate-200 dark:bg-[#293038]"
                                        data-alt="Frieren anime cover art thumbnail"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC5GH343eH45E1enHLGn0yfi6_yJNjPRu0iHgtjkBCu5iSsgh9B-5VxS59l21R6WAIHXXeIwiZPQXWdZum-lYs1V-DrYfFCV5FnESFMaJxjBJNxEhlBhJXWo6ySF6sqNcliOxLdkHPJajAmPZ6A8re6hz-CxSfuf5idhANSpbg0kaFVNouzpi1vRnO74rItcU3UZyAsePThHowDchWKJ_yX7Hb1r5NkAbeHCpDFVPNGbGbN4b6nmCamnj8PiZaMKmtLhAW4zjvXtEYA'); background-size: cover;">
                                    </div>
                                    <div class="font-medium text-slate-900 dark:text-white">{{ $item->name }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    @switch($item->type)
                                        @case('anime')
                                        class="inline-flex items-center rounded-full bg-purple-100 px-2.5 py-0.5 text-xs font-medium text-purple-800 dark:bg-purple-900/30 dark:text-purple-300"
                                            @break
                                        @case('manga')
                                        class="inline-flex items-center rounded-full bg-orange-100 px-2.5 py-0.5 text-xs font-medium text-orange-800 dark:bg-orange-900/30 dark:text-orange-300"
                                            @break

                                        @case('novel')
                                        class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900/30 dark:text-blue-300"
                                            @break
                                        @default

                                    @endswitch>
                                    {{ ucfirst(strtolower($item->type)) }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    {{-- <div class="h-2 w-2 rounded-full bg-green-500"></div> --}}
                                    @switch($item->status)
                                        @case('watching')
                                            <div class="h-2 w-2 rounded-full bg-green-500"></div>
                                            @break
                                        @case('completed')
                                            <div class="h-2 w-2 rounded-full bg-blue-500"></div>
                                            @break
                                        @case('on_hold')
                                           <div class="h-2 w-2 rounded-full bg-orange-300"></div>
                                            @break
                                        @case('dropped')
                                            <div class="h-2 w-2 rounded-full bg-red-500"></div>
                                            @break
                                        @case('plan_to_watch')
                                            <div class="h-2 w-2 rounded-full bg-gray-500"></div>
                                            @break
                                        @default

                                    @endswitch
                                    <span class="text-slate-700 dark:text-slate-300">{{ $item->statusNice[$item->status] }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="w-12 font-medium text-slate-900 dark:text-white">{{ $item->progress_current }}<span
                                            class="text-slate-400">/ {{ $item->progress_total ?? '?' }}</span></span>
                                    <button
                                        class="flex h-7 w-7 items-center justify-center rounded bg-primary text-white shadow hover:bg-blue-600 active:scale-95"
                                        title="Increment Progress"
                                        wire:click="incrementProgress({{ $item->id }})">
                                        <span class="material-symbols-outlined text-sm font-bold">add</span>
                                    </button>
                                    <button
                                        class="flex h-7 w-7 items-center justify-center rounded bg-primary text-white shadow hover:bg-red-600 active:scale-95"
                                        title="Decrement Progress"
                                        wire:click="decrementProgress({{ $item->id }})">
                                        <span class="material-symbols-outlined text-sm font-bold">remove</span>
                                    </button>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button
                                    class="rounded p-1 text-slate-400 hover:bg-slate-100 hover:text-slate-600 dark:hover:bg-[#293038] dark:hover:text-white">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <!-- Pagination / Footer -->
        <div
            class="flex items-center justify-between border-t border-slate-200 bg-slate-50 px-6 py-3 dark:border-[#293038] dark:bg-[#1d2530]">
            <div class="text-xs text-slate-500 dark:text-slate-400">
                Showing <span class="font-medium text-slate-900 dark:text-white">1</span> to <span
                    class="font-medium text-slate-900 dark:text-white">5</span> of <span
                    class="font-medium text-slate-900 dark:text-white">128</span> results
            </div>
            <div class="flex gap-2">
                <button
                    class="flex h-8 items-center justify-center rounded border border-slate-200 bg-white px-3 text-sm font-medium text-slate-500 hover:bg-slate-50 disabled:opacity-50 dark:border-[#293038] dark:bg-[#293038] dark:text-slate-400 dark:hover:bg-[#323b46]"
                    disabled="">
                    Previous
                </button>
                <button
                    class="flex h-8 items-center justify-center rounded border border-slate-200 bg-white px-3 text-sm font-medium text-slate-700 hover:bg-slate-50 dark:border-[#293038] dark:bg-[#293038] dark:text-white dark:hover:bg-[#323b46]">
                    Next
                </button>
            </div>
        </div>
    </div>
</div>
