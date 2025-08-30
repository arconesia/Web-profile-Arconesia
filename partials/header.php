<?php
  $baseUrl = '/Arconesia';
?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Arconesia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config={theme:{extend:{fontFamily:{sans:['Montserrat','ui-sans-serif','system-ui']},colors:{brand:'#ff8a00',brand2:'#ffb347'}}}};</script>
    <style>
      @keyframes scroll-x { from { transform: translateX(0); } to { transform: translateX(-100%); } }
      .animate-scroll-x { animation: scroll-x 30s linear infinite; }
    </style>
    <link rel="icon" href="<?=$baseUrl?>/assets/img/favicon.png" />
  </head>
  <body class="font-sans text-slate-800">
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur shadow">
      <div class="max-w-[1160px] mx-auto px-4 py-3 flex items-center justify-between">
        <a href="<?=$baseUrl?>/index.php" class="shrink-0">
          <img src="<?=$baseUrl?>/assets/img/logo-hitam.png" alt="Arconesia" class="h-7" />
        </a>
        <button class="md:hidden w-10 h-10 grid place-items-center" aria-label="Toggle navigation" data-nav-toggle>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
        <nav class="hidden md:flex items-center gap-6" data-nav>
          <ul class="flex items-center gap-6">
            <li><a class="hover:text-brand font-medium" href="<?=$baseUrl?>/index.php">Beranda</a></li>
            <li><a class="hover:text-brand font-medium" href="<?=$baseUrl?>/about.php">Tentang</a></li>
            <li><a class="hover:text-brand font-medium" href="<?=$baseUrl?>/arcofarm.php">ArcoFarm</a></li>
            <li><a class="hover:text-brand font-medium" href="<?=$baseUrl?>/arcofund.php">ArcoFund</a></li>
            <li><a class="hover:text-brand font-medium" href="<?=$baseUrl?>/arcoland.php">ArcoLand</a></li>
            <li><a class="hover:text-brand font-medium" href="<?=$baseUrl?>/blog.php">Blog</a></li>
          </ul>
          <a href="login.php" class="ml-2 inline-flex items-center rounded-full border px-4 py-2 text-sm font-semibold">Login</a>
        </nav>
      </div>
      <nav class="md:hidden hidden border-t bg-white" data-nav>
        <div class="max-w-[1160px] mx-auto px-4 py-3 grid gap-3">
          <a class="hover:text-brand" href="<?=$baseUrl?>/index.php">Beranda</a>
          <a class="hover:text-brand" href="<?=$baseUrl?>/about.php">Tentang</a>
          <a class="hover:text-brand" href="<?=$baseUrl?>/arcofarm.php">ArcoFarm</a>
          <a class="hover:text-brand" href="<?=$baseUrl?>/arcofund.php">ArcoFund</a>
          <a class="hover:text-brand" href="<?=$baseUrl?>/arcoland.php">ArcoLand</a>
          <a class="hover:text-brand" href="<?=$baseUrl?>/blog.php">Blog</a>
          <a href="login.php" class="inline-flex items-center justify-center rounded-full border px-4 py-2 text-sm font-semibold w-max">Login</a>
        </div>
      </nav>
    </header>

