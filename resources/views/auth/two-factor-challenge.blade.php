<x-layouts.app>
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8" x-data="{ recovery: false }">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900 dark:text-white">Two-Factor
                Authentication</h2>
            <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400" x-show="! recovery">
                Please confirm access to your account by entering the authentication code provided by your authenticator
                application.
            </p>
            <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400" x-show="recovery"
                style="display: none;">
                Please confirm access to your account by entering one of your emergency recovery codes.
            </p>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div class="mt-4" x-show="! recovery">
                    <label for="code"
                        class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Code</label>
                    <div class="mt-2">
                        <input id="code" x-ref="code" name="code" type="text" inputmode="numeric" autofocus
                            autocomplete="one-time-code"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white dark:bg-zinc-800 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-zinc-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="mt-4" x-show="recovery" style="display: none;">
                    <label for="recovery_code"
                        class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Recovery
                        Code</label>
                    <div class="mt-2">
                        <input id="recovery_code" x-ref="recovery_code" name="recovery_code" type="text"
                            autocomplete="one-time-code"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white dark:bg-zinc-800 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-zinc-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button"
                        class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 underline cursor-pointer"
                        x-show="! recovery"
                        x-on:click="recovery = true; $nextTick(() => { $refs.recovery_code.focus() })">
                        Use a recovery code
                    </button>

                    <button type="button"
                        class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 underline cursor-pointer"
                        x-show="recovery" style="display: none;"
                        x-on:click="recovery = false; $nextTick(() => { $refs.code.focus() })">
                        Use an authentication code
                    </button>

                    <button type="submit"
                        class="ml-4 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Log in
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>