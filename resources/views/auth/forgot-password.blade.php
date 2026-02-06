<x-layouts.guess>
    <x-slot name="title">Forgot Password - Media Hub</x-slot>

    <div
        class="w-full max-w-[420px] bg-white dark:bg-[#1a222d] rounded-xl shadow-lg overflow-hidden border border-[#dce0e5]/30 dark:border-gray-700/50">
        <!-- Header Section -->
        <div class="px-8 pt-10 pb-6 text-center">
            <div class="flex flex-col gap-2">
                <!-- Logo / Brand Icon -->
                <div
                    class="mx-auto mb-2 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-3xl">lock_reset</span>
                </div>
                <h1
                    class="font-display text-[#111418] dark:text-white tracking-tight text-[28px] font-bold leading-tight">
                    Forgot Password</h1>
                <p class="font-display text-[#637588] dark:text-[#9ca3af] text-sm font-normal leading-normal">
                    No problem. Just enter your email and we'll send you a password reset link.
                </p>
            </div>
        </div>

        <!-- Form Section -->
        <div class="px-8 pb-10">
            @if (session('status'))
                <div
                    class="mb-4 p-3 rounded-lg bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800">
                    <p class="text-sm text-green-600 dark:text-green-400">{{ session('status') }}</p>
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-5">
                @csrf

                <!-- Email Input -->
                <div class="flex flex-col gap-2">
                    <label class="font-display text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal"
                        for="email">
                        Email address
                    </label>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce0e5] dark:border-gray-600 bg-white dark:bg-[#111921] focus:border-primary h-12 placeholder:text-[#637588] dark:placeholder:text-gray-500 px-[15px] text-base font-normal leading-normal transition-all duration-200 ease-in-out @error('email') border-red-500 @enderror"
                            id="email" name="email" type="email" value="{{ old('email') }}"
                            placeholder="name@example.com" required autofocus />
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit"
                        class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal tracking-[0.015em] transition-all duration-200 shadow-sm hover:shadow active:scale-[0.98]">
                        <span class="truncate">Email Password Reset Link</span>
                    </button>
                </div>

                <!-- Back to Login -->
                <div class="text-center">
                    <p class="font-display text-[#637588] dark:text-[#9ca3af] text-sm font-normal leading-normal">
                        Remember your password?
                        <a class="text-primary font-medium hover:underline hover:text-primary/80 transition-colors"
                            href="{{ route('login') }}">Back to Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layouts.guess>