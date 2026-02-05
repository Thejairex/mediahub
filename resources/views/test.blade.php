<!DOCTYPE html>

<html class="dark" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Media Hub - Manga Library</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <!-- Google Fonts: Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
    rel="stylesheet" />
  <!-- Material Symbols -->
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#197fe6",
            "background-light": "#f6f7f8",
            "background-dark": "#111921",
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
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .active-fill {
      font-variation-settings: 'FILL' 1;
    }
  </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white antialiased">
  <div class="flex h-screen w-full overflow-hidden">
    <!-- SideNavBar -->
    <aside class="flex w-64 flex-col border-r border-[#dce0e5] dark:border-gray-800 bg-white dark:bg-background-dark">
      <div class="flex flex-col gap-4 p-4">
        <div class="flex items-center gap-3 mb-6">
          <div class="bg-primary rounded-full size-10 flex items-center justify-center text-white">
            <span class="material-symbols-outlined">database</span>
          </div>
          <div class="flex flex-col">
            <h1 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Media Hub</h1>
            <p class="text-[#637588] dark:text-gray-400 text-xs font-normal">Personal Tracker</p>
          </div>
        </div>
        <nav class="flex flex-col gap-1">
          <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-[#637588] dark:text-gray-400 hover:bg-[#f0f2f4] dark:hover:bg-gray-800 transition-colors"
            href="#">
            <span class="material-symbols-outlined">play_circle</span>
            <p class="text-sm font-medium">Anime</p>
          </a>
          <a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary transition-colors" href="#">
            <span class="material-symbols-outlined active-fill">book_2</span>
            <p class="text-sm font-bold">Manga</p>
          </a>
          <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-[#637588] dark:text-gray-400 hover:bg-[#f0f2f4] dark:hover:bg-gray-800 transition-colors"
            href="#">
            <span class="material-symbols-outlined">menu_book</span>
            <p class="text-sm font-medium">Novels</p>
          </a>
        </nav>
      </div>
      <div class="mt-auto p-4 border-t border-[#dce0e5] dark:border-gray-800">
        <div class="flex items-center gap-3">
          <div class="size-8 rounded-full bg-gray-200 dark:bg-gray-700 bg-cover bg-center"
            data-alt="User profile avatar illustration"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB-Zv11ZVAZ6x4T6WCOt424TqqfOLEo0LQv4gf0OQvkCqjuPsyuD_nIqm97rZ2OUFSO2aNjp0R3DX0qHdAnz24P6Ow9PQVJ-LMk32hMcmT2pG1jh15G4HWmlnoh-ubjCG5K1gN6i1ixucXXT8NKCMZkvHZQIC8Vm4fQ1wjYKv8CIRtrYnZfvGdOTBwKKZ37OyQhWYf4kVOa9NLzuC8-vjqhNFB4fOSdmoXOg4VNBhct8Aj1TGxlfQWdsDsUqhtjLbElto66WJuJ-gIG')">
          </div>
          <p class="text-sm font-medium truncate">Alex Reader</p>
          <span class="material-symbols-outlined ml-auto text-sm text-[#637588]">settings</span>
        </div>
      </div>
    </aside>
    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col overflow-y-auto">
      <!-- Top Header Actions -->
      
    </main>
  </div>
</body>

</html>