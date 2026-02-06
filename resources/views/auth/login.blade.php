<x-layouts.guess>
    <x-slot name="title">Media Hub - Login</x-slot>

    <div
        class="w-full max-w-[420px] bg-white dark:bg-[#1a222d] rounded-xl shadow-lg overflow-hidden border border-[#dce0e5]/30 dark:border-gray-700/50">
        <!-- Header Section -->
        <div class="px-8 pt-10 pb-6 text-center">
            <div class="flex flex-col gap-2">
                <!-- Logo / Brand Icon -->
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
            <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-5">
                @csrf

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Email Input -->
                <div class="flex flex-col gap-2">
                    <label class="font-display text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal"
                        for="email">
                        Email
                    </label>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce0e5] dark:border-gray-600 bg-white dark:bg-[#111921] focus:border-primary h-12 placeholder:text-[#637588] dark:placeholder:text-gray-500 px-[15px] text-base font-normal leading-normal transition-all duration-200 ease-in-out @error('email') border-red-500 @enderror"
                            id="email" name="email" placeholder="name@example.com" type="email"
                            value="{{ old('email') }}" required autofocus />
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between items-center">
                        <label class="font-display text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal"
                            for="password">
                            Password
                        </label>
                        @if (Route::has('password.request'))
                            <a class="text-xs font-medium text-primary hover:text-primary/80 transition-colors"
                                href="{{ route('password.request') }}">Forgot?</a>
                        @endif
                    </div>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce0e5] dark:border-gray-600 bg-white dark:bg-[#111921] focus:border-primary h-12 placeholder:text-[#637588] dark:placeholder:text-gray-500 px-[15px] text-base font-normal leading-normal transition-all duration-200 ease-in-out @error('password') border-red-500 @enderror"
                            id="password" name="password" placeholder="••••••••" type="password" required />
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 dark:border-gray-600 text-primary focus:ring-primary">
                    <label for="remember_me" class="ml-2 block text-sm text-[#637588] dark:text-[#9ca3af]">
                        Remember me
                    </label>
                </div>

                <!-- Sign In Button -->
                <div class="pt-2">
                    <button type="submit"
                        class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal tracking-[0.015em] transition-all duration-200 shadow-sm hover:shadow active:scale-[0.98]">
                        <span class="truncate">Sign In</span>
                    </button>
                </div>

                <!-- Footer Link -->
                @if (Route::has('register'))
                    <div class="text-center">
                        <p class="font-display text-[#637588] dark:text-[#9ca3af] text-sm font-normal leading-normal">
                            Don't have an account?
                            <a class="text-primary font-medium hover:underline hover:text-primary/80 transition-colors"
                                href="{{ route('register') }}">Register</a>
                        </p>
                    </div>
                @endif
            </form>
        </div>
    </div>
</x-layouts.guess>