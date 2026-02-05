<x-layouts.app>
    <div class="max-w-xl mx-auto py-10">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Two Factor Authentication</h1>

        <div class="space-y-6">
            @if(!$user->two_factor_secret)
                <button wire:click="enableTwoFactorAuthentication"
                    class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enable</button>
            @else
                @if($user->two_factor_confirmed_at)
                    <p class="mb-4 text-gray-600 dark:text-gray-400">Two factor authentication is enabled.</p>
                    <button wire:click="disableTwoFactorAuthentication"
                        class="rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Disable</button>
                @else
                    <div class="mb-4">
                        <p class="mb-2 text-gray-600 dark:text-gray-400">Finish enabling two factor authentication.</p>
                        <div class="mb-4">
                            {!! $user->twoFactorQrCodeSvg() !!}
                        </div>
                        <form wire:submit="confirmTwoFactorAuthentication" class="flex gap-2">
                            <input wire:model="confirmationCode" placeholder="Code"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white dark:bg-zinc-800 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-zinc-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Confirm</button>
                        </form>
                    </div>
                    <button wire:click="disableTwoFactorAuthentication"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-zinc-800 dark:text-gray-200 dark:border-zinc-600 dark:hover:bg-zinc-700">Cancel</button>
                @endif
            @endif
        </div>
    </div>
</x-layouts.app>