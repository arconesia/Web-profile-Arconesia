<?php include __DIR__ . '/partials/header.php'; ?>

<main id="blog">
  <!-- Hero -->
  <section class="relative h-[40vh] min-h-[320px] bg-cover bg-center text-white" style="background-image:linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.4)),url('assets/img/banner/banner-blog.png')">
    <div class="max-w-[1160px] mx-auto px-4 h-full flex flex-col justify-center">
      <h1 class="text-5xl md:text-6xl font-extrabold">Blog</h1>
      <p class="text-xl text-white/90">Wawasan, berita, dan cerita dari dunia agritech.</p>
    </div>
  </section>

  <!-- Blog Grid -->
  <section class="py-18 md:py-20">
    <div class="max-w-[1160px] mx-auto px-4">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Blog Post 1 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="assets/img/farm-1.png" alt="Blog post image" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="font-bold text-xl mb-2">Masa Depan Pertanian: Tumpang Sari Berkelanjutan</h3>
            <p class="text-slate-600 mb-4">Temukan bagaimana tumpang sari tidak hanya meningkatkan hasil panen tetapi juga menjaga kesehatan tanah untuk generasi mendatang...</p>
            <a href="#" class="font-semibold text-brand hover:underline">Baca Selengkapnya</a>
          </div>
        </article>
        <!-- Blog Post 2 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="assets/img/petani-2.png" alt="Blog post image" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="font-bold text-xl mb-2">Memberdayakan Petani Perempuan di Era Digital</h3>
            <p class="text-slate-600 mb-4">Kisah inspiratif tentang bagaimana teknologi membantu petani perempuan mengatasi tantangan dan meraih kesuksesan...</p>
            <a href="#" class="font-semibold text-brand hover:underline">Baca Selengkapnya</a>
          </div>
        </article>
        <!-- Blog Post 3 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="assets/img/hero.png" alt="Blog post image" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="font-bold text-xl mb-2">5 Teknologi Agritech yang Mengubah Permainan</h3>
            <p class="text-slate-600 mb-4">Dari drone hingga sensor tanah, lihat teknologi yang mendorong efisiensi dan keberlanjutan dalam pertanian modern...</p>
            <a href="#" class="font-semibold text-brand hover:underline">Baca Selengkapnya</a>
          </div>
        </article>
        <!-- Add more blog posts as needed -->
      </div>

      <!-- Pagination -->
      <div class="mt-12 flex justify-center gap-4">
        <a href="#" class="px-4 py-2 rounded-md bg-gray-200 text-slate-700 hover:bg-gray-300">Sebelumnya</a>
        <a href="#" class="px-4 py-2 rounded-md bg-brand text-white hover:bg-brand/90">Selanjutnya</a>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
