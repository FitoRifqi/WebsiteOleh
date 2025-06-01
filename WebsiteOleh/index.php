<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Info oleh-oleh kota Lamongan
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-white text-[#1a1a1a]">
  <header class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto bg-white shadow-md sticky top-0 z-30">
   <div class="flex items-center space-x-2">
    <img alt="Logo kabupaten Lamongan" class="w-10 h-10" height="32" src="../websiteoleh/img/logolamongan.png" width="32"/>
    <span class="font-semibold text-lg text-orange-600">
      Oleh - Oleh Lamongan
     </span>
   </div>
   <nav class="hidden md:flex space-x-8 text-sm font-medium text-[#1a1a1a]"> 
    <a class="hover:text-[#d87a4a] transition-colors" href="index.php">
     Beranda
    </a>
    <a class="hover:text-[#d87a4a] transition-colors" href="">
     Kategori
    </a>
    <a class="hover:text-[#d87a4a] transition-colors" href="#">
     Rekomendasi
    </a>
    <a class="hover:text-[#d87a4a] transition-colors" href="#">
     Tempat
    </a>
    <a class="hover:text-[#d87a4a] transition-colors" href="#">
     Artikel Lainnya
    </a>
   </nav>
   <div class="hidden md:flex items-center space-x-4">
    <button aria-label="Search" class="text-sm font-semibold text-[#1a1a1a] hover:text-[#d87a4a] transition-colors">
     <i class="fas fa-search">
     </i>
    </button>
    <button class="bg-[#1a1a1a] text-white text-sm font-semibold px-5 py-2 rounded-full hover:bg-[#d87a4a] transition-colors" >
    <a href="admin/login.php">Masuk</a>
    </button>
   </div>
   <button aria-label="Open menu" class="md:hidden text-[#1a1a1a] text-xl">
    <i class="fas fa-bars">
    </i>
   </button>
  </header>
  <main class="max-w-7xl mx-auto px-6 py-12 flex flex-col md:flex-row items-center md:items-start gap-10 md:gap-20">
   <section class="flex-1 max-w-xl">
    <h1 class="text-3xl sm:text-4xl font-extrabold leading-tight text-[#1a1a1a] mb-6">
     Selamat Datang di info
     <br/>
     Oleh - oleh kota
     <span class="text-[#d87a4a]">
      Lamongan
     </span>
     .
    </h1>
    <p class="text-[#4a4a4a] text-base sm:text-lg mb-8 leading-relaxed">
    Temukan beberapa rekomendasi oleh-oleh khas dari kota Lamongan yang terkenal dengan cita rasa dan kualitas terbaik yang wajib Anda coba dan bawa pulang sebagai kenang-kenangan.
    </p>
    <button class="bg-[#d87a4a] text-white font-semibold px-8 py-3 rounded-full hover:bg-[#b96a3a] transition-colors">
     Lihat Rekomendasi
    </button>
   </section>
   <section class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8">
    <div class="rounded-3xl overflow-hidden shadow-lg">
     <img alt="Wingko Babat" class="w-full h-full object-cover" height="400" src="../websiteoleh/img/Wingko Babat.jpg" width="320"/>
    </div>
    <div class="flex flex-col gap-6">
     <div class="rounded-3xl overflow-hidden shadow-lg h-48 sm:h-52">
      <img alt="Soto Lamongan" class="w-full h-full object-cover" height="200" src="../websiteoleh/img/soto lamongan.jpg" width="320"/>
     </div>
     <div class="rounded-3xl overflow-hidden shadow-lg h-48 sm:h-52">
      <img alt="Peyek Lamongan" class="w-full h-full object-cover" height="200" src="../websiteoleh/img/peyek.jpg" width="320"/>
     </div>
    </div>
   </section>
  </main>

  <!-- Kategori Oleh-Oleh -->
  <section class="max-w-7xl mx-auto px-6 py-12">
    <h2 class="text-xl font-bold mb-6">Kategori Oleh-Oleh</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
      <a href="kategori/makanan.php" class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center block">
        <i class="fas fa-utensils text-2xl text-[#d87a4a] mb-2"></i>
        <h3 class="font-semibold">Makanan Berat</h3>
      </a>
      <a href="kategori/jajanan.php" class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center block">
        <i class="fas fa-cookie text-2xl text-[#d87a4a] mb-2"></i>
        <h3 class="font-semibold">Jajanan</h3>
      </a>
      <a href="kategori/kerajinan.php" class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center block">
        <i class="fas fa-gem text-2xl text-[#d87a4a] mb-2"></i>
        <h3 class="font-semibold">Kerajinan</h3>
      </a>
    </div>
  </section>

  <!-- Rekomendasi Populer -->
  <section class="max-w-7xl mx-auto px-6 py-6">
    <h2 class="text-xl font-bold mb-4">Rekomendasi Populer</h2>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
      <div class="text-center">
      <img alt="Wingko Babat" class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto" loading="lazy" src="../WebsiteOleh/img/wingko.jpg"/>
      <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">
      Wingko Babat
      </h2>
        <p class="text-sm text-gray-500">5 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
      <div class="text-center">
      <img alt="Jumbrek Lmaongan" class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto" loading="lazy" src="../WebsiteOleh/img/jumbrek.jpg"/>
      <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">
      Jumbrek
      </h2>
        <p class="text-sm text-gray-500">6 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
      <div class="text-center">
      <img alt="Jenang Rochis" class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto" loading="lazy" src="../WebsiteOleh/img/jenang.jpg"/>
      <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">
      Jenang Rochis
      </h2>
        <p class="text-sm text-gray-500">7 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
      <div class="text-center">
      <img alt="Batik Sendang" class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto" loading="lazy" src="../WebsiteOleh/img/batiksendang.jpg"/>
      <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">
      Batik Sendang
      </h2>
        <p class="text-sm text-gray-500">8 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
    </div>
  </section>

  <!-- Tempat Perbelanjaan -->
  <section class="max-w-7xl mx-auto px-6 py-6">
    <h2 class="text-xl font-bold mb-4">Tempat Perbelanjaan</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
     <article class="bg-white rounded-lg shadow-md overflow-hidden">
      <img alt="Interior of Toko Oleh-Oleh Nusantara with a wall sign in Indonesian characters and a table with chairs" class="w-full h-48 object-cover" height="360" src="https://storage.googleapis.com/a1aa/image/2f842387-b655-4b0c-ec06-27e20f268ab6.jpg" width="600"/>
      <div class="p-4">
       <h3 class="font-semibold text-lg mb-2">
        Toko Oleh-Oleh Nusantara
       </h3>
       <p class="text-gray-600 text-sm leading-relaxed">
        Menawarkan berbagai macam makanan khas dari seluruh Indonesia, mulai dari keripik, kue tradisional, hingga kopi lokal.
       </p>
        <a class="mt-4 inline-flex items-center text-[#b96a3a] hover:text-blue-800 font-medium" href="https://www.google.com/maps/place/Oleh-Oleh+Khas+Jogja" rel="noopener noreferrer" target="_blank">
        <i class="fas fa-map-marker-alt mr-2">
        </i>
        Lihat Lokasi
        </a>
      </div>
     </article>
     <article class="bg-white rounded-lg shadow-md overflow-hidden">
      <img alt="Two women in aprons preparing traditional Balinese snacks with fresh vegetables on table" class="w-full h-48 object-cover" height="360" src="https://storage.googleapis.com/a1aa/image/44b46fad-0d48-4235-20ef-2bf72e54beac.jpg" width="600"/>
      <div class="p-4">
       <h3 class="font-semibold text-lg mb-2">
        Sentra Oleh-Oleh Bali
       </h3>
       <p class="text-gray-600 text-sm leading-relaxed">
        Spesialis oleh-oleh khas Bali seperti kacang bali, pie susu, dan kerajinan tangan unik.
       </p>
        <a class="mt-4 inline-flex items-center text-[#b96a3a] hover:text-blue-800 font-medium" href="https://www.google.com/maps/place/Oleh-Oleh+Khas+Jogja" rel="noopener noreferrer" target="_blank">
        <i class="fas fa-map-marker-alt mr-2">
        </i>
        Lihat Lokasi
        </a>
      </div>
     </article>
     <article class="bg-white rounded-lg shadow-md overflow-hidden">
      <img alt="Small green room with tables, chairs, refrigerator and sign reading Oleh-Oleh 3" class="w-full h-48 object-cover" height="360" src="https://storage.googleapis.com/a1aa/image/930e6dee-c66e-445c-c569-6e3768baa029.jpg" width="600"/>
      <div class="p-4">
       <h3 class="font-semibold text-lg mb-2">
        Oleh-Oleh Khas Jogja
       </h3>
       <p class="text-gray-600 text-sm leading-relaxed">
        Menjual bakpia, gudeg kering, dan batik khas Yogyakarta dengan harga terjangkau.
       </p>
        <a class="mt-4 inline-flex items-center text-[#b96a3a] hover:text-blue-800 font-medium" href="https://www.google.com/maps/place/Oleh-Oleh+Khas+Jogja" rel="noopener noreferrer" target="_blank">
        <i class="fas fa-map-marker-alt mr-2">
        </i>
        Lihat Lokasi
        </a>
      </div>
     </article>
    </div>
    <div class="mt-10 w-full max-w-6xl flex justify-center">
    <button class="px-6 py-3 bg-[#b96a3a] text-white rounded-lg shadow-md hover:bg-[#b96a3a] transition font-semibold flex items-center space-x-2">
      <span><a href="tempat2.php">Lihat Lebih Banyak</span></a>
      <i class="fas fa-arrow-right"></i>
    </button>

  </section>

  <!-- Artikel Terbaru -->
  <section class="max-w-7xl mx-auto px-6 py-12">
    <h2 class="text-xl font-bold mb-6">Artikel Terbaru</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img alt="Interior of Toko Oleh-Oleh Nusantara with a wall sign in Indonesian characters and a table with chairs" class="w-full h-48 object-cover" height="360" src="https://storage.googleapis.com/a1aa/image/2f842387-b655-4b0c-ec06-27e20f268ab6.jpg" width="600"/>
        <div class="p-4">
          <h3 class="font-semibold mb-2">5 Oleh-Oleh Khas Lamongan Favorit Wisatawan</h3>
          <a href="#" class="inline-block text-sm text-[#d87a4a] hover:underline">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img alt="Wingko Babat" class="w-full h-48 object-cover" height="360" src="../websiteoleh/img/wingko.jpg" width="600"/>
        <div class="p-4">
          <h3 class="font-semibold mb-2">Sejarah di Balik Wingko Babat Lamongan</h3>
          <a href="#" class="inline-block text-sm text-[#d87a4a] hover:underline">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img alt="Interior of Toko Oleh-Oleh Nusantara with a wall sign in Indonesian characters and a table with chairs" class="w-full h-48 object-cover" height="360" src="https://storage.googleapis.com/a1aa/image/2f842387-b655-4b0c-ec06-27e20f268ab6.jpg" width="600"/>
        <div class="p-4">
          <h3 class="font-semibold mb-2">Panduan Wisata Belanja Oleh-Oleh di Lamongan</h3>
          <a href="#" class="inline-block text-sm text-[#d87a4a] hover:underline">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-[#1a1a1a] text-white mt-12">
    <div class="text-center text-xs py-4">
      © 2025 Oleh - Oleh Lamongan. Dibuat oleh Tim Redaksi Anfibra.com.
    </div>
  </footer>

</body>
</html>