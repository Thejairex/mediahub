<x-layouts.guess>
    <x-slot name="title">Two-Factor Authentication - Media Hub</x-slot>

    <div class="w-full max-w-[420px] bg-white dark:bg-[#1a222d] rounded-xl shadow-lg overflow-hidden border border-[#dce0e5]/30 dark:border-gray-700/50"
        x-data="{ recovery: false }">
        <!-- Header Section -->
        <div class="px-8 pt-10 pb-6 text-center">
            <div class="flex flex-col gap-2">
                <!-- Logo / Brand Icon -->
                <div
                    class="mx-auto mb-2 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-3xl">security</span>
                </div>
                <h1
                    class="font-display text-[#111418] dark:text-white tracking-tight text-[28px] font-bold leading-tight">
                    Two-Factor Authentication</h1>
                <p class="font-display text-[#637588] dark:text-[#9ca3af] text-sm font-normal leading-normal"
                    x-show="! recovery">
                    Enter the authentication code from your authenticator app.
                </p>
                <p class="font-display text-[#637588] dark:text-[#9ca3af] text-sm font-normal leading-normal"
                    x-show="recovery" style="display: none;">
                    Enter one of your emergency recovery codes.
                </p>
            </div>
        </div>

        <!-- Form Section -->
        <div class="px-8 pb-10">
            <form method="POST" action="{{ route('two-factor.login') }}" class="flex flex-col gap-5">
                @csrf

                <!-- Code Input -->
                <div class="flex flex-col gap-2" x-show="! recovery">
                    <label class="font-display text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal"
                        for="code">
                        Authentication Code
                    </label>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce0e5] dark:border-gray-600 bg-white dark:bg-[#111921] focus:border-primary h-12 placeholder:text-[#637588] dark:placeholder:text-gray-500 px-[15px] text-base font-normal leading-normal transition-all duration-200 ease-in-out"
                            id="code" x-ref="code" name="code" type="text" inputmode="numeric" placeholder="123456"
                            autocomplete="one-time-code" autofocus />
                    </div>
                </div>

                <!-- Recovery Code Input -->
                <div class="flex flex-col gap-2" x-show="recovery" style="display: none;">
                    <label class="font-display text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal"
                        for="recovery_code">
                        Recovery Code
                    </label>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce0e5] dark:border-gray-600 bg-white dark:bg-[#111921] focus:border-primary h-12 placeholder:text-[#637588] dark:placeholder:text-gray-500 px-[15px] text-base font-normal leading-normal transition-all duration-200 ease-in-out"
                            id="recovery_code" x-ref="recovery_code" name="recovery_code" type="text"
                            placeholder="abcd-efgh-ijkl" autocomplete="one-time-code" />
                    </div>
                </div>

                <!-- Toggle Recovery Mode -->
                <div class="text-center">
                    <button type="button"
                        class="text-sm text-primary hover:text-primary/80 font-medium transition-colors"
                        x-show="! recovery"
                        x-on:click="recovery = true; $nextTick(() => { $refs.recovery_code.focus() })">
                        Use a recovery code
                    </button>
                    <button type="button"
                        class="text-sm text-primary hover:text-primary/80 font-medium transition-colors"
                        x-show="recovery" style="display: none;"
                        x-on:click="recovery = false; $nextTick(() => { $refs.code.focus() })">
                        Use an authentication code
                    </button>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit"
                        class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal tracking-[0.015em] transition-all duration-200 shadow-sm hover:shadow active:scale-[0.98]">
                        <span class="truncate">Log in</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</x-layouts.guess>