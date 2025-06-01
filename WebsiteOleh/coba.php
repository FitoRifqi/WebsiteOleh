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
  <header class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto">
   <div class="flex items-center space-x-2">
    <img alt="Logo kabupaten Lamongan" class="w-10 h-10" height="32" src="../websiteoleh/img/logolamongan.png" width="32"/>
    <span class="font-semibold text-lg text-orange-600">
      Oleh - Oleh Lamongan
     </span>
   </div>
   <nav class="hidden md:flex space-x-8 text-sm font-medium text-[#1a1a1a]"> 
    <a class="hover:text-[#d87a4a] transition-colors" href="#">
     Beranda
    </a>
    <a class="hover:text-[#d87a4a] transition-colors" href="#">
     Produk
    </a>
    <a class="hover:text-[#d87a4a] transition-colors" href="#">
     Tempat
    </a>
    <a class="hover:text-[#d87a4a] transition-colors" href="#">
     Kontak
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
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center">
        <i class="fas fa-utensils text-2xl text-[#d87a4a] mb-2"></i>
        <h3 class="font-semibold">Makanan</h3>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center">
        <i class="fas fa-wine-bottle text-2xl text-[#d87a4a] mb-2"></i>
        <h3 class="font-semibold">Minuman</h3>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center">
        <i class="fas fa-gem text-2xl text-[#d87a4a] mb-2"></i>
        <h3 class="font-semibold">Kerajinan</h3>
      </div>
    </div>
  </section>

  <!-- Rekomendasi Populer -->
  <section class="max-w-7xl mx-auto px-6 py-6">
    <h2 class="text-xl font-bold mb-4">Rekomendasi Populer</h2>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
      <div class="text-center">
        <img src="../websiteoleh/img/soto lamongan.jpg" alt="Soto Lamongan" class="rounded-lg h-24 w-full object-cover mb-2" />
        <h3 class="font-semibold">Soto Lamongan</h3>
        <p class="text-sm text-gray-500">5 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
      <div class="text-center">
        <img src="../websiteoleh/img/Wingko Babat.jpg" alt="Wingko Babat" class="rounded-lg h-24 w-full object-cover mb-2" />
        <h3 class="font-semibold">Wingko Babat</h3>
        <p class="text-sm text-gray-500">6 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
      <div class="text-center">
        <img src="../websiteoleh/img/batiklam.jpg" alt="Batik Lamongan" class="rounded-lg h-24 w-full object-cover mb-2" />
        <h3 class="font-semibold">Batik Lamongan</h3>
        <p class="text-sm text-gray-500">7 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
      <div class="text-center">
        <img src="../websiteoleh/img/bandeng.jpg" alt="Bandeng Asap" class="rounded-lg h-24 w-full object-cover mb-2" />
        <h3 class="font-semibold">Bandeng Asap</h3>
        <p class="text-sm text-gray-500">8 rekomendasi</p>
        <button class="mt-2 text-sm text-[#d87a4a] hover:underline">Lihat Detail</button>
      </div>
    </div>
  </section>

  <!-- Peta Interaktif -->
  <section class="max-w-7xl mx-auto px-6 py-6">
    <h2 class="text-xl font-bold mb-4">Peta Interaktif</h2>
    <button class="flex items-center space-x-2 text-[#d87a4a] hover:underline">
      <i class="fas fa-map-marker-alt"></i>
      <span>Lihat Toko Oleh-Oleh Terdekat</span>
    </button>
  </section>

  <!-- Artikel Terbaru -->
  <section class="max-w-7xl mx-auto px-6 py-12">
    <h2 class="text-xl font-bold mb-6">Artikel Terbaru</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img src="../websiteoleh/img/oleh1.jpg" alt="Artikel 1" class="w-full h-32 object-cover" />
        <div class="p-4">
          <h3 class="font-semibold mb-2">5 Oleh-Oleh Khas Lamongan Favorit Wisatawan</h3>
          <a href="#" class="inline-block text-sm text-[#d87a4a] hover:underline">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img src="../websiteoleh/img/wingko.jpg" alt="Wingko" class="w-full h-32 object-cover" />
        <div class="p-4">
          <h3 class="font-semibold mb-2">Sejarah di Balik Wingko Babat Lamongan</h3>
          <a href="#" class="inline-block text-sm text-[#d87a4a] hover:underline">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img src="../websiteoleh/img/kerajinan.jpg" alt="Kerajinan" class="w-full h-32 object-cover" />
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
      © 2025 Oleh - Oleh Lamongan. Dibuat oleh Tim Redaksi Nafian.com.
    </div>
  </footer>

</body>
</html>







