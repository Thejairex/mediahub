<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Media Hub - Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "primary": "#197fe6",
                "background-light": "#f6f7f8",
                "background-dark": "#111921",
              },
              fontFamily: {
                "display": ["Inter", "sans-serif"]
              },
              borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
            },
          },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-nav {
            background-color: #f0f2f4;
            color: #197fe6 !important;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white transition-colors duration-200">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar -->
<aside class="w-64 flex flex-col border-r border-solid border-[#f0f2f4] dark:border-[#2a3441] bg-white dark:bg-[#1a232e] z-10">
<div class="p-6">
<div class="flex items-center gap-2 mb-1">
<div class="bg-primary text-white p-1 rounded">
<span class="material-symbols-outlined text-lg">stacked_bar_chart</span>
</div>
<h1 class="text-xl font-bold tracking-tight">Media Hub</h1>
</div>
<p class="text-[#637588] dark:text-[#a0aec0] text-xs uppercase tracking-widest font-semibold">Personal Tracker</p>
</div>
<nav class="flex-1 px-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg active-nav" href="#">
<span class="material-symbols-outlined">home</span>
<span class="text-sm font-medium">Home</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#637588] dark:text-[#a0aec0] hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">play_circle</span>
<span class="text-sm font-medium">Anime</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#637588] dark:text-[#a0aec0] hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">menu_book</span>
<span class="text-sm font-medium">Manga</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#637588] dark:text-[#a0aec0] hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" href="#">
<span class="material-symbols-outlined">auto_stories</span>
<span class="text-sm font-medium">Novels</span>
</a>
</nav>
<div class="p-4 border-t border-[#f0f2f4] dark:border-[#2a3441]">
<div class="flex items-center gap-3 px-3 py-2">
<div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-sm">person</span>
</div>
<div class="overflow-hidden">
<p class="text-sm font-semibold truncate">Alex Reader</p>
<p class="text-[10px] text-[#637588] dark:text-[#a0aec0]">Premium Member</p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 overflow-y-auto flex flex-col">
<!-- Top Header -->
<header class="h-16 flex items-center justify-between px-8 bg-white dark:bg-[#1a232e] border-b border-[#f0f2f4] dark:border-[#2a3441] sticky top-0 z-20">
<h2 class="text-lg font-bold">Dashboard Summary</h2>
<div class="flex items-center gap-4">
<div class="relative max-w-xs">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#637588] text-xl">search</span>
<input class="w-64 pl-10 pr-4 py-1.5 bg-[#f0f2f4] dark:bg-gray-800 border-none rounded-lg text-sm focus:ring-2 focus:ring-primary" placeholder="Search your library..." type="text"/>
</div>
<button class="p-2 text-[#637588] dark:text-[#a0aec0] hover:bg-[#f0f2f4] dark:hover:bg-gray-800 rounded-full transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
</div>
</header>
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
<div class="bg-white dark:bg-[#1a232e] rounded-xl p-3 border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm hover:shadow-md transition-shadow">
<div class="relative w-full aspect-video rounded-lg overflow-hidden bg-gray-200 mb-3">
<img class="w-full h-full object-cover" data-alt="Abstract vibrant comic style artwork" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxVS3jKxcGqzlrnYm8b18vcV78_318TH4EfkGPbUG6L1xKPpaBgQqctQJvXAVZjABXDrcyuupf04YPT75o-HHEFTO1jcznpBxv5cZmKe0j7fDAxjiQfVPYEUf5udxiSX9P-4c1s7eJX72aSxGorqjYKgcLH13KjVoJOEI0c7uOO6ghryimnpizZ7nuoXtrbiRTepKPfdeM4QqDFw521zftMB1LcimoJ-j1Ru8QSImvbngA88tdAbK4DQ0ixneHLiaCDDPUd5F1gph6"/>
<span class="absolute top-2 right-2 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded backdrop-blur-sm">Manga</span>
</div>
<h4 class="text-sm font-bold truncate">Chainsaw Man</h4>
<p class="text-xs text-[#637588] dark:text-[#a0aec0] mt-0.5">Chapter 120</p>
<div class="mt-3">
<div class="flex justify-between text-[10px] mb-1">
<span class="text-[#637588] dark:text-[#a0aec0]">Progress</span>
<span class="font-bold">85%</span>
</div>
<div class="w-full h-1.5 bg-[#f0f2f4] dark:bg-gray-700 rounded-full">
<div class="h-full bg-primary rounded-full" style="width: 85%"></div>
</div>
</div>
</div>
<!-- Item 2 -->
<div class="bg-white dark:bg-[#1a232e] rounded-xl p-3 border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm hover:shadow-md transition-shadow">
<div class="relative w-full aspect-video rounded-lg overflow-hidden bg-gray-200 mb-3">
<img class="w-full h-full object-cover" data-alt="Stylized landscape with fantasy elements" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCBKLufu9CZ-B8ztW3Xb_m2MEdQsiUgRVftegSIAp2FoxV3jbFJsjKKDzgYxxO0wuGSr2xTjX-r0_haZLPjovksoKLWhlZC73Uzgdaua32hqeJbamd0_X5pYPY2cOcB_mVMsD0XaJcZsebgtBUOuoRzEWKN62kxaLbM6hbKoQJfifeN_Tko1Y23EvbEw9d9OD3k-FZnXNsgjk-0UkNcyMMBBIQ5OYLVwCS_FW0ceaokh0z_M5VmIjm6avWPGUjwsl0eNrPXoUKar4P"/>
<span class="absolute top-2 right-2 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded backdrop-blur-sm">Anime</span>
</div>
<h4 class="text-sm font-bold truncate">Frieren: Beyond Journey's End</h4>
<p class="text-xs text-[#637588] dark:text-[#a0aec0] mt-0.5">Episode 24</p>
<div class="mt-3">
<div class="flex justify-between text-[10px] mb-1">
<span class="text-[#637588] dark:text-[#a0aec0]">Progress</span>
<span class="font-bold">90%</span>
</div>
<div class="w-full h-1.5 bg-[#f0f2f4] dark:bg-gray-700 rounded-full">
<div class="h-full bg-primary rounded-full" style="width: 90%"></div>
</div>
</div>
</div>
<!-- Item 3 -->
<div class="bg-white dark:bg-[#1a232e] rounded-xl p-3 border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm hover:shadow-md transition-shadow">
<div class="relative w-full aspect-video rounded-lg overflow-hidden bg-gray-200 mb-3">
<img class="w-full h-full object-cover" data-alt="Old book cover with detailed textures" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUzYohSqcsGe83AMft7yudv9VWeb3sxq-6XORcTtIqrN7Lf9GuNleTYij8Z3uZ0IoGQQHtloZmG0es9mNcD3TqSt-enLoaQHqmj9AYrSY820L4sW-NP5dyE6mwp9MmWYuS_wxKk1sdZ2MCSmLW-2NzbJjF_XWHVTDVqx5IYMt1Iw9DPEHG5V-zVcxrWc39B5mZLhubH1rTK-sqTDF2r-VdHd89xlLR3b5oLEjthhYJk6G0LePIPcrqk5CekTQ8CyLeJAtjpgTxen1A"/>
<span class="absolute top-2 right-2 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded backdrop-blur-sm">Novel</span>
</div>
<h4 class="text-sm font-bold truncate">The Rising of the Shield Hero</h4>
<p class="text-xs text-[#637588] dark:text-[#a0aec0] mt-0.5">Volume 5</p>
<div class="mt-3">
<div class="flex justify-between text-[10px] mb-1">
<span class="text-[#637588] dark:text-[#a0aec0]">Progress</span>
<span class="font-bold">40%</span>
</div>
<div class="w-full h-1.5 bg-[#f0f2f4] dark:bg-gray-700 rounded-full">
<div class="h-full bg-primary rounded-full" style="width: 40%"></div>
</div>
</div>
</div>
<!-- Item 4 -->
<div class="bg-white dark:bg-[#1a232e] rounded-xl p-3 border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm hover:shadow-md transition-shadow">
<div class="relative w-full aspect-video rounded-lg overflow-hidden bg-gray-200 mb-3">
<img class="w-full h-full object-cover" data-alt="Neon blue and purple futuristic patterns" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtzqc39LC5VznZCevFVRXBU9JZQJXelXT4-np7U8mzk8wv_HwOZMj7o_W1LPPwyNRfdNIc0aS2KyZNeMMT_gpa8jEva0DE8bjLq3Y-WsCwOFR9mCAdUNK99hmwPnXV02U2nClgrbbttRc3jnKbbowLMVDnIuErlWtDP3Gyy08b8lKQHtTvIhPvGKi-DPeXvhBuicpoWJwp0BK3-DUMv7Mf-YcTZwVv6omtcDS7AHBk1PLLYj-i2Y0HwBdJyEP6jS_feJNeM7Sztseh"/>
<span class="absolute top-2 right-2 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded backdrop-blur-sm">Manga</span>
</div>
<h4 class="text-sm font-bold truncate">Solo Leveling</h4>
<p class="text-xs text-[#637588] dark:text-[#a0aec0] mt-0.5">Chapter 170</p>
<div class="mt-3">
<div class="flex justify-between text-[10px] mb-1">
<span class="text-[#637588] dark:text-[#a0aec0]">Progress</span>
<span class="font-bold">95%</span>
</div>
<div class="w-full h-1.5 bg-[#f0f2f4] dark:bg-gray-700 rounded-full">
<div class="h-full bg-primary rounded-full" style="width: 95%"></div>
</div>
</div>
</div>
</div>
</section>
<!-- Quick Stats -->
<section class="grid grid-cols-2 md:grid-cols-4 gap-4">
<div class="bg-white dark:bg-[#1a232e] p-4 rounded-xl border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm text-center">
<p class="text-xs font-medium text-[#637588] dark:text-[#a0aec0] mb-1">Anime Tracked</p>
<p class="text-2xl font-bold">12</p>
</div>
<div class="bg-white dark:bg-[#1a232e] p-4 rounded-xl border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm text-center">
<p class="text-xs font-medium text-[#637588] dark:text-[#a0aec0] mb-1">Manga Tracked</p>
<p class="text-2xl font-bold">45</p>
</div>
<div class="bg-white dark:bg-[#1a232e] p-4 rounded-xl border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm text-center">
<p class="text-xs font-medium text-[#637588] dark:text-[#a0aec0] mb-1">Novels Tracked</p>
<p class="text-2xl font-bold">5</p>
</div>
<div class="bg-white dark:bg-[#1a232e] p-4 rounded-xl border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm text-center border-l-4 border-l-primary">
<p class="text-xs font-medium text-primary mb-1">Total Items</p>
<p class="text-2xl font-bold">62</p>
</div>
</section>
<!-- Recent Activity Table -->
<section class="bg-white dark:bg-[#1a232e] rounded-xl border border-[#f0f2f4] dark:border-[#2a3441] shadow-sm overflow-hidden">
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
<img class="w-full h-full object-cover rounded" data-alt="Chainsaw Man thumbnail" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDY0-yXvyqj15aXWcM7nThBX5kmNkO0crmBlTL52LvCivXXzMp-X3J6L_IepS6I4XSfpayQK9wGK_YrzrjVYMQ3xgyvUYy5IVg5HxIml6SVd6zLch7WKwkLpJuKKtxwkPnOO0ywXQt9EcvVXEFPQhEqVFrtCa4rp_yfQRMlSAhvWBnQ_dyobKeEgIoPE1KUVPNN79XmOMZpt5AsDy3RmWYWXFxq2taPe-i5Tl4WxLOU37QwwyHxVPskAEagvL7Fki8ctP3wj44YzxZ9"/>
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
<img class="w-full h-full object-cover rounded" data-alt="Frieren thumbnail" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzZjd7d7TsHwTbFCspriHPm0qJBGr8zB6KPzMwqC3bmENbGqXqNbh_oHcyrmm2tTP6FI4uY3K-6DX6hsFZEWyOkpuMHjp8XNtTVUfE82cAbGgVgYiIQaUXGSl9r1uu8CDVgRsEYmQ6SQmevRqszza7aTiKe0iB0n3twWnyeJZLlCPloYYuPQ1lnPiZcO6ku_y_vzhOshY1TXwlVVSzuDR2HtY6lKL4tDWwEny8nnVi7bp4P-3ncidPcUn0Vq81Zaxsq3dUxR6X5bUC"/>
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
<img class="w-full h-full object-cover rounded" data-alt="Shield Hero thumbnail" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUXDweiVVpSpSWuvyQ8E585pLBIRCE2zX1x4H2AeTj-szb7N040FTFr3COQtWUgIZzwvXSo5anNgRzFBwa5fvwypF85_9wiUkD_Wwh0S_5sYBtNhiedqDoMBM3VgRftRRjiaHXDUsd187IxSndXuLa3Wuml7n7GO56lO12gKxVHVrLhe4GPtWeQT_bBygXs34AphBl7vkgDi-c5XX5LMuPAp171SHm0IoWLuS-EnEkirQCCd_mlZ_Flg3r8R1WyyzoXThl_XceqRnm"/>
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
</main>
</div>
</body></html>