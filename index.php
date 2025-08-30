<?php
  include __DIR__ . '/partials/header.php';
?>

<main id="home" class="text-slate-800">

  <section class="relative">
    <div class="relative h-[76vh] min-h-[640px] overflow-hidden" data-slider>
      <div class="absolute inset-0 bg-center bg-cover opacity-0 transition-opacity duration-500 is-active" style="background-image:linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),url('assets/img/hero.png')" >
        <div class="relative z-10 h-full text-white max-w-[780px] mx-auto px-4 flex flex-col justify-center text-center">
          <h1 class="text-5xl md:text-6xl font-extrabold mb-3">Expanding Yields, <span class="text-yellow-300">Without</span> Expanding Land</h1>
          <p class="mb-6">Climate-Smart Intercropping for Sustainable Oil Palm</p>
          <!-- Hero indicator dots -->
          <div class="flex justify-center gap-3 mt-8">
            <div class="w-3 h-3 rounded-full bg-white"></div>
            <div class="w-3 h-3 rounded-full bg-white/50"></div>
            <div class="w-3 h-3 rounded-full bg-white/50"></div>
          </div>
        </div>
      </div>
      <div class="absolute inset-0 bg-center bg-cover opacity-0 transition-opacity duration-500" style="background-image:linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),url('assets/img/hero.png')">
        <div class="relative z-10 h-full text-white max-w-[780px] mx-auto px-4 flex flex-col justify-center text-center">
          <h1 class="text-5xl md:text-6xl font-extrabold mb-3">Empowering Smallholders</h1>
          <p class="mb-6">Training, financing, and market access</p>
          <!-- Hero indicator dots -->
          <div class="flex justify-center gap-3 mt-8">
            <div class="w-3 h-3 rounded-full bg-white/50"></div>
            <div class="w-3 h-3 rounded-full bg-white"></div>
            <div class="w-3 h-3 rounded-full bg-white/50"></div>
          </div>
        </div>
      </div>
      <div class="absolute inset-0 bg-center bg-cover opacity-0 transition-opacity duration-500" style="background-image:linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),url('assets/img/hero.png')">
        <div class="relative z-10 h-full text-white max-w-[780px] mx-auto px-4 flex flex-col justify-center text-center">
          <h1 class="text-5xl md:text-6xl font-extrabold mb-3">Data-driven Farm Management</h1>
          <p class="mb-6">Optimize inputs and outcomes</p>
          <!-- Hero indicator dots -->
          <div class="flex justify-center gap-3 mt-8">
            <div class="w-3 h-3 rounded-full bg-white/50"></div>
            <div class="w-3 h-3 rounded-full bg-white/50"></div>
            <div class="w-3 h-3 rounded-full bg-white"></div>
          </div>
        </div>
      </div>
      <button class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/70 w-10 h-10 rounded-full" data-prev aria-label="Previous">‹</button>
      <button class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/70 w-10 h-10 rounded-full" data-next aria-label="Next">›</button>
      <div class="absolute left-1/2 -translate-x-1/2 bottom-4 flex gap-2" data-dots></div>
    </div>
  </section>

  <!-- White Gradient Transition -->
  <div class="relative -mt-32 h-32 bg-gradient-to-b from-transparent to-white"></div>

  <!-- Services -->
  <section id="services" class="py-18 md:py-20">
    <div class="max-w-[1160px] mx-auto px-4">
      <div class="mb-6">
      <h2 class="text-4xl font-bold mb-6"><span class="text-brand italic font-extrabold">Our</span> Services</h2>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5" data-cards>
        <article class="bg-gray-100 rounded-2xl p-4 shadow-sm transition-transform duration-200 hover:scale-105">
          <h3 class="font-semibold mb-2">ArcoFarm</h3>
          <img src="assets/img/os-arcofarm.png" alt="ArcoFarm" class="w-full h-44 object-cover rounded-xl mb-3" />
          <p class="text-slate-600 mb-3">Empowers young, passionate farmers with salaries, training, and risk‑free farming opportunities.</p>
          <a href="#" class="inline-flex items-center rounded-full bg-yellow-400 hover:bg-yellow-300 text-slate-900 px-4 py-2 text-sm font-semibold shadow">Learn More</a>
        </article>
        <article class="bg-gray-100 rounded-2xl p-4 shadow-sm transition-transform duration-200 hover:scale-105">
          <h3 class="font-semibold mb-2">ArcoFund</h3>
          <img src="assets/img/os-arcofund.png" alt="ArcoFund" class="w-full h-44 object-cover rounded-xl mb-3" />
          <p class="text-slate-600 mb-3">Provides experienced intercropping farmers with input financing, technical support, and secured market contracts.</p>
          <a href="#" class="inline-flex items-center rounded-full bg-yellow-400 hover:bg-yellow-300 text-slate-900 px-4 py-2 text-sm font-semibold shadow">Learn More</a>
        </article>
        <article class="bg-gray-100 rounded-2xl p-4 shadow-sm transition-transform duration-200 hover:scale-105">
          <h3 class="font-semibold mb-2">ArcoLand</h3>
          <img src="assets/img/os-arcoland.png" alt="ArcoLand" class="w-full h-44 object-cover rounded-xl mb-3" />
          <p class="text-slate-600 mb-3">Links oil palm farmers offering land for intercropping with landless farmers growing watermelon, maize, or upland rice.</p>
          <a href="#" class="inline-flex items-center rounded-full bg-yellow-400 hover:bg-yellow-300 text-slate-900 px-4 py-2 text-sm font-semibold shadow">Learn More</a>
        </article>
        <article class="bg-gray-100 rounded-2xl p-4 shadow-sm transition-transform duration-200 hover:scale-105">
          <h3 class="font-semibold mb-2">ArcoMonitor</h3>
          <img src="assets/img/os-arcomonitor.png" alt="ArcoMonitor" class="w-full h-44 object-cover rounded-xl mb-3" />
          <p class="text-slate-600 mb-3">A platform for farmers to log activities, manage budgets, and track agri‑inputs, optimizing future planting strategies.</p>
          <a href="#" class="inline-flex items-center rounded-full bg-yellow-400 hover:bg-yellow-300 text-slate-900 px-4 py-2 text-sm font-semibold shadow">Learn More</a>
        </article>
      </div>
    </div>
  </section>

  <!-- How We Work -->
  <section class="py-18 md:py-20 text-white" style="background:linear-gradient(135deg,#ffb347 0%,#ff8a00 40%,#ff6a00 100%)">
    <div class="max-w-[1160px] mx-auto px-4 grid md:grid-cols-2 gap-9 items-start">
      <div>
      <h2 class="text-4xl font-bold">How We Work?</h2>
        <p class="text-white/90 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="rounded-2xl overflow-hidden shadow-2xl max-w-full">
          <div class="relative pt-[56%]">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/47Dv9x7utYI" title="Arconesia's Profile" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="flex items-center justify-center md:mt-60 lg:mt-60 xl:mt-45">
        <a class="inline-flex items-center gap-4 rounded-full bg-white text-slate-900 px-6 py-4 shadow-[0_12px_24px_rgba(0,0,0,0.25)] hover:shadow-[0_14px_28px_rgba(0,0,0,0.3)] transition-shadow" href="assets/docs/company-profile.pdf" download>
          <div class="leading-4 text-left">
            <div class="text-slate-600 text-sm">Download</div>
            <div class="font-semibold">Company Profile (PDF)</div>
          </div>
          <span class="grid place-items-center w-9 h-9 rounded-full bg-slate-100 border">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
              <path d="M12 3a1 1 0 011 1v9.586l2.293-2.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L11 13.586V4a1 1 0 011-1z"/>
              <path d="M5 20a1 1 0 100 2h14a1 1 0 100-2H5z"/>
            </svg>
          </span>
        </a>
      </div>
    </div>
  </section>

  <!-- Impact -->
  <section class="overflow-hidden">
    <div class="grid md:grid-cols-2 items-center">
      <div class="max-w-[580px] mx-auto px-4 py-10">
        <h2 class="text-4xl font-bold mb-6"><span class="text-brand italic font-extrabold">Our</span> Impact</h2>
        <div class="space-y-8">
          <div>
              <div class="text-2xl md:text-3xl font-bold">
                <span data-counter="30" data-suffix="%">0</span> - <span data-counter="50" data-suffix="%">0</span>
              </div>
            <div class="text-sm md:text-base text-slate-600 font-medium">Increased income of oil palm farmers</div>
          </div>
          <div>
              <div class="text-2xl md:text-3xl font-bold" data-counter="300" data-suffix="+">0</div>
            <div class="text-sm md:text-base text-slate-600 font-medium">Women Empowerment</div>
          </div>
          <div>
              <div class="text-2xl md:text-3xl font-bold" data-counter="600" data-suffix=" Tons">0</div>
            <div class="text-sm md:text-base text-slate-600 font-medium">Potential carbon sequestration that could become future income stream for farmers</div>
          </div>
          <div>
              <div class="text-2xl md:text-3xl font-bold" data-counter="100" data-suffix="+ Ha">0</div>
            <div class="text-sm md:text-base text-slate-600 font-medium">Land access provided to landless farmers</div>
          </div>
          <div>
              <div class="text-2xl md:text-3xl font-bold" data-counter="3" data-suffix=" Billion" data-prefix="IDR ">0</div>
            <div class="text-sm md:text-base text-slate-600 font-medium">Total cost savings for oil palm landowners</div>
          </div>
        </div>
      </div>
      <div class="relative ml-[230px]">
        <img src="assets/img/petani-2.png" alt="Farmer woman" class="w-full h-auto object-cover" />
      </div>
    </div>
  </section>
  <!-- Since 2021 -->
  <section class="relative py-18 md:py-20 text-white overflow-hidden">
    <video class="absolute inset-0 w-full h-full object-cover" src="assets/video/backmap-1.mp4" autoplay loop muted playsinline></video>
    <div class="absolute inset-0 bg-black/35"></div>
    <div class="absolute inset-x-0 bottom-0 h-[70%] md:h-[60%] bg-gradient-to-t from-orange-500/70 to-transparent"></div>
    <div class="relative max-w-[1160px] mx-auto px-4">
      <h2 class="text-4xl font-bold text-center">Since 2021</h2>
      <p class="text-center text-white/90">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="my-6 text-center">
        <img src="assets/img/idn-map.png" alt="Indonesia map" class="mx-auto w-[900px] h-auto drop-shadow-[0_20px_40px_rgba(0,0,0,0.45)]" />
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="flex items-center justify-center gap-4">
          <img src="assets/img/small-farmer.png" alt="Small farmer icon" class="h-auto w-[50px] object-contain" />
          <div class="text-center">
            <div class="text-2xl font-bold" data-counter="250" data-suffix="+">0</div>
            <div class="text-white/90 text-sm">Small farmers</div>
          </div>
        </div>
        <div class="flex items-center justify-center gap-4">
          <img src="assets/img/pipelines.png" alt="Small farmer icon" class="h-auto w-[50px] object-contain" />
          <div class="text-center">
            <div class="text-2xl font-bold" data-counter="8000" data-suffix="+ ha">0</div>
            <div class="text-white/90 text-sm">In the pipelines</div>
          </div>
        </div>
        <div class="flex items-center justify-center gap-4">
          <img src="assets/img/disbursement.png" alt="Small farmer icon" class="h-auto w-[50px] object-contain" />
          <div class="text-center">
            <div class="text-2xl font-bold" data-counter="6" data-suffix=".2 Billion">0</div>
            <div class="text-white/90 text-sm">Total disbursement to farmers</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Success Stories -->
  <section class="relative min-h-screen">
    <div class="grid md:grid-cols-2 h-screen">
      <!-- Left Column - Full Orange Background -->
      <div class="bg-brand text-white p-8 md:p-16 flex items-center justify-center">
        <div class="max-w-lg">
          <h2 class="text-4xl font-bold">Arco's farmer success stories</h2>
          <p class="text-white/90 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      
      <!-- Right Column - Farm Background with Moving Testimonials -->
      <div class="relative" style="background-image:url('assets/img/farm-1.png'); background-size:cover; background-position:center;">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative h-full flex items-center justify-center p-8">
          <!-- Moving Testimonials Container -->
          <div class="relative overflow-hidden max-w-md w-full">
            <div class="flex gap-8 animate-scroll-x will-change-transform">
              <!-- Testimonial 1 -->
              <div class="max-w-md w-full shrink-0">
                <!-- Profile Section (Outside box) -->
                <div class="flex items-center gap-4 mb-4">
                  <img class="w-14 h-14 rounded-full object-cover border-2 border-white/30" src="assets/img/petani-pp.png" alt="Pak Johan" />
                  <div>
                    <div class="font-semibold text-white text-lg">Pak Johan</div>
                    <div class="text-white/80">Lahan Seluma 1</div>
                  </div>
                </div>
                
                <!-- Testimonial Box -->
                <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 border border-white/30 min-h-[400px] flex flex-col">
                  <!-- Quote Icon -->
                  <div class="text-5xl text-white/60 mb-4">"</div>
                  
                  <!-- Main Quote -->
                  <blockquote class="text-2xl font-bold text-white mb-4">
                    Alhamdulillah saya jadi kaya
                  </blockquote>
                  
                  <!-- Description -->
                  <p class="text-white/90 leading-relaxed">Lorem ipsum praesent ac massa at ligula reet est iaculis. Vivamus est mist aliquet elit ac nisl…</p>
                  
                  <!-- Read More Button -->
                  <div class="text-right mt-auto">
                    <a href="#" class="inline-flex items-center gap-2 rounded-full bg-white/20 hover:bg-white/30 text-white px-5 py-3 font-semibold border border-white/30 transition-colors backdrop-blur-sm">
                      Read More
                      <span class="w-6 h-6 rounded-full bg-white/20 text-white grid place-items-center text-xs">→</span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Testimonial 2 -->
              <div class="max-w-md w-full shrink-0">
                <!-- Profile Section (Outside box) -->
                <div class="flex items-center gap-4 mb-4">
                  <img class="w-14 h-14 rounded-full object-cover border-2 border-white/30" src="assets/img/ceo-pp.png" alt="Bapak Yanda" />
                  <div>
                    <div class="font-semibold text-white text-lg">Bapak Yanda</div>
                    <div class="text-white/80">Lahan Bengkulu</div>
                  </div>
                </div>
                
                <!-- Testimonial Box -->
                <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 border border-white/30 min-h-[400px] flex flex-col">
                  <!-- Quote Icon -->
                  <div class="text-5xl text-white/60 mb-4">"</div>
                  
                  <!-- Main Quote -->
                  <blockquote class="text-2xl font-bold text-white mb-4">
                    Programnya sangat membantu!
                  </blockquote>
                  
                  <!-- Description -->
                  <p class="text-white/90 leading-relaxed">Praesent ac massa at ligula reet est iaculis. Vivamus est mist aliquet elit ac nisl…</p>
                  
                  <!-- Read More Button -->
                  <div class="text-right mt-auto">
                    <a href="#" class="inline-flex items-center gap-2 rounded-full bg-white/20 hover:bg-white/30 text-white px-5 py-3 font-semibold border border-white/30 transition-colors backdrop-blur-sm">
                      Read More
                      <span class="w-6 h-6 rounded-full bg-white/20 text-white grid place-items-center text-xs">→</span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Testimonial 3 -->
              <div class="max-w-md w-full shrink-0">
                <!-- Profile Section (Outside box) -->
                <div class="flex items-center gap-4 mb-4">
                  <img class="w-14 h-14 rounded-full object-cover border-2 border-white/30" src="assets/img/coo-pp.png" alt="Bapak Budi" />
                  <div>
                    <div class="font-semibold text-white text-lg">Bapak Budi</div>
                    <div class="text-white/80">Lahan Jambi</div>
                  </div>
                </div>
                
                <!-- Testimonial Box -->
                <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 border border-white/30 min-h-[400px] flex flex-col">
                  <!-- Quote Icon -->
                  <div class="text-5xl text-white/60 mb-4">"</div>
                  
                  <!-- Main Quote -->
                  <blockquote class="text-2xl font-bold text-white mb-4">
                    Hasil panen saya meningkat
                  </blockquote>
                  
                  <!-- Description -->
                  <p class="text-white/90 leading-relaxed">Vivamus est mist aliquet elit ac nisl. Lorem ipsum praesent ac massa at ligula reet est iaculis.</p>
                  
                  <!-- Read More Button -->
                  <div class="text-right mt-auto">
                    <a href="#" class="inline-flex items-center gap-2 rounded-full bg-white/20 hover:bg-white/30 text-white px-5 py-3 font-semibold border border-white/30 transition-colors backdrop-blur-sm">
                      Read More
                      <span class="w-6 h-6 rounded-full bg-white/20 text-white grid place-items-center text-xs">→</span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Duplicates for seamless loop -->
              <div class="max-w-md w-full shrink-0">
                <!-- Profile Section (Outside box) -->
                <div class="flex items-center gap-4 mb-4">
                  <img class="w-14 h-14 rounded-full object-cover border-2 border-white/30" src="assets/img/petani-pp.png" alt="Pak Johan" />
                  <div>
                    <div class="font-semibold text-white text-lg">Pak Johan</div>
                    <div class="text-white/80">Lahan Seluma 1</div>
                  </div>
                </div>
                
                <!-- Testimonial Box -->
                <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 border border-white/30 min-h-[400px] flex flex-col">
                  <!-- Quote Icon -->
                  <div class="text-5xl text-white/60 mb-4">"</div>
                  
                  <!-- Main Quote -->
                  <blockquote class="text-2xl font-bold text-white mb-4">
                    Alhamdulillah saya jadi kaya
                  </blockquote>
                  
                  <!-- Description -->
                  <p class="text-white/90 leading-relaxed">Lorem ipsum praesent ac massa at ligula reet est iaculis. Vivamus est mist aliquet elit ac nisl…</p>
                  
                  <!-- Read More Button -->
                  <div class="text-right mt-auto">
                    <a href="#" class="inline-flex items-center gap-2 rounded-full bg-white/20 hover:bg-white/30 text-white px-5 py-3 font-semibold border border-white/30 transition-colors backdrop-blur-sm">
                      Read More
                      <span class="w-6 h-6 rounded-full bg-white/20 text-white grid place-items-center text-xs">→</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="max-w-md w-full shrink-0">
                <!-- Profile Section (Outside box) -->
                <div class="flex items-center gap-4 mb-4">
                  <img class="w-14 h-14 rounded-full object-cover border-2 border-white/30" src="assets/img/ceo-pp.png" alt="Bapak Yanda" />
                  <div>
                    <div class="font-semibold text-white text-lg">Bapak Yanda</div>
                    <div class="text-white/80">Lahan Bengkulu</div>
                  </div>
                </div>
                
                <!-- Testimonial Box -->
                <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 border border-white/30 min-h-[400px] flex flex-col">
                  <!-- Quote Icon -->
                  <div class="text-5xl text-white/60 mb-4">"</div>
                  
                  <!-- Main Quote -->
                  <blockquote class="text-2xl font-bold text-white mb-4">
                    Programnya sangat membantu!
                  </blockquote>
                  
                  <!-- Description -->
                  <p class="text-white/90 leading-relaxed">Praesent ac massa at ligula reet est iaculis. Vivamus est mist aliquet elit ac nisl…</p>
                  
                  <!-- Read More Button -->
                  <div class="text-right mt-auto">
                    <a href="#" class="inline-flex items-center gap-2 rounded-full bg-white/20 hover:bg-white/30 text-white px-5 py-3 font-semibold border border-white/30 transition-colors backdrop-blur-sm">
                      Read More
                      <span class="w-6 h-6 rounded-full bg-white/20 text-white grid place-items-center text-xs">→</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="max-w-md w-full shrink-0">
                <!-- Profile Section (Outside box) -->
                <div class="flex items-center gap-4 mb-4">
                  <img class="w-14 h-14 rounded-full object-cover border-2 border-white/30" src="assets/img/coo-pp.png" alt="Bapak Budi" />
                  <div>
                    <div class="font-semibold text-white text-lg">Bapak Budi</div>
                    <div class="text-white/80">Lahan Jambi</div>
                  </div>
                </div>
                
                <!-- Testimonial Box -->
                <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 border border-white/30 min-h-[400px] flex flex-col">
                  <!-- Quote Icon -->
                  <div class="text-5xl text-white/60 mb-4">"</div>
                  
                  <!-- Main Quote -->
                  <blockquote class="text-2xl font-bold text-white mb-4">
                    Hasil panen saya meningkat
                  </blockquote>
                  
                  <!-- Description -->
                  <p class="text-white/90 leading-relaxed">Vivamus est mist aliquet elit ac nisl. Lorem ipsum praesent ac massa at ligula reet est iaculis.</p>
                  
                  <!-- Read More Button -->
                  <div class="text-right mt-auto">
                    <a href="#" class="inline-flex items-center gap-2 rounded-full bg-white/20 hover:bg-white/30 text-white px-5 py-3 font-semibold border border-white/30 transition-colors backdrop-blur-sm">
                      Read More
                      <span class="w-6 h-6 rounded-full bg-white/20 text-white grid place-items-center text-xs">→</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Slider Dots -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-3">
          <div class="w-3 h-3 rounded-full bg-white/50"></div>
          <div class="w-3 h-3 rounded-full bg-white"></div>
          <div class="w-3 h-3 rounded-full bg-white/50"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="py-18 md:py-20 relative" style="background:linear-gradient(180deg,#ff8a00 0%,#ffb347 100%)">
    <div class="max-w-[1160px] mx-auto px-4 text-white">
      <div class="grid lg:grid-cols-4 gap-6 items-start">
        <!-- Text Content - Left Side -->
        <div class="lg:col-span-1 mt-[60px]">
        <h2 class="text-4xl font-bold">Meet Our Team</h2>
        <p class="text-white/90 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
        
        <!-- Team Cards - Right Side (3 columns) -->
        <div class="lg:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="text-center">
              <img class="w-full h-72 object-cover" src="assets/img/ceo-pp.png" alt="CEO" />
          <h4 class="mt-4 mb-0 font-semibold">Jusrian S. Orpayanda</h4>
          <span class="block text-white/80">Chief Executive Officer</span>
        </div>
        <!-- Card 2 -->
        <div class="text-center">
              <img class="w-full h-72 object-cover" src="assets/img/coo-pp.png" alt="COO" />
          <h4 class="mt-4 mb-0 font-semibold">Muhammad Alfian</h4>
          <span class="block text-white/80">Chief Operating Officer</span>
        </div>
        <!-- Card 3 -->
        <div class="text-center">
            <img class="w-full h-72 object-cover" src="assets/img/cto.png" alt="CTO" />
          <h4 class="mt-4 mb-0 font-semibold">Robbie Shugara</h4>
          <span class="block text-white/80">Chief Technology Officer</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Achievements -->
  <section class="py-18 md:py-20">
    <div class="max-w-[1160px] mx-auto px-4">
      <div class="text-center mb-6">
        <h2 class="text-4xl font-bold"><span class="text-brand italic font-extrabold">Our</span> Achievements</h2>
        <p class="text-slate-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <!-- Infinite marquee logos with descriptions -->
      <div class="relative overflow-hidden">
        <div class="flex gap-10 items-start animate-scroll-x will-change-transform">
          <!-- Award 1 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-1.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="Milano Digital Week 2021" />
            <p class="text-xs text-slate-600 leading-tight">Top 3 global call for ideas in Milano Digital Week 2021</p>
          </div>
          <!-- Award 2 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-2.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="BUMN Foundation Award" />
            <p class="text-xs text-slate-600 leading-tight">The Most Favourite Social Enterprise of the 'Pikiran Terbaik Negeri' Program by BUMN Foundation</p>
          </div>
          <!-- Award 3 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-3.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="Milano Digital Week 2021" />
            <p class="text-xs text-slate-600 leading-tight">Top 3 global call for ideas in Milano Digital Week 2021</p>
          </div>
          <!-- Award 4 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-4.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="Innovation Fair 2022" />
            <p class="text-xs text-slate-600 leading-tight">1st Winner of Innovation Fair 2022</p>
          </div>
          <!-- Award 5 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-5.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="SustainPalm Project" />
            <p class="text-xs text-slate-600 leading-tight">Key Implementer of the SustainPalm Project</p>
          </div>
          <!-- Award 6 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-6.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="LEAF Project" />
            <p class="text-xs text-slate-600 leading-tight">Top 3 of LEAF Project – (JICA, DI Vietnam and ANGIN)</p>
          </div>
          
          <!-- Duplicate awards for seamless loop -->
          <!-- Award 1 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-1.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="Milano Digital Week 2021" />
            <p class="text-xs text-slate-600 leading-tight">Top 3 global call for ideas in Milano Digital Week 2021</p>
          </div>
          <!-- Award 2 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-2.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="BUMN Foundation Award" />
            <p class="text-xs text-slate-600 leading-tight">The Most Favourite Social Enterprise of the 'Pikiran Terbaik Negeri' Program by BUMN Foundation</p>
          </div>
          <!-- Award 3 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-3.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="Milano Digital Week 2021" />
            <p class="text-xs text-slate-600 leading-tight">Top 3 global call for ideas in Milano Digital Week 2021</p>
          </div>
          <!-- Award 4 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-4.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="Innovation Fair 2022" />
            <p class="text-xs text-slate-600 leading-tight">1st Winner of Innovation Fair 2022</p>
          </div>
          <!-- Award 5 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-5.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="SustainPalm Project" />
            <p class="text-xs text-slate-600 leading-tight">Key Implementer of the SustainPalm Project</p>
          </div>
          <!-- Award 6 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-6.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="LEAF Project" />
            <p class="text-xs text-slate-600 leading-tight">Top 3 of LEAF Project – (JICA, DI Vietnam and ANGIN)</p>
          </div>
          
          <!-- Additional duplicates for smooth scrolling -->
          <!-- Award 1 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-1.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="Milano Digital Week 2021" />
            <p class="text-xs text-slate-600 leading-tight">Top 3 global call for ideas in Milano Digital Week 2021</p>
          </div>
          <!-- Award 2 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-2.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="BUMN Foundation Award" />
            <p class="text-xs text-slate-600 leading-tight">The Most Favourite Social Enterprise of the 'Pikiran Terbaik Negeri' Program by BUMN Foundation</p>
          </div>
          <!-- Award 3 -->
          <div class="flex-shrink-0 text-center max-w-[200px]">
            <img src="assets/img/award/award-3.png" class="h-24 object-contain opacity-90 mx-auto mb-3" alt="Milano Digital Week 2021" />
            <p class="text-xs text-slate-600 leading-tight">Top 3 global call for ideas in Milano Digital Week 2021</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Partners -->
  <section class="py-18 md:py-20" id="partners">
    <div class="max-w-[1160px] mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Left side - Partner logos carousel -->
        <div class="order-2 lg:order-1">
          <div class="space-y-8 overflow-hidden">
            <!-- Row 1 - Kanan ke Kiri -->
            <div class="relative overflow-hidden">
              <div class="flex gap-8 items-center animate-scroll-right-to-left will-change-transform">
                <img src="assets/img/favicon.png" alt="YaraMila" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Syngenta" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Partner 3" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Agros" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="AMI" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Partner 6" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <!-- Duplicate for seamless loop -->
                <img src="assets/img/favicon.png" alt="YaraMila" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Syngenta" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Partner 3" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Agros" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="AMI" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Partner 6" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
              </div>
            </div>
            
            <!-- Row 2 - Kiri ke Kanan -->
            <div class="relative overflow-hidden">
              <div class="flex gap-8 items-center animate-scroll-left-to-right will-change-transform">
                <img src="assets/img/favicon.png" alt="Angin" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Supernova" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="PUSA" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="DB" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Pitma" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Partner 12" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <!-- Duplicate for seamless loop -->
                <img src="assets/img/favicon.png" alt="Angin" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Supernova" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="PUSA" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="DB" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Pitma" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Partner 12" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
              </div>
            </div>
            
            <!-- Row 3 - Kanan ke Kiri -->
            <div class="relative overflow-hidden">
              <div class="flex gap-8 items-center animate-scroll-right-to-left will-change-transform">
                <img src="assets/img/favicon.png" alt="KoKoTi" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="New Energy Nexus" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="COMTEC" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Partner 16" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="QA Central" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Partner 18" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <!-- Duplicate for seamless loop -->
                <img src="assets/img/favicon.png" alt="KoKoTi" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="New Energy Nexus" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="COMTEC" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Partner 16" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="QA Central" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
                <img src="assets/img/favicon.png" alt="Partner 18" class="h-12 object-contain opacity-70 hover:opacity-100 transition-opacity flex-shrink-0" />
              </div>
            </div>
          </div>
      </div>
        
        <!-- Right side - Text content -->
        <div class="order-1 lg:order-2">
          <h2 class="text-4xl font-bold mb-6">Our <span class="text-brand italic font-extrabold">Partners</span></h2>
          <p class="text-slate-600 mb-8 text-lg leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <img src="<?=$baseUrl?>/assets/img/connect-now.png" alt="Connect Now" class="h-12" />
      </div>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>


