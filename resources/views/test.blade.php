<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Media Hub - Profile Settings</title>
  <!-- Google Fonts: Inter -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
    rel="stylesheet" />
  <!-- Material Symbols -->
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <!-- Tailwind CSS with Config -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#197fe6",
            "background-light": "#f6f7f8",
            "background-dark": "#111921",
            "surface-light": "#ffffff",
            "surface-dark": "#1a222d",
            "border-light": "#e5e7eb",
            "border-dark": "#2d3748",
            "text-main": "#111418",
            "text-secondary": "#637588",
          },
          fontFamily: {
            "display": ["Inter", "sans-serif"]
          },
          borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
        },
      },
    }
  </script>
  <style>
    /* Custom scrollbar for webkit */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-track {
      background: transparent;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #cbd5e1;
      border-radius: 20px;
    }

    .dark ::-webkit-scrollbar-thumb {
      background-color: #475569;
    }

    /* Toggle Switch styling support */
    .toggle-checkbox:checked {
      right: 0;
      border-color: #197fe6;
    }

    .toggle-checkbox:checked+.toggle-label {
      background-color: #197fe6;
    }
  </style>
</head>

<body
  class="bg-background-light dark:bg-background-dark text-text-main dark:text-white font-display antialiased h-screen flex overflow-hidden">
  <!-- Sidebar Navigation -->
  <aside
    class="w-64 flex-shrink-0 bg-surface-light dark:bg-surface-dark border-r border-border-light dark:border-border-dark flex flex-col h-full hidden md:flex transition-colors duration-300">
    <div class="p-6">
      <div class="flex items-center gap-3">
        <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center text-white">
          <span class="material-symbols-outlined text-[20px]">movie</span>
        </div>
        <h1 class="text-lg font-bold tracking-tight">Media Hub</h1>
      </div>
      <p class="mt-1 text-xs text-text-secondary dark:text-gray-400 font-medium ml-11">Personal Tracker</p>
    </div>
    <nav class="flex-1 px-4 space-y-1 overflow-y-auto">
      <!-- Active Item: Profile -->
      <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary group transition-all"
        href="#">
        <span class="material-symbols-outlined text-[24px] fill-1">person</span>
        <span class="text-sm font-medium">Profile</span>
      </a>
      <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all group"
        href="#">
        <span class="material-symbols-outlined text-[24px]">settings</span>
        <span class="text-sm font-medium">Preferences</span>
      </a>
      <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all group"
        href="#">
        <span class="material-symbols-outlined text-[24px]">security</span>
        <span class="text-sm font-medium">Account</span>
      </a>
      <div class="pt-4 mt-4 border-t border-border-light dark:border-border-dark">
        <p class="px-3 text-xs font-semibold text-text-secondary dark:text-gray-500 uppercase tracking-wider mb-2">
          Library</p>
        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all group"
          href="#">
          <span class="material-symbols-outlined text-[24px]">menu_book</span>
          <span class="text-sm font-medium">My Lists</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all group"
          href="#">
          <span class="material-symbols-outlined text-[24px]">analytics</span>
          <span class="text-sm font-medium">Stats</span>
        </a>
      </div>
    </nav>
    <div class="p-4 border-t border-border-light dark:border-border-dark">
      <button
        class="flex items-center gap-3 px-3 py-2 w-full rounded-lg text-text-secondary dark:text-gray-400 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors">
        <span class="material-symbols-outlined text-[20px]">logout</span>
        <span class="text-sm font-medium">Log Out</span>
      </button>
    </div>
  </aside>
  <!-- Main Content Area -->
  <main class="flex-1 h-full overflow-y-auto bg-background-light dark:bg-background-dark relative">
    <div class="max-w-4xl mx-auto px-6 py-10 md:px-12 md:py-12">
      <!-- Page Heading -->
      <header class="mb-10">
        <h2 class="text-3xl md:text-4xl font-black tracking-tight text-text-main dark:text-white mb-2">Profile Settings
        </h2>
        <p class="text-text-secondary dark:text-gray-400 text-lg">Manage your personal information and application
          preferences.</p>
      </header>
      <!-- Form Container -->
      <form class="space-y-12 pb-20">
        <!-- Section 1: Personal Info -->
        <section
          class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark overflow-hidden">
          <div class="px-6 py-4 border-b border-border-light dark:border-border-dark bg-gray-50/50 dark:bg-gray-800/30">
            <h3 class="text-lg font-bold text-text-main dark:text-white">Personal Info</h3>
          </div>
          <div class="p-6 md:p-8 space-y-8">
            <!-- Avatar Upload -->
            <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
              <div class="relative group">
                <div
                  class="w-24 h-24 rounded-full bg-cover bg-center border-2 border-white dark:border-gray-700 shadow-sm"
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
                <p class="text-sm text-text-secondary dark:text-gray-400 mb-3">Allowed formats: JPG, PNG. Max size: 2MB.
                </p>
                <div class="flex gap-3">
                  <button
                    class="px-4 py-2 bg-background-light dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-text-main dark:text-white text-sm font-medium rounded-lg transition-colors border border-border-light dark:border-gray-600"
                    type="button">
                    Upload New
                  </button>
                  <button class="px-4 py-2 text-red-600 dark:text-red-400 text-sm font-medium hover:underline"
                    type="button">
                    Remove
                  </button>
                </div>
              </div>
            </div>
            <!-- Text Fields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <label class="block">
                <span class="text-sm font-medium text-text-main dark:text-gray-300 mb-1.5 block">Display Name</span>
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
                <span class="text-sm font-medium text-text-main dark:text-gray-300 mb-1.5 block">Email Address</span>
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
          <div class="px-6 py-4 border-b border-border-light dark:border-border-dark bg-gray-50/50 dark:bg-gray-800/30">
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
                <span class="text-sm text-text-secondary dark:text-gray-400">Switch to a darker theme for low-light
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
          <div class="px-6 py-4 border-b border-border-light dark:border-border-dark bg-gray-50/50 dark:bg-gray-800/30">
            <h3 class="text-lg font-bold text-text-main dark:text-white">Data Management</h3>
          </div>
          <div class="p-6 md:p-8 space-y-6">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
              <div>
                <h4 class="text-base font-semibold text-text-main dark:text-white">Export Data</h4>
                <p class="text-sm text-text-secondary dark:text-gray-400 mt-1">Download a copy of your tracking history
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
                <p class="text-sm text-text-secondary dark:text-gray-400 mt-1">Permanently remove your account and all
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
      </form>
    </div>
    <!-- Sticky Footer for Save Action -->
    <div
      class="fixed bottom-0 left-0 md:left-64 right-0 p-4 bg-surface-light/90 dark:bg-surface-dark/90 backdrop-blur-md border-t border-border-light dark:border-border-dark z-10 flex justify-end items-center gap-4">
      <span class="text-sm text-text-secondary dark:text-gray-400 hidden sm:inline-block">Unsaved changes will be
        lost</span>
      <button
        class="px-6 py-2.5 bg-primary hover:bg-blue-600 text-white font-semibold rounded-lg shadow-md transition-all transform active:scale-95 text-sm flex items-center gap-2"
        type="button">
        <span class="material-symbols-outlined text-[20px]">save</span>
        Save Changes
      </button>
    </div>
  </main>
</body>

</html>