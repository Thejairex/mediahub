<div class="flex-1 h-full overflow-y-auto bg-background-light dark:bg-background-dark relative">
    <div class="max-w-4xl mx-auto px-6 py-10 md:px-12 md:py-12">
        <!-- Page Heading -->
        <header class="mb-10">
            <h2 class="text-3xl md:text-4xl font-black tracking-tight text-text-main dark:text-white mb-2">Profile
                Settings
            </h2>
            <p class="text-text-secondary dark:text-gray-400 text-lg">Manage your personal information and application
                preferences.</p>
        </header>
        <!-- Form Container -->
        <form class="space-y-12 pb-20">
            <!-- Section 1: Personal Info -->
            <section
                class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark overflow-hidden">
                <div
                    class="px-6 py-4 border-b border-border-light dark:border-border-dark bg-gray-50/50 dark:bg-gray-800/30">
                    <h3 class="text-lg font-bold text-text-main dark:text-white">Personal Info</h3>
                </div>
                <div class="p-6 md:p-8 space-y-8">
                    <!-- Avatar Upload -->
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                        <div class="relative group">
                            <div class="w-24 h-24 rounded-full bg-cover bg-center border-2 border-white dark:border-gray-700 shadow-sm"
                                data-alt="User profile avatar showing a minimalist portrait"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAIqc-ZUifd9X6BrlFUoFAmPJXk5luHL78wyiPmjR9WGLaXkhQMiVWBO78haox_2CrbBrsHRfNqgJSzpm7OjPvU1TT4-T16-OJ-qnslPKZh2haKZ5rcVArCpTxS0eb2ba4dN_uG7jspIgNb6M4kKnWQX62RudrSMJIy4XuW1TgvwlOGUoDPfGEcgQ68iDwTLklTE0YSWNVNi7Fjp33r9t56uT2WXdr1zPM__wWK3_gWIOapxEeZADrUEW0iaJ6Z2BLItcCmZ2JCQei4');">
                            </div>
                            <button
                                class="absolute bottom-0 right-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center border-2 border-white dark:border-gray-800 shadow-md hover:bg-blue-600 transition-colors"
                                type="button">
                                <span class="material-symbols-outlined text-[16px]">edit</span>
                            </button>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-base font-bold text-text-main dark:text-white mb-1">Your Avatar</h4>
                            <p class="text-sm text-text-secondary dark:text-gray-400 mb-3">Allowed formats: JPG, PNG.
                                Max
                                size: 2MB.
                            </p>
                            <div class="flex gap-3">
                                <button
                                    class="px-4 py-2 bg-background-light dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-text-main dark:text-white text-sm font-medium rounded-lg transition-colors border border-border-light dark:border-gray-600"
                                    type="button">
                                    Upload New
                                </button>
                                <button
                                    class="px-4 py-2 text-red-600 dark:text-red-400 text-sm font-medium hover:underline"
                                    type="button">
                                    Remove
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Text Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <label class="block">
                            <span class="text-sm font-medium text-text-main dark:text-gray-300 mb-1.5 block">Display
                                Name</span>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-text-secondary">
                                    <span class="material-symbols-outlined text-[20px]">badge</span>
                                </span>
                                <input
                                    class="form-input block w-full pl-10 pr-3 py-2.5 bg-white dark:bg-gray-900 border border-border-light dark:border-gray-700 rounded-lg text-text-main dark:text-white focus:ring-primary focus:border-primary placeholder-gray-400 text-sm shadow-sm transition-shadow"
                                    type="text" value="Alex Reader" />
                            </div>
                        </label>
                        <label class="block">
                            <span class="text-sm font-medium text-text-main dark:text-gray-300 mb-1.5 block">Email
                                Address</span>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-text-secondary">
                                    <span class="material-symbols-outlined text-[20px]">mail</span>
                                </span>
                                <input
                                    class="form-input block w-full pl-10 pr-3 py-2.5 bg-white dark:bg-gray-900 border border-border-light dark:border-gray-700 rounded-lg text-text-main dark:text-white focus:ring-primary focus:border-primary placeholder-gray-400 text-sm shadow-sm transition-shadow"
                                    type="email" value="alex@mediahub.app" />
                            </div>
                        </label>
                    </div>
                </div>
            </section>
            <!-- Section 2: Preferences -->
            <section
                class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark overflow-hidden">
                <div
                    class="px-6 py-4 border-b border-border-light dark:border-border-dark bg-gray-50/50 dark:bg-gray-800/30">
                    <h3 class="text-lg font-bold text-text-main dark:text-white">Preferences</h3>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <!-- Language Select -->
                    <div class="max-w-md">
                        <label class="block mb-4">
                            <span class="text-sm font-medium text-text-main dark:text-gray-300 mb-1.5 block">Interface
                                Language</span>
                            <select
                                class="form-select block w-full py-2.5 bg-white dark:bg-gray-900 border border-border-light dark:border-gray-700 rounded-lg text-text-main dark:text-white focus:ring-primary focus:border-primary text-sm shadow-sm">
                                <option selected="" value="en">English (US)</option>
                                <option value="es">Español</option>
                                <option value="jp">日本語</option>
                                <option value="fr">Français</option>
                            </select>
                        </label>
                    </div>
                    <hr class="border-border-light dark:border-gray-700 my-4" />
                    <!-- Dark Mode Toggle -->
                    <div class="flex items-center justify-between">
                        <div class="flex flex-col">
                            <span class="text-base font-semibold text-text-main dark:text-white">Dark Mode</span>
                            <span class="text-sm text-text-secondary dark:text-gray-400">Switch to a darker theme for
                                low-light
                                environments.</span>
                        </div>
                        <label class="flex items-center cursor-pointer relative" for="dark-mode-toggle">
                            <input class="sr-only peer" id="dark-mode-toggle" type="checkbox" />
                            <div
                                class="w-11 h-6 bg-gray-200 dark:bg-gray-700 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                            </div>
                        </label>
                    </div>
                </div>
            </section>
            <!-- Section 3: Data Management -->
            <section
                class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark overflow-hidden">
                <div
                    class="px-6 py-4 border-b border-border-light dark:border-border-dark bg-gray-50/50 dark:bg-gray-800/30">
                    <h3 class="text-lg font-bold text-text-main dark:text-white">Data Management</h3>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h4 class="text-base font-semibold text-text-main dark:text-white">Export Data</h4>
                            <p class="text-sm text-text-secondary dark:text-gray-400 mt-1">Download a copy of your
                                tracking
                                history
                                in CSV format.</p>
                        </div>
                        <button
                            class="flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg border border-border-light dark:border-gray-600 bg-white dark:bg-gray-800 text-text-main dark:text-white font-medium text-sm hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors min-w-[140px]"
                            type="button">
                            <span class="material-symbols-outlined text-[20px]">download</span>
                            Export CSV
                        </button>
                    </div>
                    <hr class="border-border-light dark:border-gray-700" />
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h4 class="text-base font-semibold text-text-main dark:text-white">Delete Account</h4>
                            <p class="text-sm text-text-secondary dark:text-gray-400 mt-1">Permanently remove your
                                account
                                and all
                                associated data.</p>
                        </div>
                        <button
                            class="flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg border border-red-200 dark:border-red-900/50 bg-red-50 dark:bg-red-900/10 text-red-600 dark:text-red-400 font-medium text-sm hover:bg-red-100 dark:hover:bg-red-900/20 transition-colors min-w-[140px]"
                            type="button">
                            <span class="material-symbols-outlined text-[20px]">delete</span>
                            Delete Account
                        </button>
                    </div>
                </div>
            </section>
            <div class="flex justify-end mt-8">
                <button
                    class="px-6 py-2.5 bg-primary hover:bg-blue-600 text-white font-semibold rounded-lg shadow-md transition-all transform active:scale-95 text-sm flex items-center gap-2"
                    type="button">
                    <span class="material-symbols-outlined text-[20px]" wire:loading.remove>save</span>
                    <span class="material-symbols-outlined text-[20px]" wire:loading wire:target="save">spinner</span>
                    Save Changes
                </button>
            </div>
        </form>
    </div>
    {{-- <div
        class="fixed bottom-0 left-0 md:left-64 right-0 p-4 bg-surface-light/90 dark:bg-surface-dark/90 backdrop-blur-md border-t border-border-light dark:border-border-dark z-10 flex justify-end items-center gap-4">
        <span class="text-sm text-text-secondary dark:text-gray-400 hidden sm:inline-block">Unsaved changes will be
            lost</span>
        <button
            class="px-6 py-2.5 bg-primary hover:bg-blue-600 text-white font-semibold rounded-lg shadow-md transition-all transform active:scale-95 text-sm flex items-center gap-2"
            type="button">
            <span class="material-symbols-outlined text-[20px]">save</span>
            Save Changes
        </button>
    </div> --}}
</div>