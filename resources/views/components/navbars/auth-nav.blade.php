<header
    class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-[#293038] bg-white dark:bg-[#111418] px-4 py-3 lg:px-10">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4">
        <!-- Logo & Search -->
        <div class="flex flex-1 items-center gap-4 lg:gap-8">
            <div class="flex items-center gap-3 text-primary dark:text-white shrink-0">
                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-2xl">play_circle</span>
                </div>
                <h2 class="hidden text-lg font-bold tracking-tight text-slate-900 dark:text-white sm:block">MediaHub
                </h2>
            </div>
            <!-- Search Bar -->
            <div class="relative flex w-full max-w-md items-center">
                <div class="absolute left-3 flex items-center text-slate-400">
                    <span class="material-symbols-outlined text-[20px]">search</span>
                </div>
                <input
                    class="h-10 w-full rounded-lg border-none bg-slate-100 dark:bg-[#293038] pl-10 pr-4 text-sm text-slate-900 dark:text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-primary/50"
                    placeholder="Search titles..." value="" />
            </div>
        </div>
        <!-- Profile / User Actions -->
        @auth
            <div class="flex items-center justify-end gap-4">
                <button
                    class="hidden rounded-lg px-4 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-[#293038] sm:block">
                    Log out
                </button>
                <div class="h-9 w-9 overflow-hidden rounded-full bg-slate-200 dark:bg-[#293038] ring-2 ring-white dark:ring-[#293038]"
                    data-alt="User profile picture"
                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDOJtwJollk9ndLWwMET_LlwJwrNUwsZFnsX9cQ6LCKxck_q86Xq5sSBM6Vfm__o-8E3brotXj7ISbf_f4ABvmqSOP-N2cj8QwBqPGRXVp2DJ3lBq9YaTEdY3HzAbDqCIaJWmbrGX_03_KbH3_tX-clC8Juf0R6oSe7qqph76_WcpDf5dAU6DMJgYpBT9TQZJ03S1J2I7chtao-iIXjuTW0eOsc7QHgl1pqmZfKC-kDFZFHmYLwFka2OUZVJpFWEVPp0qX2DpdUVoIl'); background-size: cover; background-position: center;">
                </div>
            </div>
        @endauth
    </div>
</header>