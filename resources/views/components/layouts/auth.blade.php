<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $title ?? 'Media Hub' }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
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
        <aside
            class="w-50 flex flex-col border-r border-solid border-[#f0f2f4] dark:border-[#2a3441] bg-white dark:bg-[#1a232e] z-10">
            <div class="p-6">
                <div class="flex items-center gap-2 mb-1">
                    <div class="bg-primary text-white p-1 rounded">
                        <span class="material-symbols-outlined text-lg">stacked_bar_chart</span>
                    </div>
                    <h1 class="text-xl font-bold tracking-tight">Media Hub</h1>
                </div>
                <p class="text-[#637588] dark:text-[#a0aec0] text-xs uppercase tracking-widest font-semibold">Personal
                    Tracker</p>
            </div>
            <nav class="flex-1 px-4 space-y-1">
                
                <a @class([
                    'flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors',
                    'active-nav' => request()->routeIs('dashboard'),
                    'text-[#637588] dark:text-[#a0aec0] hover:bg-gray-50 dark:hover:bg-gray-800' => !request()->routeIs('dashboard'),
                ]) href="{{ route('dashboard') }}">
                    <span class="material-symbols-outlined">home</span>
                    <span class="text-sm font-medium">Home</span>
                </a>
                <a @class([
                    'flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors',
                    'active-nav' => request()->routeIs('media-items.library'),
                    'text-[#637588] dark:text-[#a0aec0] hover:bg-gray-50 dark:hover:bg-gray-800' => !request()->routeIs('media-items.library'),
                ]) href="{{ route('media-items.library') }}">
                    <span class="material-symbols-outlined">library_books</span>
                    <span class="text-sm font-medium">Library</span>
                </a>
                <a @class([
                    'flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors',
                    'active-nav' => request()->routeIs('media-items.*') && (request('type') == 'anime' || (request()->route('media_item') && request()->route('media_item')->type == 'anime')),
                    'text-[#637588] dark:text-[#a0aec0] hover:bg-gray-50 dark:hover:bg-gray-800' => !(request()->routeIs('media-items.*') && (request('type') == 'anime' || (request()->route('media_item') && request()->route('media_item')->type == 'anime'))),
                ])    href="{{ route('media-items.index', ['type' => 'anime']) }}">
                    <span class="material-symbols-outlined">play_circle</span>
                    <span class="text-sm font-medium">Anime</span>
                </a>
                <a @class([
                    'flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors',
                    'active-nav' => request()->routeIs('media-items.*') && (request('type') == 'manga' || (request()->route('media_item') && request()->route('media_item')->type == 'manga')),
                    'text-[#637588] dark:text-[#a0aec0] hover:bg-gray-50 dark:hover:bg-gray-800' => !(request()->routeIs('media-items.*') && (request('type') == 'manga' || (request()->route('media_item') && request()->route('media_item')->type == 'manga'))),
                ]) href="{{ route('media-items.index', ['type' => 'manga']) }}">
                    <span class="material-symbols-outlined">menu_book</span>
                    <span class="text-sm font-medium">Manga</span>
                </a>
                <a @class([
                    'flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors',
                    'active-nav' => request()->routeIs('media-items.*') && (request('type') == 'novel' || (request()->route('media_item') && request()->route('media_item')->type == 'novel')),
                    'text-[#637588] dark:text-[#a0aec0] hover:bg-gray-50 dark:hover:bg-gray-800' => !(request()->routeIs('media-items.*') && (request('type') == 'novel' || (request()->route('media_item') && request()->route('media_item')->type == 'novel'))),
                ]) href="{{ route('media-items.index', ['type' => 'novel']) }}">
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
            <header
                class="h-16 flex items-center justify-between px-8 bg-white dark:bg-[#1a232e] border-b border-[#f0f2f4] dark:border-[#2a3441] sticky top-0 z-20">
                <h2 class="text-lg font-bold">{{ $title ?? 'Dashboard' }}</h2>
                <div class="flex items-center gap-4">
                    <div class="relative max-w-xs">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#637588] text-xl">search</span>
                        <input
                            class="w-64 pl-10 pr-4 py-1.5 bg-[#f0f2f4] dark:bg-gray-800 border-none rounded-lg text-sm focus:ring-2 focus:ring-primary"
                            placeholder="Search your library..." type="text" />
                    </div>
                    <button
                        class="p-2 text-[#637588] dark:text-[#a0aec0] hover:bg-[#f0f2f4] dark:hover:bg-gray-800 rounded-full transition-colors">
                        <span class="material-symbols-outlined">notifications</span>
                    </button>
                </div>
            </header>
            {{ $slot }}
        </main>
    </div>
</body>

</html>