makanan yang sebelumnya
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Rekomendasi Makanan
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
 <body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
  <main class="max-w-4xl w-full bg-white rounded-lg shadow-md p-6">
   <h1 class="text-3xl font-semibold mb-8 text-center text-gray-800">
    Rekomendasi Makanan
   </h1>
   <ol class="space-y-8">
    <li class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
     <div class="flex-shrink-0 text-4xl font-bold text-indigo-600 w-12 flex justify-center items-center">
      1
     </div>
     <img alt="Gambar nasi goreng dengan telur mata sapi, irisan mentimun, dan tomat segar di piring putih" class="w-36 h-36 object-cover rounded-lg shadow-md" height="150" src="https://storage.googleapis.com/a1aa/image/3c6135cd-0320-40c0-568b-08cc437ba0d3.jpg" width="150"/>
     <div class="sm:flex-1 text-gray-700">
      <h2 class="text-xl font-semibold mb-2">
       Nasi Goreng
      </h2>
      <p>
       Nasi goreng adalah hidangan nasi yang digoreng dengan bumbu khas Indonesia, biasanya disajikan dengan telur mata sapi, irisan mentimun, dan tomat segar. Rasanya gurih dan sedikit pedas, sangat populer sebagai makanan sarapan atau makan malam.
      </p>
     </div>
    </li>
    <li class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
     <div class="flex-shrink-0 text-4xl font-bold text-indigo-600 w-12 flex justify-center items-center">
      2
     </div>
     <img alt="Gambar sate ayam dengan tusukan bambu, disajikan dengan bumbu kacang dan irisan bawang merah" class="w-36 h-36 object-cover rounded-lg shadow-md" height="150" src="https://storage.googleapis.com/a1aa/image/88f25f59-d713-446e-8708-3f0d31d9f215.jpg" width="150"/>
     <div class="sm:flex-1 text-gray-700">
      <h2 class="text-xl font-semibold mb-2">
       Sate Ayam
      </h2>
      <p>
       Sate ayam adalah potongan daging ayam yang ditusuk dan dibakar, disajikan dengan bumbu kacang yang kental dan irisan bawang merah. Hidangan ini sangat populer di seluruh Indonesia dan sering dijadikan makanan ringan atau lauk utama.
      </p>
     </div>
    </li>
    <li class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
     <div class="flex-shrink-0 text-4xl font-bold text-indigo-600 w-12 flex justify-center items-center">
      3
     </div>
     <img alt="Gambar gado-gado dengan sayuran rebus, tahu, tempe, telur rebus, dan saus kacang kental" class="w-36 h-36 object-cover rounded-lg shadow-md" height="150" src="https://storage.googleapis.com/a1aa/image/ba1aa033-b663-44d1-cf0f-aafae811d95d.jpg" width="150"/>
     <div class="sm:flex-1 text-gray-700">
      <h2 class="text-xl font-semibold mb-2">
       Gado-Gado
      </h2>
      <p>
       Gado-gado adalah salad sayuran rebus yang disiram dengan saus kacang kental. Biasanya terdiri dari tahu, tempe, telur rebus, kentang, dan berbagai sayuran segar. Rasanya segar dan kaya akan protein nabati.
      </p>
     </div>
    </li>
    <li class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
     <div class="flex-shrink-0 text-4xl font-bold text-indigo-600 w-12 flex justify-center items-center">
      4
     </div>
     <img alt="Gambar rendang daging sapi dengan kuah kental berwarna coklat pekat di piring putih" class="w-36 h-36 object-cover rounded-lg shadow-md" height="150" src="https://storage.googleapis.com/a1aa/image/bf9afdda-5326-46dc-aa0f-0cc5972a3adb.jpg" width="150"/>
     <div class="sm:flex-1 text-gray-700">
      <h2 class="text-xl font-semibold mb-2">
       Rendang
      </h2>
      <p>
       Rendang adalah masakan daging sapi yang dimasak lama dengan santan dan rempah-rempah khas Minangkabau. Rasanya sangat kaya, pedas, dan gurih dengan tekstur daging yang empuk dan kuah yang kental.
      </p>
     </div>
    </li>
    <li class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
     <div class="flex-shrink-0 text-4xl font-bold text-indigo-600 w-12 flex justify-center items-center">
      5
     </div>
     <img alt="Gambar soto ayam dengan kuah kuning, suwiran ayam, telur rebus, dan taburan daun bawang" class="w-36 h-36 object-cover rounded-lg shadow-md" height="150" src="https://storage.googleapis.com/a1aa/image/358f2b2b-478f-40f8-f7d1-751d418025fc.jpg" width="150"/>
     <div class="sm:flex-1 text-gray-700">
      <h2 class="text-xl font-semibold mb-2">
       Soto Ayam
      </h2>
      <p>
       Soto ayam adalah sup ayam berkuah kuning yang kaya rempah, disajikan dengan suwiran ayam, telur rebus, dan taburan daun bawang serta bawang goreng. Cocok untuk sarapan atau makan siang yang hangat dan mengenyangkan.
      </p>
     </div>
    </li>
    <li class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
     <div class="flex-shrink-0 text-4xl font-bold text-indigo-600 w-12 flex justify-center items-center">
      6
     </div>
     <img alt="Gambar mie goreng dengan sayuran, telur, dan potongan ayam di piring putih" class="w-36 h-36 object-cover rounded-lg shadow-md" height="150" src="https://storage.googleapis.com/a1aa/image/8b692d02-b0ec-4cf7-e9b6-6eff264424a5.jpg" width="150"/>
     <div class="sm:flex-1 text-gray-700">
      <h2 class="text-xl font-semibold mb-2">
       Mie Goreng
      </h2>
      <p>
       Mie goreng adalah mie yang digoreng dengan bumbu khas Indonesia, dicampur dengan sayuran, telur, dan potongan ayam atau seafood. Rasanya gurih dan sedikit manis, sangat digemari oleh berbagai kalangan.
      </p>
     </div>
    </li>
    <li class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
     <div class="flex-shrink-0 text-4xl font-bold text-indigo-600 w-12 flex justify-center items-center">
      7
     </div>
     <img alt="Gambar bakso bola daging sapi dengan kuah bening dan mie kuning di mangkuk putih" class="w-36 h-36 object-cover rounded-lg shadow-md" height="150" src="https://storage.googleapis.com/a1aa/image/bac478a2-ebbc-48ef-94ee-36c841ee7a25.jpg" width="150"/>
     <div class="sm:flex-1 text-gray-700">
      <h2 class="text-xl font-semibold mb-2">
       Bakso
      </h2>
      <p>
       Bakso adalah bola daging sapi yang disajikan dalam kuah kaldu bening dengan mie kuning, tahu, dan sayuran. Hidangan ini sangat populer sebagai makanan jalanan dan favorit banyak orang Indonesia.
      </p>
     </div>
    </li>
    <li class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
     <div class="flex-shrink-0 text-4xl font-bold text-indigo-600 w-12 flex justify-center items-center">
      8
     </div>
     <img alt="Gambar pempek kapal selam dengan kuah cuko asam pedas di piring putih" class="w-36 h-36 object-cover rounded-lg shadow-md" height="150" src="https://storage.googleapis.com/a1aa/image/cddbc4ea-202b-49d5-dee7-83c71b906dee.jpg" width="150"/>
     <div class="sm:flex-1 text-gray-700">
      <h2 class="text-xl font-semibold mb-2">
       Pempek
      </h2>
      <p>
       Pempek adalah makanan khas Palembang yang terbuat dari ikan dan tepung sagu, disajikan dengan kuah cuko yang asam dan pedas. Biasanya dilengkapi dengan irisan mentimun dan mie kuning.
      </p>
     </div>
    </li>
    <li class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
     <div class="flex-shrink-0 text-4xl font-bold text-indigo-600 w-12 flex justify-center items-center">
      9
     </div>
     <img alt="Gambar ayam geprek dengan sambal merah pedas di piring putih" class="w-36 h-36 object-cover rounded-lg shadow-md" height="150" src="https://storage.googleapis.com/a1aa/image/bd751d4c-81fa-4a45-bae0-0540511594eb.jpg" width="150"/>
     <div class="sm:flex-1 text-gray-700">
      <h2 class="text-xl font-semibold mb-2">
       Ayam Geprek
      </h2>
      <p>
       Ayam geprek adalah ayam goreng crispy yang dihancurkan dan dicampur dengan sambal merah pedas. Hidangan ini sangat digemari oleh pecinta makanan pedas dan cepat saji.
      </p>
     </div>
    </li>
    <li class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
     <div class="flex-shrink-0 text-4xl font-bold text-indigo-600 w-12 flex justify-center items-center">
      10
     </div>
     <img alt="Gambar es teler dengan campuran alpukat, kelapa muda, nangka, dan sirup manis dalam gelas bening" class="w-36 h-36 object-cover rounded-lg shadow-md" height="150" src="https://storage.googleapis.com/a1aa/image/cf8932d4-206a-410b-fee7-e0c301fe26ee.jpg" width="150"/>
     <div class="sm:flex-1 text-gray-700">
      <h2 class="text-xl font-semibold mb-2">
       Es Teler
      </h2>
      <p>
       Es teler adalah minuman segar khas Indonesia yang berisi campuran alpukat, kelapa muda, nangka, dan sirup manis dengan susu kental manis. Cocok untuk melepas dahaga di hari yang panas.
      </p>
     </div>
    </li>
   </ol>
  </main>
 </body>
