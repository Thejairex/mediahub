<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Media Hub - Login</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Theme Configuration -->
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
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white min-h-screen flex flex-col justify-center items-center p-4">
    <!-- Main Login Card -->
    <div
        class="w-full max-w-[420px] bg-white dark:bg-[#1a222d] rounded-xl shadow-lg overflow-hidden border border-[#dce0e5]/30 dark:border-gray-700/50">
        <!-- Header Section -->
        <div class="px-8 pt-10 pb-6 text-center">
            <div class="flex flex-col gap-2">
                <!-- Logo / Brand Icon Placeholder -->
                <div
                    class="mx-auto mb-2 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-3xl">hub</span>
                </div>
                <h1
                    class="font-display text-[#111418] dark:text-white tracking-tight text-[28px] font-bold leading-tight">
                    Media Hub</h1>
                <p class="font-display text-[#637588] dark:text-[#9ca3af] text-sm font-normal leading-normal">Track your
                    anime, manga, and novels.</p>
            </div>
        </div>
        <!-- Form Section -->
        <div class="px-8 pb-10">
            <form action="#" class="flex flex-col gap-5" onsubmit="event.preventDefault();">
                <!-- Email Input -->
                <div class="flex flex-col gap-2">
                    <label class="font-display text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal"
                        for="email">
                        Email
                    </label>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce0e5] dark:border-gray-600 bg-white dark:bg-[#111921] focus:border-primary h-12 placeholder:text-[#637588] dark:placeholder:text-gray-500 px-[15px] text-base font-normal leading-normal transition-all duration-200 ease-in-out"
                            id="email" placeholder="name@example.com" type="email" value="" />
                    </div>
                </div>
                <!-- Password Input -->
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between items-center">
                        <label class="font-display text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal"
                            for="password">
                            Password
                        </label>
                        <a class="text-xs font-medium text-primary hover:text-primary/80 transition-colors"
                            href="#">Forgot?</a>
                    </div>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce0e5] dark:border-gray-600 bg-white dark:bg-[#111921] focus:border-primary h-12 placeholder:text-[#637588] dark:placeholder:text-gray-500 px-[15px] text-base font-normal leading-normal transition-all duration-200 ease-in-out"
                            id="password" placeholder="••••••••" type="password" value="" />
                    </div>
                </div>
                <!-- Sign In Button -->
                <div class="pt-2">
                    <button
                        class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal tracking-[0.015em] transition-all duration-200 shadow-sm hover:shadow active:scale-[0.98]">
                        <span class="truncate">Sign In</span>
                    </button>
                </div>
                <!-- Footer Link -->
                <div class="text-center">
                    <p class="font-display text-[#637588] dark:text-[#9ca3af] text-sm font-normal leading-normal">
                        Don't have an account?
                        <a class="text-primary font-medium hover:underline hover:text-primary/80 transition-colors"
                            href="#">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>