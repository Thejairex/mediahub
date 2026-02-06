<x-layouts.guess>
    <x-slot name="title">Register - Media Hub</x-slot>

    <div
        class="w-full max-w-[420px] bg-white dark:bg-[#1a222d] rounded-xl shadow-lg overflow-hidden border border-[#dce0e5]/30 dark:border-gray-700/50">
        <!-- Header Section -->
        <div class="px-8 pt-10 pb-6 text-center">
            <div class="flex flex-col gap-2">
                <!-- Logo / Brand Icon -->
                <div
                    class="mx-auto mb-2 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-3xl">person_add</span>
                </div>
                <h1
                    class="font-display text-[#111418] dark:text-white tracking-tight text-[28px] font-bold leading-tight">
                    Create Account</h1>
                <p class="font-display text-[#637588] dark:text-[#9ca3af] text-sm font-normal leading-normal">
                    Join Media Hub to start tracking your media.
                </p>
            </div>
        </div>

        <!-- Form Section -->
        <div class="px-8 pb-10">
            <form class="flex flex-col gap-5" action="{{ route('register') }}" method="POST">
                @csrf

                <!-- Name Input -->
                <div class="flex flex-col gap-2">
                    <label class="font-display text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal"
                        for="name">
                        Name
                    </label>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce0e5] dark:border-gray-600 bg-white dark:bg-[#111921] focus:border-primary h-12 placeholder:text-[#637588] dark:placeholder:text-gray-500 px-[15px] text-base font-normal leading-normal transition-all duration-200 ease-in-out @error('name') border-red-500 @enderror"
                            id="name" name="name" type="text" value="{{ old('name') }}" placeholder="John Doe"
                            autocomplete="name" required autofocus />
                    </div>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

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
                            placeholder="name@example.com" autocomplete="email" required />
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="flex flex-col gap-2">
                    <label class="font-display text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal"
                        for="password">
                        Password
                    </label>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce0e5] dark:border-gray-600 bg-white dark:bg-[#111921] focus:border-primary h-12 placeholder:text-[#637588] dark:placeholder:text-gray-500 px-[15px] text-base font-normal leading-normal transition-all duration-200 ease-in-out @error('password') border-red-500 @enderror"
                            id="password" name="password" type="password" placeholder="••••••••"
                            autocomplete="new-password" required />
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Confirmation Input -->
                <div class="flex flex-col gap-2">
                    <label class="font-display text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal"
                        for="password_confirmation">
                        Confirm Password
                    </label>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce0e5] dark:border-gray-600 bg-white dark:bg-[#111921] focus:border-primary h-12 placeholder:text-[#637588] dark:placeholder:text-gray-500 px-[15px] text-base font-normal leading-normal transition-all duration-200 ease-in-out"
                            id="password_confirmation" name="password_confirmation" type="password"
                            placeholder="••••••••" autocomplete="new-password" required />
                    </div>
                </div>

                <!-- Register Button -->
                <div class="pt-2">
                    <button type="submit"
                        class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal tracking-[0.015em] transition-all duration-200 shadow-sm hover:shadow active:scale-[0.98]">
                        <span class="truncate">Create Account</span>
                    </button>
                </div>

                <!-- Footer Link -->
                <div class="text-center">
                    <p class="font-display text-[#637588] dark:text-[#9ca3af] text-sm font-normal leading-normal">
                        Already have an account?
                        <a class="text-primary font-medium hover:underline hover:text-primary/80 transition-colors"
                            href="{{ route('login') }}">Sign in</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layouts.guess>