</html>





makanan kedua 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Rekomendasi Makanan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: "Inter", sans-serif;
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col relative">
  <a href="index.php" class="absolute top-4 right-4 text-gray-700 hover:text-gray-900 text-2xl" aria-label="Home">
    <i class="fas fa-home"></i>
  </a>
  <main class="flex-grow w-full bg-white p-6 overflow-auto">
    <h1 class="text-3xl font-semibold mb-8 text-center text-gray-800">
      Rekomendasi Makanan
    </h1>
    <ol class="space-y-8 max-w-full">
      <li
        class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6"
      >
        <div
          class="flex-shrink-0 text-4xl font-bold text-black w-12 flex justify-center items-center"
        >
          1
        </div>
        <img
          alt="Gambar nasi goreng dengan telur mata sapi, irisan mentimun, dan tomat segar di piring putih"
          class="w-56 h-44 object-cover rounded-lg shadow-md"
          height="176"
          src="https://storage.googleapis.com/a1aa/image/3c6135cd-0320-40c0-568b-08cc437ba0d3.jpg"
          width="224"
        />
        <div class="sm:flex-1 text-gray-700">
          <h2 class="text-xl font-semibold mb-2">Nasi Goreng</h2>
          <p>
            Nasi goreng adalah hidangan nasi yang digoreng dengan bumbu khas
            Indonesia, biasanya disajikan dengan telur mata sapi, irisan
            mentimun, dan tomat segar. Rasanya gurih dan sedikit pedas, sangat
            populer sebagai makanan sarapan atau makan malam.
          </p>
        </div>
      </li>
      <li
        class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6"
      >
        <div
          class="flex-shrink-0 text-4xl font-bold text-black w-12 flex justify-center items-center"
        >
          2
        </div>
        <img
          alt="Gambar sate ayam dengan tusukan bambu, disajikan dengan bumbu kacang dan irisan bawang merah"
          class="w-56 h-44 object-cover rounded-lg shadow-md"
          height="176"
          src="https://storage.googleapis.com/a1aa/image/88f25f59-d713-446e-8708-3f0d31d9f215.jpg"
          width="224"
        />
        <div class="sm:flex-1 text-gray-700">
          <h2 class="text-xl font-semibold mb-2">Sate Ayam</h2>
          <p>
            Sate ayam adalah potongan daging ayam yang ditusuk dan dibakar,
            disajikan dengan bumbu kacang yang kental dan irisan bawang merah.
            Hidangan ini sangat populer di seluruh Indonesia dan sering
            dijadikan makanan ringan atau lauk utama.
          </p>
        </div>
      </li>
      <li
        class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6"
      >
        <div
          class="flex-shrink-0 text-4xl font-bold text-black w-12 flex justify-center items-center"
        >
          3
        </div>
        <img
          alt="Gambar gado-gado dengan sayuran rebus, tahu, tempe, telur rebus, dan saus kacang kental"
          class="w-56 h-44 object-cover rounded-lg shadow-md"
          height="176"
          src="https://storage.googleapis.com/a1aa/image/ba1aa033-b663-44d1-cf0f-aafae811d95d.jpg"
          width="224"
        />
        <div class="sm:flex-1 text-gray-700">
          <h2 class="text-xl font-semibold mb-2">Gado-Gado</h2>
          <p>
            Gado-gado adalah salad sayuran rebus yang disiram dengan saus kacang
            kental. Biasanya terdiri dari tahu, tempe, telur rebus, kentang, dan
            berbagai sayuran segar. Rasanya segar dan kaya akan protein nabati.
          </p>
        </div>
      </li>
      <li
        class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6"
      >
        <div
          class="flex-shrink-0 text-4xl font-bold text-black w-12 flex justify-center items-center"
        >
          4
        </div>
        <img
          alt="Gambar rendang daging sapi dengan kuah kental berwarna coklat pekat di piring putih"
          class="w-56 h-44 object-cover rounded-lg shadow-md"
          height="176"
          src="https://storage.googleapis.com/a1aa/image/bf9afdda-5326-46dc-aa0f-0cc5972a3adb.jpg"
          width="224"
        />
        <div class="sm:flex-1 text-gray-700">
          <h2 class="text-xl font-semibold mb-2">Rendang</h2>
          <p>
            Rendang adalah masakan daging sapi yang dimasak lama dengan santan
            dan rempah-rempah khas Minangkabau. Rasanya sangat kaya, pedas, dan
            gurih dengan tekstur daging yang empuk dan kuah yang kental.
          </p>
        </div>
      </li>
      <li
        class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6"
      >
        <div
          class="flex-shrink-0 text-4xl font-bold text-black w-12 flex justify-center items-center"
        >
          5
        </div>
        <img
          alt="Gambar soto ayam dengan kuah kuning, suwiran ayam, telur rebus, dan taburan daun bawang"
          class="w-56 h-44 object-cover rounded-lg shadow-md"
          height="176"
          src="https://storage.googleapis.com/a1aa/image/358f2b2b-478f-40f8-f7d1-751d418025fc.jpg"
          width="224"
        />
        <div class="sm:flex-1 text-gray-700">
          <h2 class="text-xl font-semibold mb-2">Soto Ayam</h2>
          <p>
            Soto ayam adalah sup ayam berkuah kuning yang kaya rempah,
            disajikan dengan suwiran ayam, telur rebus, dan taburan daun bawang
            serta bawang goreng. Cocok untuk sarapan atau makan siang yang
            hangat dan mengenyangkan.
          </p>
        </div>
      </li>
      <li
        class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6"
      >
        <div
          class="flex-shrink-0 text-4xl font-bold text-black w-12 flex justify-center items-center"
        >
          6
        </div>
        <img
          alt="Gambar mie goreng dengan sayuran, telur, dan potongan ayam di piring putih"
          class="w-56 h-44 object-cover rounded-lg shadow-md"
          height="176"
          src="https://storage.googleapis.com/a1aa/image/8b692d02-b0ec-4cf7-e9b6-6eff264424a5.jpg"
          width="224"
        />
        <div class="sm:flex-1 text-gray-700">
          <h2 class="text-xl font-semibold mb-2">Mie Goreng</h2>
          <p>
            Mie goreng adalah mie yang digoreng dengan bumbu khas Indonesia,
            dicampur dengan sayuran, telur, dan potongan ayam atau seafood.
            Rasanya gurih dan sedikit manis, sangat digemari oleh berbagai
            kalangan.
          </p>
        </div>
      </li>
      <li
        class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6"
      >
        <div
          class="flex-shrink-0 text-4xl font-bold text-black w-12 flex justify-center items-center"
        >
          7
        </div>
        <img
          alt="Gambar bakso bola daging sapi dengan kuah bening dan mie kuning di mangkuk putih"
          class="w-56 h-44 object-cover rounded-lg shadow-md"
          height="176"
          src="https://storage.googleapis.com/a1aa/image/bac478a2-ebbc-48ef-94ee-36c841ee7a25.jpg"
          width="224"
        />
        <div class="sm:flex-1 text-gray-700">
          <h2 class="text-xl font-semibold mb-2">Bakso</h2>
          <p>
            Bakso adalah bola daging sapi yang disajikan dalam kuah kaldu
            bening dengan mie kuning, tahu, dan sayuran. Hidangan ini sangat
            populer sebagai makanan jalanan dan favorit banyak orang
            Indonesia.
          </p>
        </div>
      </li>
      <li
        class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6"
      >
        <div
          class="flex-shrink-0 text-4xl font-bold text-black w-12 flex justify-center items-center"
        >
          8
        </div>
        <img
          alt="Gambar pempek kapal selam dengan kuah cuko asam pedas di piring putih"
          class="w-56 h-44 object-cover rounded-lg shadow-md"
          height="176"
          src="https://storage.googleapis.com/a1aa/image/cddbc4ea-202b-49d5-dee7-83c71b906dee.jpg"
          width="224"
        />
        <div class="sm:flex-1 text-gray-700">
          <h2 class="text-xl font-semibold mb-2">Pempek</h2>
          <p>
            Pempek adalah makanan khas Palembang yang terbuat dari ikan dan
            tepung sagu, disajikan dengan kuah cuko yang asam dan pedas.
            Biasanya dilengkapi dengan irisan mentimun dan mie kuning.
          </p>
        </div>
      </li>
      <li
        class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6"
      >
        <div
          class="flex-shrink-0 text-4xl font-bold text-black w-12 flex justify-center items-center"
        >
          9
        </div>
        <img
          alt="Gambar ayam geprek dengan sambal merah pedas di piring putih"
          class="w-56 h-44 object-cover rounded-lg shadow-md"
          height="176"
          src="https://storage.googleapis.com/a1aa/image/bd751d4c-81fa-4a45-bae0-0540511594eb.jpg"
          width="224"
        />
        <div class="sm:flex-1 text-gray-700">
          <h2 class="text-xl font-semibold mb-2">Ayam Geprek</h2>
          <p>
            Ayam geprek adalah ayam goreng crispy yang dihancurkan dan dicampur
            dengan sambal merah pedas. Hidangan ini sangat digemari oleh
            pecinta makanan pedas dan cepat saji.
          </p>
        </div>
      </li>
      <li
        class="flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6"
      >
        <div
          class="flex-shrink-0 text-4xl font-bold text-black w-12 flex justify-center items-center"
        >
          10
        </div>
        <img
          alt="Gambar es teler dengan campuran alpukat, kelapa muda, nangka, dan sirup manis dalam gelas bening"
          class="w-56 h-44 object-cover rounded-lg shadow-md"
          height="176"
          src="https://storage.googleapis.com/a1aa/image/cf8932d4-206a-410b-fee7-e0c301fe26ee.jpg"
          width="224"
        />
        <div class="sm:flex-1 text-gray-700">
          <h2 class="text-xl font-semibold mb-2">Es Teler</h2>
          <p>
            Es teler adalah minuman segar khas Indonesia yang berisi campuran
            alpukat, kelapa muda, nangka, dan sirup manis dengan susu kental
            manis. Cocok untuk melepas dahaga di hari yang panas.
          </p>
        </div>
      </li>
    </ol>
  </main>
