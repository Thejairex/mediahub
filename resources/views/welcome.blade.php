<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Media Hub - Track Your Anime, Manga, and Novels</title>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS with Config -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #334155;
        }

        .dark ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display antialiased overflow-x-hidden transition-colors duration-300">
    <div class="relative flex min-h-screen flex-col">
        <!-- Header -->
        <header
            class="w-full px-6 py-4 lg:px-10 border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md sticky top-0 z-50">
            <div class="mx-auto max-w-7xl flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="size-8 flex items-center justify-center rounded-lg bg-primary/10 text-primary">
                        <span class="material-symbols-outlined text-2xl">grid_view</span>
                    </div>
                    <h2 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">Media Hub</h2>
                </div>
                <nav class="flex items-center gap-4">
                    @auth

                        <a href="{{ route('dashboard') }}"
                            class="flex items-center justify-center rounded-lg h-10 px-6 text-sm font-medium text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                            Dashboard
                        </a>

                    @else
                        <a href="{{ route('register') }}"
                            class="flex items-center justify-center rounded-lg h-10 px-6 text-sm font-medium text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                            Register
                        </a>
                        <a href="{{ route('login') }}"
                            class="flex items-center justify-center rounded-lg h-10 px-6 text-sm font-medium text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                            Login
                        </a>
                    @endauth
                    <!-- Dark mode toggle simulated functionality for preview purposes -->
                    <!-- In a real app, this would toggle the 'dark' class on HTML -->
                    <a
                        class="flex items-center justify-center size-10 rounded-full text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                        <span class="material-symbols-outlined">contrast</span>
                    </a>
                </nav>
            </div>
        </header>
        <main class="flex-grow flex flex-col items-center">
            <!-- Hero Section -->
            <section class="w-full max-w-7xl px-4 py-16 md:py-24 lg:py-32 flex flex-col items-center text-center">
                <div class="flex flex-col gap-6 max-w-3xl animate-fade-in-up">
                    <h1
                        class="text-4xl md:text-5xl lg:text-6xl font-black tracking-tight leading-[1.1] text-slate-900 dark:text-white">
                        Track your obsessions without the clutter.
                    </h1>
                    <p
                        class="text-lg md:text-xl text-slate-600 dark:text-slate-400 font-normal leading-relaxed max-w-2xl mx-auto">
                        Your personal progress tracker for anime, manga, and novels.
                        No social noise, just pure utility.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center mt-4">
                        <button
                            class="inline-flex h-12 items-center justify-center rounded-lg bg-primary px-8 text-base font-bold text-white shadow-lg shadow-primary/25 hover:bg-blue-600 hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-background-dark">
                            Get Started
                        </button>
                        <button
                            class="inline-flex h-12 items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-8 text-base font-medium text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-700 transition-all duration-200">
                            Learn More
                        </button>
                    </div>
                </div>
            </section>
            <!-- Dashboard Preview Section -->
            <section class="w-full px-4 pb-20 md:pb-32">
                <div class="max-w-[1000px] mx-auto perspective-1000">
                    <div
                        class="relative rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 shadow-2xl overflow-hidden transform transition-transform duration-500 hover:scale-[1.01]">
                        <!-- Mock Window Controls -->
                        <div
                            class="flex items-center gap-2 px-4 py-3 border-b border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50">
                            <div class="size-3 rounded-full bg-red-400"></div>
                            <div class="size-3 rounded-full bg-amber-400"></div>
                            <div class="size-3 rounded-full bg-green-400"></div>
                            <div class="ml-4 h-4 w-64 rounded-full bg-slate-200 dark:bg-slate-700 opacity-50"></div>
                        </div>
                        <!-- Table Component reused and styled -->
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="border-b border-slate-100 dark:border-slate-800">
                                        <th
                                            class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 w-[40%]">
                                            Title</th>
                                        <th
                                            class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 w-[20%]">
                                            Type</th>
                                        <th
                                            class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 w-[20%]">
                                            Progress</th>
                                        <th
                                            class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 w-[20%] text-right">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                    <!-- Row 1 -->
                                    <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-10 rounded bg-gradient-to-br from-orange-100 to-red-100 flex items-center justify-center text-orange-600 dark:text-orange-800"
                                                    data-alt="Abstract gradient avatar">
                                                    <span class="material-symbols-outlined text-lg">menu_book</span>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">One
                                                        Piece</p>
                                                    <p class="text-xs text-slate-500">Eiichiro Oda</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center rounded-md bg-slate-100 dark:bg-slate-800 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-slate-300 ring-1 ring-inset ring-slate-600/10">
                                                Manga
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="h-1.5 w-full max-w-[80px] rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                                    <div class="h-full bg-primary w-[85%] rounded-full"></div>
                                                </div>
                                                <span class="text-xs font-medium text-slate-600 dark:text-slate-400">Ch.
                                                    1050</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full bg-green-50 dark:bg-green-900/20 px-2.5 py-1 text-xs font-medium text-green-700 dark:text-green-400 ring-1 ring-inset ring-green-600/20">
                                                <span
                                                    class="size-1.5 rounded-full bg-green-600 dark:bg-green-400"></span>
                                                Reading
                                            </span>
                                        </td>
                                    </tr>
                                    <!-- Row 2 -->
                                    <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-10 rounded bg-gradient-to-br from-indigo-100 to-purple-100 flex items-center justify-center text-indigo-600 dark:text-indigo-800"
                                                    data-alt="Abstract gradient avatar">
                                                    <span class="material-symbols-outlined text-lg">smartphone</span>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Solo
                                                        Leveling</p>
                                                    <p class="text-xs text-slate-500">Chu-Gong</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center rounded-md bg-slate-100 dark:bg-slate-800 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-slate-300 ring-1 ring-inset ring-slate-600/10">
                                                Manhwa
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="h-1.5 w-full max-w-[80px] rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                                    <div class="h-full bg-green-500 w-full rounded-full"></div>
                                                </div>
                                                <span class="text-xs font-medium text-slate-600 dark:text-slate-400">Ch.
                                                    179</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full bg-blue-50 dark:bg-blue-900/20 px-2.5 py-1 text-xs font-medium text-blue-700 dark:text-blue-400 ring-1 ring-inset ring-blue-600/20">
                                                <span class="size-1.5 rounded-full bg-blue-600 dark:bg-blue-400"></span>
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <!-- Row 3 -->
                                    <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-10 rounded bg-gradient-to-br from-pink-100 to-rose-100 flex items-center justify-center text-rose-600 dark:text-rose-800"
                                                    data-alt="Abstract gradient avatar">
                                                    <span class="material-symbols-outlined text-lg">movie</span>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">Spy
                                                        x Family</p>
                                                    <p class="text-xs text-slate-500">Tatsuya Endo</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center rounded-md bg-slate-100 dark:bg-slate-800 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-slate-300 ring-1 ring-inset ring-slate-600/10">
                                                Anime
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="h-1.5 w-full max-w-[80px] rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                                    <div class="h-full bg-primary w-[45%] rounded-full"></div>
                                                </div>
                                                <span class="text-xs font-medium text-slate-600 dark:text-slate-400">Ep.
                                                    25</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full bg-green-50 dark:bg-green-900/20 px-2.5 py-1 text-xs font-medium text-green-700 dark:text-green-400 ring-1 ring-inset ring-green-600/20">
                                                <span
                                                    class="size-1.5 rounded-full bg-green-600 dark:bg-green-400"></span>
                                                Watching
                                            </span>
                                        </td>
                                    </tr>
                                    <!-- Row 4 -->
                                    <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-10 rounded bg-gradient-to-br from-cyan-100 to-blue-100 flex items-center justify-center text-cyan-600 dark:text-cyan-800"
                                                    data-alt="Abstract gradient avatar">
                                                    <span class="material-symbols-outlined text-lg">auto_stories</span>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-slate-900 dark:text-white">
                                                        Omniscient Reader</p>
                                                    <p class="text-xs text-slate-500">Sing Shong</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center rounded-md bg-slate-100 dark:bg-slate-800 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-slate-300 ring-1 ring-inset ring-slate-600/10">
                                                Novel
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="h-1.5 w-full max-w-[80px] rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                                    <div class="h-full bg-primary w-[15%] rounded-full"></div>
                                                </div>
                                                <span class="text-xs font-medium text-slate-600 dark:text-slate-400">Ch.
                                                    51</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full bg-green-50 dark:bg-green-900/20 px-2.5 py-1 text-xs font-medium text-green-700 dark:text-green-400 ring-1 ring-inset ring-green-600/20">
                                                <span
                                                    class="size-1.5 rounded-full bg-green-600 dark:bg-green-400"></span>
                                                Reading
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Mock Pagination / Footer of table -->
                        <div
                            class="border-t border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-900 px-6 py-3 flex items-center justify-between">
                            <span class="text-xs text-slate-500">Showing 4 of 24 items</span>
                            <div class="flex gap-1">
                                <div
                                    class="size-6 rounded flex items-center justify-center bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-400">
                                    <span class="material-symbols-outlined text-sm">chevron_left</span>
                                </div>
                                <div
                                    class="size-6 rounded flex items-center justify-center bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-400">
                                    <span class="material-symbols-outlined text-sm">chevron_right</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative blob for background depth -->
                    <div
                        class="absolute -z-10 -top-20 -right-20 size-[300px] bg-primary/20 blur-[100px] rounded-full mix-blend-multiply dark:mix-blend-normal dark:bg-primary/10">
                    </div>
                    <div
                        class="absolute -z-10 -bottom-20 -left-20 size-[300px] bg-purple-500/20 blur-[100px] rounded-full mix-blend-multiply dark:mix-blend-normal dark:bg-purple-900/20">
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer class="w-full border-t border-slate-200 dark:border-slate-800 py-10 bg-white dark:bg-background-dark">
            <div class="mx-auto max-w-7xl px-4 flex flex-col md:flex-row items-center justify-between gap-6">
                <p class="text-sm text-slate-500 dark:text-slate-400">
                    © 2023 Media Hub. All rights reserved.
                </p>
                <div class="flex items-center gap-6">
                    <a class="text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors"
                        href="#">About</a>
                    <a class="text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors"
                        href="#">Privacy</a>
                    <a class="text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors"
                        href="#">Terms</a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
