<div class="relative flex min-h-screen w-full flex-col overflow-hidden items-center justify-center p-4">
    <!-- Main Card Container -->
    <div
        class="w-full max-w-[480px] bg-white dark:bg-[#1a2632] rounded-xl shadow-sm border border-[#dce0e5] dark:border-[#2a3844] overflow-hidden">
        <!-- Header Section -->
        <div class="px-8 pt-10 pb-4 text-center">
            <!-- Logo / Brand (Optional visual anchor) -->
            <div class="mb-4 flex justify-center">
                <div class="h-12 w-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-[32px]">movie</span>
                </div>
            </div>
            <h1 class="text-[#111418] dark:text-white tracking-tight text-[28px] font-bold leading-tight pb-2">Create
                your account</h1>
            <p class="text-[#637588] dark:text-[#9ba8b8] text-base font-normal leading-normal">Start tracking your anime
                and manga journey with Media Hub.</p>
        </div>
        <!-- Form Section -->
        <div class="px-8 pb-10">
            <form class="flex flex-col gap-5" wire:submit.prevent="register">
                <!-- Name Field -->
                <label class="flex flex-col gap-1.5">
                    <span class="text-[#111418] dark:text-white text-sm font-medium leading-normal">Username</span>
                    <input autofocus=""
                        class="form-input flex w-full resize-none overflow-hidden rounded-lg border border-[#dce0e5] dark:border-[#3e4f5e] bg-white dark:bg-[#1a2632] text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 focus:border-primary h-12 placeholder:text-[#9ba8b8] px-4 text-base font-normal leading-normal transition-colors"
                        placeholder="John Doe" type="text" wire:model="username" />
                    @error('username')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </label>
                <!-- Email Field -->
                <label class="flex flex-col gap-1.5">
                    <span class="text-[#111418] dark:text-white text-sm font-medium leading-normal">Email Address</span>
                    <input
                        class="form-input flex w-full resize-none overflow-hidden rounded-lg border border-[#dce0e5] dark:border-[#3e4f5e] bg-white dark:bg-[#1a2632] text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 focus:border-primary h-12 placeholder:text-[#9ba8b8] px-4 text-base font-normal leading-normal transition-colors"
                        placeholder="john@example.com" type="email" wire:model="email" />
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </label>
                <!-- Password Field -->
                <label class="flex flex-col gap-1.5">
                    <span class="text-[#111418] dark:text-white text-sm font-medium leading-normal">Password</span>
                    <div class="relative flex w-full items-center rounded-lg">
                        <input
                            class="form-input flex w-full resize-none overflow-hidden rounded-lg border border-[#dce0e5] dark:border-[#3e4f5e] bg-white dark:bg-[#1a2632] text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 focus:border-primary h-12 placeholder:text-[#9ba8b8] px-4 pr-12 text-base font-normal leading-normal transition-colors"
                            placeholder="••••••••"
                            type="{{ $visibility ? 'text' : 'password' }}"
                            wire:model="password" />
                        <button
                            class="absolute right-0 top-0 bottom-0 px-3 flex items-center justify-center text-[#637588] hover:text-[#111418] dark:text-[#9ba8b8] dark:hover:text-white transition-colors cursor-pointer bg-transparent border-none"
                            type="button" wire:click="toggleVisibility">
                            <span class="material-symbols-outlined text-[20px]">visibility</span>
                        </button>
                    </div>
                </label>
                <!-- Confirm Password Field -->
                <label class="flex flex-col gap-1.5">
                    <span class="text-[#111418] dark:text-white text-sm font-medium leading-normal">Confirm
                        Password</span>
                    <div class="relative flex w-full items-center rounded-lg">
                        <input
                            class="form-input flex w-full resize-none overflow-hidden rounded-lg border border-[#dce0e5] dark:border-[#3e4f5e] bg-white dark:bg-[#1a2632] text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 focus:border-primary h-12 placeholder:text-[#9ba8b8] px-4 pr-12 text-base font-normal leading-normal transition-colors"
                            placeholder="••••••••" type="password" wire:model="password_confirmation" 
                            type="{{ $visibility ? 'text' : 'password' }}"/>
                        <!-- Intentionally leaving out the eye icon here for cleaner UI as requested in minimalism, or could duplicate if desired -->
                        <button
                            class="absolute right-0 top-0 bottom-0 px-3 flex items-center justify-center text-[#637588] hover:text-[#111418] dark:text-[#9ba8b8] dark:hover:text-white transition-colors cursor-pointer bg-transparent border-none"
                            type="button" wire:click="toggleVisibility">
                            <span class="material-symbols-outlined text-[20px]">visibility</span>
                        </button>
                    </div>
                    @error('password_confirmation')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </label>
                <!-- Submit Button -->
                <button
                    class="mt-2 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal tracking-[0.015em] transition-colors shadow-sm">
                    Create Account
                </button>
                <!-- Footer Link -->
                <div class="pt-2 text-center">
                    <p class="text-[#637588] dark:text-[#9ba8b8] text-sm font-normal">
                        Already have an account?
                        <a class="text-primary font-medium hover:underline decoration-primary/50 underline-offset-4"
                            href="#">Log in</a>
                    </p>
                </div>
            </form>
        </div>
        <!-- Optional Visual Footer Strip -->
        <div class="h-1.5 w-full bg-gradient-to-r from-primary/80 via-primary to-primary/80"></div>
    </div>
    <!-- Bottom branding/copyright (Subtle) -->
    <div class="mt-8 text-center">
        <p class="text-[#9ba8b8] text-xs">© 2023 Media Hub. All rights reserved.</p>
    </div>
</div>