</body>
</html>





baru lagi 
<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   10 Rekomendasi Makanan Berat yang Cocok untuk Buka Puasa
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-white text-gray-900 px-6 py-8 max-w-4xl mx-auto">
  <h1 class="text-3xl font-extrabold leading-tight mb-6">
   10 Rekomendasi Makanan Berat yang Cocok untuk Buka Puasa
  </h1>
  <p class="text-lg leading-relaxed mb-6">
   Setelah seharian berpuasa, hal yang paling ditunggu-tunggu yaitu berbuka puasa dengan makanan lezat dan mengenyangkan. Nah, berikut ini makanan berat untuk buka puasa yang bisa Anda pilih.
  </p>
  <img alt="Piring berisi sayap ayam panggang" class="w-full h-auto rounded-md" height="200" src="../../WebsiteOleh/img/soto lamongan.jpg" width="400"/>
  <body class="bg-white text-black p-6">
  <h2 class="font-bold text-lg mb-4">
  <body class="bg-white text-gray-900 font-sans p-6">
  <h1 class="text-3xl font-extrabold leading-tight mb-4">Rekomendasi makanan berat untuk buka puasa</h1>
  <p class="text-base leading-relaxed mb-6">
    Selain <a href="#" class="text-blue-600 hover:underline">takjil</a>, makanan berat untuk berbuka puasa sangat penting untuk mengembalikan energi dan mencukupi kebutuhan nutrisi setelah seharian berpuasa. Ini berbagai resep pilihannya!
  </p>
  <h2 class="text-xl font-extrabold mb-3">1. Soto ayam</h2>
  <p class="text-base leading-relaxed">
    Kunci kelezatan soto terletak pada kuahnya yang segar dengan rempah yang berlimpah. Berikut ini <a href="#" class="text-blue-600 hover:underline">resep soto ayam</a> yang bisa Anda ikuti.
  </p>
   2. Sayur sop
  </h2>
  <img alt="Sayur sop vegetable soup in white bowl with carrots, peas, potatoes, and chicken on light purple tablecloth with white polka dots" class="w-full max-w-4xl mb-6" height="400" src=".jpg" width="600"/>
  <p class="text-base max-w-4xl">
   Selain mengandung zat gizi yang penting seperti serat, vitamin, dan mineral, sayur sop rendah kalori dan lemak, sehingga cocok sebagai makanan sehat untuk buka puasa.
  </p>
 </body>
