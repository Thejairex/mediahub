<x-layouts.guess>
    <x-slot name="title">Verify Email - Media Hub</x-slot>

    <div
        class="w-full max-w-[420px] bg-white dark:bg-[#1a222d] rounded-xl shadow-lg overflow-hidden border border-[#dce0e5]/30 dark:border-gray-700/50">
        <!-- Header Section -->
        <div class="px-8 pt-10 pb-6 text-center">
            <div class="flex flex-col gap-2">
                <!-- Logo / Brand Icon -->
                <div
                    class="mx-auto mb-2 flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-3xl">mark_email_unread</span>
                </div>
                <h1
                    class="font-display text-[#111418] dark:text-white tracking-tight text-[28px] font-bold leading-tight">
                    Verify Email</h1>
                <p class="font-display text-[#637588] dark:text-[#9ca3af] text-sm font-normal leading-normal">
                    Thanks for signing up! Please verify your email address by clicking the link we sent you.
                </p>
            </div>
        </div>

        <!-- Content Section -->
        <div class="px-8 pb-10">
            @if (session('status') == 'verification-link-sent')
                <div
                    class="mb-5 p-3 rounded-lg bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800">
                    <p class="text-sm text-green-600 dark:text-green-400">
                        A new verification link has been sent to your email address.
                    </p>
                </div>
            @endif

            <div class="flex flex-col gap-4">
                <!-- Resend Verification Email -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit"
                        class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal tracking-[0.015em] transition-all duration-200 shadow-sm hover:shadow active:scale-[0.98]">
                        <span class="truncate">Resend Verification Email</span>
                    </button>
                </form>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 border border-[#dce0e5] dark:border-gray-600 bg-transparent hover:bg-gray-50 dark:hover:bg-gray-800 text-[#111418] dark:text-white text-base font-medium leading-normal tracking-[0.015em] transition-all duration-200">
                        <span class="truncate">Log Out</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.guess>