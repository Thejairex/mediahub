<div class="p-8 max-w-[1200px] mx-auto w-full space-y-8">
    <!-- Continue Watching/Reading -->
    <section>
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-base font-bold flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">update</span>
                Continue Watching/Reading
            </h3>
            <a class="text-primary text-xs font-semibold hover:underline" href="#">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Item 1 -->

            @for ($i = 0; $i < 4; $i++)

                <div
                    class="bg-white dark:bg-[#1a232e] rounded-xl p-3 border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative w-full aspect-video rounded-lg overflow-hidden bg-gray-200 mb-3">
                        @if ($mediaItems[$i]->image_url != null)
                            <img class="w-full h-full object-cover" data-alt="Abstract vibrant comic style artwork"
                                src="{{ $mediaItems[$i]->image_url }}" />
                        @else
                            <img class="w-full h-full object-cover" data-alt="Abstract vibrant comic style artwork"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxVS3jKxcGqzlrnYm8b18vcV78_318TH4EfkGPbUG6L1xKPpaBgQqctQJvXAVZjABXDrcyuupf04YPT75o-HHEFTO1jcznpBxv5cZmKe0j7fDAxjiQfVPYEUf5udxiSX9P-4c1s7eJX72aSxGorqjYKgcLH13KjVoJOEI0c7uOO6ghryimnpizZ7nuoXtrbiRTepKPfdeM4QqDFw521zftMB1LcimoJ-j1Ru8QSImvbngA88tdAbK4DQ0ixneHLiaCDDPUd5F1gph6" />
                        @endif
                        <span
                            class="absolute top-2 right-2 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded backdrop-blur-sm">{{ ucwords($mediaItems[$i]->type) }}</span>
                    </div>
                    <h4 class="text-sm font-bold truncate">{{ $mediaItems[$i]->name }}</h4>
                    <p class="text-xs text-[#637588] dark:text-[#a0aec0] mt-0.5">{{ $mediaItems[$i]->progress_current }}/{{ $mediaItems[$i]->progress_total }}</p>
                    <div class="mt-3">
                        <div class="flex justify-between text-[10px] mb-1">
                            <span class="text-[#637588] dark:text-[#a0aec0]">Progress</span>
                            @if ($mediaItems[$i]->progress_total > 0)
                                <span class="font-bold">{{ round($mediaItems[$i]->progress_current / $mediaItems[$i]->progress_total * 100, 2) }}%</span>
                            @else
                                <span class="font-bold">100%</span>
                            @endif
                        </div>
                        <div class="w-full h-1.5 bg-[#f0f2f4] dark:bg-gray-700 rounded-full">
                            @if ($mediaItems[$i]->progress_total > 0)
                                <div class="h-full bg-primary rounded-full" style="width: {{ $mediaItems[$i]->progress_current / $mediaItems[$i]->progress_total * 100 }}%"></div>
                            @else
                                <div class="h-full bg-primary rounded-full" style="width: 100%"></div>
                            @endif
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </section>
    <!-- Quick Stats -->
    <section class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div
            class="bg-white dark:bg-[#1a232e] p-4 rounded-xl border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm text-center">
            <p class="text-xs font-medium text-[#637588] dark:text-[#a0aec0] mb-1">Anime Tracked</p>
            <p class="text-2xl font-bold">12</p>
        </div>
        <div
            class="bg-white dark:bg-[#1a232e] p-4 rounded-xl border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm text-center">
            <p class="text-xs font-medium text-[#637588] dark:text-[#a0aec0] mb-1">Manga Tracked</p>
            <p class="text-2xl font-bold">45</p>
        </div>
        <div
            class="bg-white dark:bg-[#1a232e] p-4 rounded-xl border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm text-center">
            <p class="text-xs font-medium text-[#637588] dark:text-[#a0aec0] mb-1">Novels Tracked</p>
            <p class="text-2xl font-bold">5</p>
        </div>
        <div
            class="bg-white dark:bg-[#1a232e] p-4 rounded-xl border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm text-center border-l-4 border-l-primary">
            <p class="text-xs font-medium text-primary mb-1">Total Items</p>
            <p class="text-2xl font-bold">62</p>
        </div>
    </section>
    <!-- Recent Activity Table -->
    <section
        class="bg-white dark:bg-[#1a232e] rounded-xl border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm overflow-hidden">
        <div class="p-5 border-b border-[#f0f2f4] dark:border-[#2a3441] flex items-center justify-between">
            <h3 class="text-base font-bold">Recent Activity</h3>
            <button class="p-1.5 hover:bg-[#f0f2f4] dark:hover:bg-gray-800 rounded-lg">
                <span class="material-symbols-outlined text-xl">filter_list</span>
            </button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-[10px] uppercase text-[#637588] dark:text-[#a0aec0] bg-gray-50 dark:bg-gray-800/50">
                        <th class="px-6 py-3 font-semibold">Media</th>
                        <th class="px-6 py-3 font-semibold">Activity</th>
                        <th class="px-6 py-3 font-semibold">Date</th>
                        <th class="px-6 py-3 font-semibold"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#f0f2f4] dark:divide-[#2a3441]">
                    <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded bg-gray-100 dark:bg-gray-700 flex-shrink-0">
                                    <img class="w-full h-full object-cover rounded" data-alt="Chainsaw Man thumbnail"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDY0-yXvyqj15aXWcM7nThBX5kmNkO0crmBlTL52LvCivXXzMp-X3J6L_IepS6I4XSfpayQK9wGK_YrzrjVYMQ3xgyvUYy5IVg5HxIml6SVd6zLch7WKwkLpJuKKtxwkPnOO0ywXQt9EcvVXEFPQhEqVFrtCa4rp_yfQRMlSAhvWBnQ_dyobKeEgIoPE1KUVPNN79XmOMZpt5AsDy3RmWYWXFxq2taPe-i5Tl4WxLOU37QwwyHxVPskAEagvL7Fki8ctP3wj44YzxZ9" />
                                </div>
                                <div>
                                    <p class="text-sm font-semibold">Chainsaw Man</p>
                                    <p class="text-[10px] text-[#637588]">Manga</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-[#111418] dark:text-gray-300">Updated to Chapter 120</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-xs text-[#637588] dark:text-[#a0aec0]">2 hours ago</p>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-[#637588] hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-xl">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded bg-gray-100 dark:bg-gray-700 flex-shrink-0">
                                    <img class="w-full h-full object-cover rounded" data-alt="Frieren thumbnail"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzZjd7d7TsHwTbFCspriHPm0qJBGr8zB6KPzMwqC3bmENbGqXqNbh_oHcyrmm2tTP6FI4uY3K-6DX6hsFZEWyOkpuMHjp8XNtTVUfE82cAbGgVgYiIQaUXGSl9r1uu8CDVgRsEYmQ6SQmevRqszza7aTiKe0iB0n3twWnyeJZLlCPloYYuPQ1lnPiZcO6ku_y_vzhOshY1TXwlVVSzuDR2HtY6lKL4tDWwEny8nnVi7bp4P-3ncidPcUn0Vq81Zaxsq3dUxR6X5bUC" />
                                </div>
                                <div>
                                    <p class="text-sm font-semibold">Frieren</p>
                                    <p class="text-[10px] text-[#637588]">Anime</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-[#111418] dark:text-gray-300">Watched Episode 24</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-xs text-[#637588] dark:text-[#a0aec0]">Yesterday</p>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-[#637588] hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-xl">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded bg-gray-100 dark:bg-gray-700 flex-shrink-0">
                                    <img class="w-full h-full object-cover rounded" data-alt="Shield Hero thumbnail"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUXDweiVVpSpSWuvyQ8E585pLBIRCE2zX1x4H2AeTj-szb7N040FTFr3COQtWUgIZzwvXSo5anNgRzFBwa5fvwypF85_9wiUkD_Wwh0S_5sYBtNhiedqDoMBM3VgRftRRjiaHXDUsd187IxSndXuLa3Wuml7n7GO56lO12gKxVHVrLhe4GPtWeQT_bBygXs34AphBl7vkgDi-c5XX5LMuPAp171SHm0IoWLuS-EnEkirQCCd_mlZ_Flg3r8R1WyyzoXThl_XceqRnm" />
                                </div>
                                <div>
                                    <p class="text-sm font-semibold">The Rising of the Shield Hero</p>
                                    <p class="text-[10px] text-[#637588]">Novel</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-[#111418] dark:text-gray-300">Finished Volume 4</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-xs text-[#637588] dark:text-[#a0aec0]">3 days ago</p>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-[#637588] hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-xl">more_vert</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-4 flex justify-center border-t border-[#f0f2f4] dark:border-[#2a3441]">
            <button class="text-sm text-[#637588] hover:text-primary font-medium flex items-center gap-1">
                Show more activity
                <span class="material-symbols-outlined text-sm">expand_more</span>
            </button>
        </div>
    </section>
</div>