</html>



Tempat

  <section class="max-w-7xl mx-auto px-6 py-6">
    <h2 class="text-xl font-bold mb-4">Rekomendasi Tempat</h2>
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
        <a class="mt-4 inline-flex items-center text-blue-600 hover:text-blue-800 font-medium" href="https://www.google.com/maps/place/Oleh-Oleh+Khas+Jogja" rel="noopener noreferrer" target="_blank">
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
        <a class="mt-4 inline-flex items-center text-blue-600 hover:text-blue-800 font-medium" href="https://www.google.com/maps/place/Oleh-Oleh+Khas+Jogja" rel="noopener noreferrer" target="_blank">
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
        <a class="mt-4 inline-flex items-center text-blue-600 hover:text-blue-800 font-medium" href="https://www.google.com/maps/place/Oleh-Oleh+Khas+Jogja" rel="noopener noreferrer" target="_blank">
        <i class="fas fa-map-marker-alt mr-2">
        </i>
        Lihat Lokasi
        </a>
      </div>
     </article>
    </div>
    <div class="mt-10 w-full max-w-6xl flex justify-center">
    <button class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition font-semibold flex items-center space-x-2">
      <span>Lihat Lebih Banyak</span>
      <i class="fas fa-arrow-right"></i>
    </button>
  </section>

 // tempat kedua 

 
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-white">
  <div class="flex h-screen">
   <!-- Left panel -->
   <div class="w-1/2 border-r border-gray-300 flex flex-col">
    <div class="p-4 text-[#a55a00] text-base leading-relaxed font-normal">
     Jam buka mungkin berubah ketika Hari Lahir Pancasila
    </div>
    <div class="overflow-y-auto flex-1">
     <!-- Item 1 -->
     <div class="flex border-b border-gray-300 p-4 gap-4">
      <div class="flex-1 min-w-0">
       <h2 class="text-lg font-normal truncate cursor-default">
        Oleh-Oleh Khas Surabay...
       </h2>
       <div class="flex items-center text-sm text-gray-700 mt-1 gap-1">
        <span>
         4,9
        </span>
        <span class="text-yellow-400 flex items-center gap-0.5">
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
        </span>
        <span>
         (4,7 rb)
        </span>
        <span>
         ·
        </span>
        <span>
         Toko M...
        </span>
       </div>
       <div class="text-sm text-gray-700 mt-1 truncate">
        Jl. Indragiri No.A6
       </div>
       <div class="flex items-start gap-2 text-sm text-gray-600 mt-1">
        <i class="fas fa-user-circle text-blue-500 mt-0.5">
        </i>
        <p class="leading-snug">
         "Beli oleh
         <span class="font-semibold">
          ² khas
         </span>
         surabaya dan
                sekitarnya terhitung murah."
        </p>
       </div>
      </div>
      <img alt="Photo of a store shelf with various packaged snacks and goods typical of Surabaya" class="w-24 h-18 rounded-lg object-cover flex-shrink-0" height="72" src="https://storage.googleapis.com/a1aa/image/effd0ef2-3116-49d6-6d93-17389292f32a.jpg" width="96"/>
     </div>
     <!-- Item 2 -->
     <div class="flex border-b border-gray-300 p-4 gap-4">
      <div class="flex-1 min-w-0">
       <h2 class="text-lg font-normal truncate cursor-default">
        Atap Rasa Pusat Oleh-Ol...
       </h2>
       <div class="flex items-center text-sm text-gray-700 mt-1 gap-1">
        <span>
         4,6
        </span>
        <span class="text-yellow-400 flex items-center gap-0.5">
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star-half-alt">
         </i>
        </span>
        <span>
         (1,5 rb)
        </span>
        <span>
         ·
        </span>
        <span>
         Toko S...
        </span>
       </div>
       <div class="text-sm text-gray-700 mt-1 truncate">
        Jl. Ahmad Yani No.243
       </div>
       <div class="text-sm text-red-600 mt-1">
        Tutup
       </div>
       <div class="text-sm text-gray-700 mt-0.5">
        · Buka pukul 10.00
       </div>
       <div class="flex items-start gap-2 text-sm text-gray-600 mt-1">
        <i class="fas fa-user-circle text-blue-500 mt-0.5">
        </i>
        <p class="leading-snug">
         "Beli
         <span class="font-semibold">
          oleh-oleh
         </span>
         di surabaya,
                lengkap, terjangkau, dekat…"
        </p>
       </div>
      </div>
      <img alt="Photo of a plastic container with round brown snacks typical of Surabaya" class="w-24 h-18 rounded-lg object-cover flex-shrink-0" height="72" src="https://storage.googleapis.com/a1aa/image/8175032c-61b3-48c2-42ab-921859aa5a28.jpg" width="96"/>
     </div>
     <!-- Item 3 -->
     <div class="flex border-b border-gray-300 p-4 gap-4">
      <div class="flex-1 min-w-0">
       <h2 class="text-lg font-normal truncate cursor-default">
        Guna Guna Snack - Oleh...
       </h2>
       <div class="flex items-center text-sm text-gray-700 mt-1 gap-1">
        <span>
         4,9
        </span>
        <span class="text-yellow-400 flex items-center gap-0.5">
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
        </span>
        <span>
         (112)
        </span>
        <span>
         ·
        </span>
        <span>
         Produse...
        </span>
       </div>
       <div class="text-sm text-gray-700 mt-1 truncate">
        darmo sentosa raya Blok J-19 k…
       </div>
      </div>
      <img alt="Photo of a bowl with various colorful traditional snacks typical of Surabaya" class="w-24 h-18 rounded-lg object-cover flex-shrink-0" height="72" src="https://storage.googleapis.com/a1aa/image/cbf02cdd-ecdc-4dbc-8ae1-fbfd0f1b03f9.jpg" width="96"/>
     </div>
    </div>
   </div>
   <!-- Right panel (map) -->
   <div class="w-1/2 relative">
    <img alt="Map showing Surabaya area with multiple red location markers and ratings" class="w-full h-full object-cover" height="800" src="https://storage.googleapis.com/a1aa/image/207304cc-cec9-4a3c-dfa7-110af8ae4db2.jpg" width="600"/>
   </div>





   //tempat ketiga 
   <html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Tempat
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-white">
  <div class="max-w-7xl mx-auto p-6">
   <h1 class="text-2xl font-normal mb-6">
    Tempat
   </h1>
   <div class="flex flex-col md:flex-row md:space-x-6">
    <!-- Left side list -->
    <div class="flex-1 space-y-6 border-r border-gray-200 pr-6">
     <!-- Item 1 -->
     <div class="flex space-x-4">
      <img alt="Map snippet showing location pin for Pusat Oleh-oleh Lamongan near Universitas Islam Lamongan" class="w-[100px] h-[100px] rounded-lg object-cover flex-shrink-0" height="100" src="https://storage.googleapis.com/a1aa/image/fbe6c2cf-d745-4455-7078-a4cf3e21bcb0.jpg" width="100"/>
      <div class="flex flex-col justify-center">
       <h2 class="text-lg font-normal leading-tight">
        Pusat Oleh-oleh Lamongan
       </h2>
       <div class="flex items-center space-x-1 text-sm text-gray-700">
        <span>
         4,5
        </span>
        <span class="text-yellow-400">
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star-half-alt">
         </i>
        </span>
        <span>
         (24)
        </span>
        <span>
         ·
        </span>
        <span>
         Pusat Perbelanjaan
        </span>
       </div>
       <p class="text-sm text-gray-600 leading-tight">
        Jl. Komisaris Besar Polisi Moh. Duryat No.70
       </p>
       <p class="text-sm leading-tight">
        <span class="text-red-600 font-normal">
         Tutup
        </span>
        · Buka pukul 08.00
       </p>
       <p class="text-sm text-gray-700 flex items-center space-x-2">
        <i class="fas fa-user-circle text-blue-600">
        </i>
        <span>
         "Hanya lewat aja"
        </span>
       </p>
      </div>
     </div>
     <hr class="border-gray-200"/>
     <!-- Item 2 -->
     <div class="flex space-x-4">
      <img alt="Packaged cookies in clear plastic container for Oleh Oleh Lamongan" class="w-[100px] h-[100px] rounded-lg object-cover flex-shrink-0" height="100" src="https://storage.googleapis.com/a1aa/image/51a0488d-9c24-4e37-a314-f461968c4fe6.jpg" width="100"/>
      <div class="flex flex-col justify-center">
       <h2 class="text-lg font-normal leading-tight">
        Oleh Oleh Lamongan
       </h2>
       <div class="flex items-center space-x-1 text-sm text-gray-700">
        <span>
         4,6
        </span>
        <span class="text-yellow-400">
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star-half-alt">
         </i>
        </span>
        <span>
         (7)
        </span>
        <span>
         ·
        </span>
        <span>
         Toko
        </span>
       </div>
       <p class="text-sm text-gray-600 leading-tight">
        Jl. Lamongrejo Gg. Buntu No.6 · 0812-9043-3200
       </p>
       <p class="text-sm leading-tight">
        <span class="text-red-600 font-normal">
         Tutup
        </span>
        · Buka pukul 08.00
       </p>
       <p class="text-sm text-gray-700 flex items-center space-x-2">
        <i class="fas fa-user-circle text-blue-600">
        </i>
        <span>
         "Papa cookies....otak2nya ****"
        </span>
       </p>
      </div>
     </div>
     <hr class="border-gray-200"/>
     <!-- Item 3 -->
     <div class="flex space-x-4">
      <img alt="Interior of clothing store with customers shopping at Pusat Oleh-Oleh Khas Lamongan" class="w-[100px] h-[100px] rounded-lg object-cover flex-shrink-0" height="100" src="https://storage.googleapis.com/a1aa/image/a2613e55-cec1-4968-fdbd-784a5c7af30b.jpg" width="100"/>
      <div class="flex flex-col justify-center">
       <h2 class="text-lg font-normal leading-tight">
        Pusat Oleh-Oleh Khas Lamongan
       </h2>
       <div class="flex items-center space-x-1 text-sm text-gray-700">
        <span>
         5,0
        </span>
        <span class="text-yellow-400">
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
         <i class="fas fa-star">
         </i>
        </span>
        <span>
         (2)
        </span>
        <span>
         ·
        </span>
        <span>
         Toko
        </span>
       </div>
       <p class="text-sm text-gray-600 leading-tight">
        Jl. Panglima Sudirman No.94 · (0322) 2321501
       </p>
       <p class="text-sm leading-tight">
        <span class="text-red-600 font-normal">
         Tutup
        </span>
        · Buka pukul 08.00
       </p>
       <p class="text-sm text-gray-700 flex items-center space-x-2">
        <i class="fas fa-user-circle text-blue-600">
        </i>
        <span>
         "Sangat recommended"
        </span>
       </p>
      </div>
     </div>
     <hr class="border-gray-200"/>
     <!-- Button -->
     <div class="flex justify-center mt-6">
      <button class="flex items-center space-x-2 bg-gray-100 text-gray-900 rounded-full px-10 py-2 text-center text-sm font-normal hover:bg-gray-200 focus:outline-none" type="button">
       <span>
        Tempat lainnya
       </span>
       <i class="fas fa-arrow-right">
       </i>
      </button>
     </div>
    </div>
    <!-- Right side map -->
    <div class="flex-1 mt-6 md:mt-0 rounded-xl overflow-hidden">
     <img alt="Map showing locations of Pusat Oleh-oleh Lamongan and Oleh Oleh Lamongan with map controls and 'Buka di Maps' button" class="w-full h-full object-cover rounded-xl" height="500" src="https://storage.googleapis.com/a1aa/image/76cd78a4-c922-48d5-ca18-e0230eeb0c40.jpg" width="600"/>
    </div>
   </div>
  </div>
 </body>
</html>

 
