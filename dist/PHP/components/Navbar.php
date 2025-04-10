<header x-data="{ isMobileMenuOpen: false }" class="fixed inset-x-0 top-0 z-50 bg-white shadow-sm">
  <nav class="flex items-center justify-between px-6 py-1 xl:px-8" aria-label="Global">
    <div class="flex xl:hidden">
      <a href="/home/" class="p-2">
        <span class="sr-only">Harmoni</span>
        <img class="h-18 w-auto" src="//harmoni.properties/wp-content/uploads/2024/06/harmoni_logo.png" alt="" />
      </a>
    </div>
    <div class="flex xl:hidden">
      <button @click="isMobileMenuOpen = !isMobileMenuOpen" type="button" class="cursor-pointer text-harmoni-gray -m-2.5 inline-flex items-center justify-center rounded-md p-2.5">
        <span class="sr-only">Open main menu</span>
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden xl:flex">
      <a href="/home/" class="-m-1.5 p-1.5">
        <span class="sr-only">Harmoni</span>
        <img class="h-18 w-auto" src="//harmoni.properties/wp-content/uploads/2024/06/harmoni_logo.png" alt="" />
      </a>
    </div>
    <div class="hidden items-center xl:flex xl:gap-x-20">
      <a href="/about-us/" class="text-harmoni-gray font-serif text-xl font-semibold"><?= __("About Us") ?></a>

      <div class="relative" x-data="{ isOpen: false}">
        <a href="/design-features/" @mouseenter="isOpen = true" @mouseleave="isOpen = false" type="button" class="text-harmoni-gray flex cursor-pointer items-center gap-x-1 font-serif text-xl font-semibold" aria-expanded="false">
          <?= __("Design & Features") ?>
          <svg class="size-5 flex-none text-harmoni-dark-brown" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </a>
        <div @mouseenter="isOpen = true" @mouseleave="isOpen = false" x-cloak x-show="isOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute top-full -left-8 z-10 mt-3 w-screen max-w-3xs overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
          <div class="p-3">
            <div class="rounded-lg p-3 hover:bg-gray-50">
              <a href="/quality-promise/" class="font-serif text-lg font-semibold text-harmoni-dark-brown"> <?= __("Quality Promise") ?> </a>
            </div>
            <div class="rounded-lg p-3 hover:bg-gray-50">
              <a href="/sustainability/" class="font-serif text-lg font-semibold text-harmoni-dark-brown"> <?= __("Sustainability") ?> </a>
            </div>
          </div>
        </div>
      </div>

      <a href="/faq/" class="text-harmoni-gray font-serif text-xl font-semibold"><?= __("FAQ") ?></a>
      <a href="/home/#contact-form" class="text-harmoni-gray font-serif text-xl font-semibold"><?= __("Contact Us") ?></a>
    </div>
    <div class="hidden xl:flex xl:justify-end">
      <a href="/languages/" class="text-base/6 font-medium text-harmoni-dark-brown">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
        </svg>
      </a>
    </div>
  </nav>
  <div x-cloak x-show="isMobileMenuOpen" class="xl:hidden" role="dialog" aria-modal="true">
    <div x-cloak x-show="isMobileMenuOpen" class="fixed inset-0 z-50 bg-black opacity-20 transition-all duration-700 ease-in-out"></div>
    <div @click.outside="isMobileMenuOpen = false" x-cloak x-show="isMobileMenuOpen" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
      <div class="flex items-center justify-between">
        <a href="/home/" class="-m-1.5 p-1.5">
          <span class="sr-only">Harmoni</span>
          <img class="h-18 w-auto" src="//harmoni.properties/wp-content/uploads/2024/06/harmoni_logo.png" alt="" />
        </a>
        <button @click="isMobileMenuOpen = false" type="button" class="cursor-pointer text-harmoni-gray -m-2.5 rounded-md p-2.5">
          <span class="sr-only">Close menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/25">
          <div class="space-y-2 py-6">
            <a href="/home/" class="text-harmoni-gray hover:bg-harmoni-gray -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold hover:text-white"><?= __("Home") ?></a>
            <a href="/about-us/" class="text-harmoni-gray hover:bg-harmoni-gray -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold hover:text-white"><?= __("About Us") ?></a>
            <a href="/design-features/" class="text-harmoni-gray hover:bg-harmoni-gray -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold hover:text-white"><?= __("Design & Features") ?></a>
            <a href="/quality-promise/" class="text-harmoni-gray hover:bg-harmoni-gray -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold hover:text-white"><?= __("Quality Promise") ?></a>
            <a href="/sustainability/" class="text-harmoni-gray hover:bg-harmoni-gray -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold hover:text-white"><?= __("Sustainability") ?></a>
            <a href="/faq/" class="text-harmoni-gray hover:bg-harmoni-gray -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold hover:text-white"><?= __("FAQ") ?></a>
            <a href="/home/#contact-form" class="text-harmoni-gray hover:bg-harmoni-gray -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold hover:text-white"><?= __("Contact Us") ?></a>
            <a href="/languages/" class="text-harmoni-gray hover:bg-harmoni-gray -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold hover:text-white"><?= __("Languages") ?> <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>