<x-layouts.auth>
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
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-md p-4">
        <!-- Success Card -->
        <div
            class="w-full max-w-[520px] bg-slate-card dark:bg-[#152415] border border-primary/20 rounded-xl shadow-2xl p-8 md:p-12 flex flex-col items-center text-center">
            <!-- Minimalist Success Icon -->
            <div class="mb-8 relative">
                <div class="absolute inset-0 bg-primary/20 rounded-full blur-xl scale-150"></div>
                <div
                    class="relative flex items-center justify-center size-24 rounded-full border-2 border-primary/30 bg-primary/5">
                    <span class="material-symbols-outlined text-primary text-5xl font-light">check</span>
                </div>
            </div>
            <!-- Heading -->
            <h1 class="text-3xl font-bold tracking-tight text-white mb-3">Import Successful</h1>
            <!-- Summary Description -->
            <p class="text-slate-400 text-lg mb-10 max-w-[340px] leading-relaxed">
                142 items have been successfully added to your library.
            </p>
            <!-- Breakdown Grid -->
            <div class="grid grid-cols-3 w-full gap-4 mb-10">
                <div class="flex flex-col items-center p-4 rounded-lg bg-primary/5 border border-primary/10">
                    <span class="text-slate-400 text-xs font-medium uppercase tracking-wider mb-1">Anime</span>
                    <span class="text-2xl font-bold text-white">45</span>
                </div>
                <div class="flex flex-col items-center p-4 rounded-lg bg-primary/5 border border-primary/10">
                    <span class="text-slate-400 text-xs font-medium uppercase tracking-wider mb-1">Manga</span>
                    <span class="text-2xl font-bold text-white">82</span>
                </div>
                <div class="flex flex-col items-center p-4 rounded-lg bg-primary/5 border border-primary/10">
                    <span class="text-slate-400 text-xs font-medium uppercase tracking-wider mb-1">Novels</span>
                    <span class="text-2xl font-bold text-white">15</span>
                </div>
            </div>
            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 w-full">
                <button
                    class="flex-1 h-14 bg-primary hover:bg-primary/90 text-background-dark font-bold rounded-lg transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-xl">auto_stories</span>
                    Go to Library
                </button>
                <button
                    class="flex-1 h-14 bg-white/5 hover:bg-white/10 text-white font-semibold rounded-lg border border-white/10 transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-xl">history</span>
                    Recent Updates
                </button>
            </div>
            <!-- Dismiss Note -->
            <button class="mt-8 text-slate-500 hover:text-slate-300 text-sm font-medium transition-colors">
                Back to Dashboard
            </button>
        </div>
    </div>
    <!-- Background Decorative Element -->
    <div
        class="fixed bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-primary/50 to-transparent opacity-30">
    </div>

</x-layouts.auth>