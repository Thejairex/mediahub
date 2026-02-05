<x-layouts.app>
    <div class="max-w-xl mx-auto py-10">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Appearance</h1>

        <div class="bg-white dark:bg-zinc-900 shadow rounded-lg p-6 space-y-6">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white">Theme</h2>
            <p class="text-gray-600 dark:text-gray-400">Choose your preferred theme.</p>

            <div class="flex gap-4">
                <button x-on:click="document.documentElement.classList.remove('dark')"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-zinc-800 dark:text-gray-200 dark:border-zinc-600 dark:hover:bg-zinc-700">Light</button>
                <button x-on:click="document.documentElement.classList.add('dark')"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-zinc-800 dark:text-gray-200 dark:border-zinc-600 dark:hover:bg-zinc-700">Dark</button>
            </div>
        </div>
    </div>
</x-layouts.app>