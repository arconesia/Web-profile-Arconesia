<?php include __DIR__ . '/partials/header.php'; ?>

<main id="about">
  <!-- Hero -->
  <section class="relative h-[40vh] min-h-[320px] text-white overflow-hidden">
    <img src="assets/img/banner/banner-tentang.png" alt="Palm background" class="absolute inset-0 w-full h-full object-cover" />

    <!-- Content -->
    <div class="relative z-[1] max-w-[1160px] mx-auto px-4 h-full flex flex-col justify-center">
      <div class="max-w-3xl">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
          <span class="italic text-yellow-300">Why</span>
          <span class="ml-3">Oil Palm?</span>
        </h1>
        <p class="mt-4 text-xl md:text-2xl font-extrabold">Indonesia is the largest oil palm producer in the world</p>
        <p class="mt-3 text-white/90 text-base md:text-lg">Annually, 180,000 hectares of oil palm are replanted, leaving many farmers without income until the new palms are harvestable after three years</p>
      </div>
    </div>

    <!-- Arrows -->
    <button type="button" aria-label="Prev" class="absolute left-4 md:left-6 top-1/2 -translate-y-1/2 grid place-items-center w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 transition">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
    </button>
    <button type="button" aria-label="Next" class="absolute right-4 md:right-6 top-1/2 -translate-y-1/2 grid place-items-center w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 transition">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </button>

    <!-- Dots -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex items-center gap-2">
      <span class="w-2 h-2 rounded-full bg-white/60"></span>
      <span class="w-2 h-2 rounded-full bg-white"></span>
      <span class="w-2 h-2 rounded-full bg-white/60"></span>
    </div>
  </section>

  <!-- Body text -->
  <section class="py-14 bg-white">
    <div class="max-w-[1160px] mx-auto px-4">
      <p class="text-slate-700 leading-relaxed max-w-3xl">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.
      </p>
    </div>
  </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>