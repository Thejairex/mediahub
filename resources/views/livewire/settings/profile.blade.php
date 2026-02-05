<x-layouts.app>
    <div class="max-w-xl mx-auto py-10">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Profile Settings</h1>

        <form wire:submit="updateProfileInformation" class="space-y-6">
            <div>
                <label for="name"
                    class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Name</label>
                <div class="mt-2">
                    <input id="name" wire:model="state.name" type="text" required autofocus
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white dark:bg-zinc-800 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-zinc-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <label for="email"
                    class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Email</label>
                <div class="mt-2">
                    <input id="email" wire:model="state.email" type="email" required
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white dark:bg-zinc-800 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-zinc-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="flex items-center gap-4">
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                <div x-show="saved" x-transition x-data="{ saved: false }"
                    x-init="@this.on('saved', () => { saved = true; setTimeout(() => { saved = false }, 2000) })"
                    class="text-sm text-gray-600 dark:text-gray-400">
                    Saved.
                </div>
            </div>
        </form>
    </div>
</x-layouts.app>