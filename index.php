<?php
// index.php

session_start(); // Start a session if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Info oleh-oleh kota Lamongan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
        /* Hide scrollbar for all browsers */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
    </style>
</head>
<body class="bg-white text-[#1a1a1a]">

    <?php include 'functions/header.php'; // Include the header ?>

    <main class="max-w-7xl mx-auto px-6 py-12 flex flex-col md:flex-row items-center md:items-start gap-10 md:gap-20">
        <section class="flex-1 max-w-xl">
            <h1 class="text-3xl sm:text-4xl font-extrabold leading-tight text-[#1a1a1a] mb-6">
                Selamat Datang di info <br />
                Oleh - oleh kota <span class="text-[#d87a4a]">Lamongan</span>.
            </h1>
            <p class="text-[#4a4a4a] text-base sm:text-lg mb-8 leading-relaxed">
                Temukan beberapa rekomendasi oleh-oleh khas dari kota Lamongan yang terkenal
                dengan cita rasa dan kualitas terbaik yang wajib Anda coba dan bawa pulang
                sebagai kenang-kenangan.
            </p>
            <button class="bg-[#d87a4a] text-white font-semibold px-8 py-3 rounded-full hover:bg-[#b96a3a] transition-colors">
                Lihat Rekomendasi
            </button>
        </section>
        <section class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8">
            <div class="rounded-3xl overflow-hidden shadow-lg">
                <img
                    alt="Wingko Babat"
                    class="w-full h-full object-cover"
                    height="400"
                    src="../websiteoleh/img/Wingko Babat.jpg"
                    width="320"
                />
            </div>
            <div class="flex flex-col gap-6">
                <div class="rounded-3xl overflow-hidden shadow-lg h-48 sm:h-52">
                    <img
                        alt="Soto Lamongan"
                        class="w-full h-full object-cover"
                        height="200"
                        src="../websiteoleh/img/soto lamongan.jpg"
                        width="320"
                    />
                </div>
                <div class="rounded-3xl overflow-hidden shadow-lg h-48 sm:h-52">
                    <img
                        alt="Peyek Lamongan"
                        class="w-full h-full object-cover"
                        height="200"
                        src="../websiteoleh/img/peyek.jpg"
                        width="320"
                    />
                </div>
            </div>
        </section>
    </main>

    <!-- Kategori Oleh-Oleh -->
    <section id="kategori" class="max-w-7xl mx-auto px-6 py-12">
        <h2 class="text-xl font-bold mb-6">Kategori Oleh-Oleh</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
            <a
                href="kategori/makanan.php"
                class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center block"
            >
                <i class="fas fa-utensils text-2xl text-[#d87a4a] mb-2"></i>
                <h3 class="font-semibold">Makanan Berat</h3>
            </a>
            <a
                href="kategori/jajanan.php"
                class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center block"
            >
                <i class="fas fa-cookie text-2xl text-[#d87a4a] mb-2"></i>
                <h3 class="font-semibold">Jajanan</h3>
            </a>
            <a
                href="kategori/kerajinan.php"
                class="bg-white p-6 rounded-xl shadow hover:shadow-md transition hover:scale-105 text-center block"
            >
                <i class="fas fa-gem text-2xl text-[#d87a4a] mb-2"></i>
                <h3 class="font-semibold">Kerajinan</h3>
            </a>
        </div>
    </section>

    <!-- Rekomendasi Populer -->
    <section id="rekomendasi" class="max-w-7xl mx-auto px-6 py-6">
        <h2 class="text-xl font-bold mb-4">Rekomendasi Populer</h2>
        <div class="relative">
            <div
                id="slider"
                class="flex space-x-6 overflow-x-auto no-scrollbar scroll-smooth snap-x snap-mandatory"
            >
                <div class="flex-shrink-0 w-64 sm:w-56 md:w-64 snap-center text-center" data-index="0">
                    <img
                        alt="Wingko Babat"
                        class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto"
                        loading="lazy"
                        src="../WebsiteOleh/img/wingko.jpg"
                    />
                    <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">Wingko Babat</h2>
                </div>
                <div class="flex-shrink-0 w-64 sm:w-56 md:w-64 snap-center text-center" data-index="1">
                    <img
                        alt="Jumbrek Lamongan"
                        class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto"
                        loading="lazy"
                        src="../WebsiteOleh/img/jumbrek.jpg"
                    />
                    <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">Jumbrek</h2>
                </div>
                <div class="flex-shrink-0 w-64 sm:w-56 md:w-64 snap-center text-center" data-index="2">
                    <img
                        alt="Jenang Rochis"
                        class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto"
                        loading="lazy"
                        src="../WebsiteOleh/img/jenang.jpg"
                    />
                    <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">Jenang Rochis</h2>
                </div>
                <div class="flex-shrink-0 w-64 sm:w-56 md:w-64 snap-center text-center" data-index="3">
                    <img
                        alt="Batik Sendang"
                        class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto"
                        loading="lazy"
                        src="../WebsiteOleh/img/batiksendang.jpg"
                    />
                    <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">Batik Sendang</h2>
                </div>
                <div class="flex-shrink-0 w-64 sm:w-56 md:w-64 snap-center text-center" data-index="4">
                    <img
                        alt="Soto Lamongan"
                        class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto"
                        loading="lazy"
                        src="../WebsiteOleh/img/soto.jpg"
                    />
                    <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">Soto Lamongan</h2>
                </div>
                <div class="flex-shrink-0 w-64 sm:w-56 md:w-64 snap-center text-center" data-index="5">
                    <img
                        alt="Nasi Boran"
                        class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto"
                        loading="lazy"
                        src="../WebsiteOleh/img/boran.jpg"
                    />
                    <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">Nasi Boran</h2>
                </div>
                <div class="flex-shrink-0 w-64 sm:w-56 md:w-64 snap-center text-center" data-index="6">
                    <img
                        alt="Tahu Campur"
                        class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto"
                        loading="lazy"
                        src="../WebsiteOleh/img/tahu_campur.jpeg"
                    />
                    <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">Tahu Campur Lamongan</h2>
                </div>
                <div class="flex-shrink-0 w-64 sm:w-56 md:w-64 snap-center text-center" data-index="7">
                    <img
                        alt="Pecel Lele"
                        class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto"
                        loading="lazy"
                        src="../WebsiteOleh/img/pecel_lele.jpg"
                    />
                    <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">Pecel Lele Lamongan</h2>
                </div>
                <div class="flex-shrink-0 w-64 sm:w-56 md:w-64 snap-center text-center" data-index="8">
                    <img
                        alt="Es Batil"
                        class="w-full rounded-lg object-cover max-w-[280px] max-h-[180px] mx-auto"
                        loading="lazy"
                        src="../WebsiteOleh/img/es_batil.jpg"
                    />
                    <h2 class="mt-4 text-lg font-extrabold text-gray-900 leading-tight">Es Batil Lamongan</h2>
                </div>
            </div>

            <!-- Left arrow -->
            <button
                id="prevBtn"
                aria-label="Previous"
                class="absolute top-1/2 -left-2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white rounded-full p-2 z-10"
            >
                <i class="fas fa-chevron-left"></i>
            </button>

            <!-- Right arrow -->
            <button
                id="nextBtn"
                aria-label="Next"
                class="absolute top-1/2 -right-2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white rounded-full p-2 z-10"
            >
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <!-- Pagination dots -->
        <div
            id="pagination"
            class="flex justify-center space-x-2 mt-6"
            aria-label="Slider pagination"
        ></div>
    </section>

    <!-- Tempat Perbelanjaan -->
    <section id="tempat" class="max-w-7xl mx-auto px-6 py-6">
        <h2 class="text-xl font-bold mb-4">Tempat Perbelanjaan</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img
                    alt="gambar moola"
                    class="w-full h-48 object-cover"
                    height="360"
                    src="../WebsiteOleh/img/mola.jpg"
                    width="600"
                />
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Moola (Mall Oleh-Oleh Lamongan)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        MOOLA (Mall Oleh-Oleh Lamongan) merupakan sarana promosi produk unggulan dan
                        pusat oleh-oleh khas Lamongan yang lokasinya sangat strategis, yaitu di Jl.
                        P. Sudirman 94, Lamongan.
                    </p>
                    <a
                        class="mt-4 inline-flex items-center text-[#b96a3a] hover:text-blue-800 font-medium"
                        href="https://g.co/kgs/1U98Eub"
                        rel="noopener noreferrer"
                        target="_blank"
                    >
                        <i class="fas fa-map-marker-alt mr-2"></i> Lihat Lokasi
                    </a>
                </div>
            </article>
            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img
                    alt="Gambar Hj. Rochimah (Pusat Oleh-Oleh Lamongan)"
                    class="w-full h-48 object-cover"
                    height="360"
                    src="../WebsiteOleh/img/hj_rohmah.jpg"
                    width="600"
                />
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Hj. Rochimah (Pusat Oleh-Oleh Lamongan)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Hj. Rochimah Pusat oleh-oleh ini terkenal dengan berbagai produk khas Lamongan
                        yang lezat dan tahan lama. kalian bisa menemukan bandeng presto, keripik ikan,
                        hingga kue-kue tradisional yang menggugah selera.
                    </p>
                    <a
                        class="mt-4 inline-flex items-center text-[#b96a3a] hover:text-blue-800 font-medium"
                        href="https://g.co/kgs/LdNxX3t"
                        rel="noopener noreferrer"
                        target="_blank"
                    >
                        <i class="fas fa-map-marker-alt mr-2"></i> Lihat Lokasi
                    </a>
                </div>
            </article>
            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                <img
                    alt="gambar toko koko nono 3"
                    class="w-full h-48 object-cover"
                    height="360"
                    src="../WebsiteOleh/img/koko_nono.jpg"
                    width="600"
                />
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Pusat Oleh-Oleh Khas Lamongan Koko Nono</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Pusat oleh-oleh ini menawarkan beragam camilan khas Lamongan yang bisa dijadikan
                        oleh-oleh. Selain itu, kalian dapat menemukan keripik ikan, sambal, dan berbagai
                        produk lokal lainnya yang khas.
                    </p>
                    <a
                        class="mt-4 inline-flex items-center text-[#b96a3a] hover:text-blue-800 font-medium"
                        href="https://maps.app.goo.gl/oKipAj7uLrZuwCqMA"
                        rel="noopener noreferrer"
                        target="_blank"
                    >
                        <i class="fas fa-map-marker-alt mr-2"></i> Lihat Lokasi
                    </a>
                </div>
            </article>
        </div>
        <div class="mt-10 w-full max-w-6xl flex justify-center">
            <button
                class="px-6 py-3 bg-[#b96a3a] text-white rounded-lg shadow-md hover:bg-[#b96a3a] transition font-semibold flex items-center space-x-2"
            >
                <span><a href="tempat2.php">Lihat Lebih Banyak</a></span>
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </section>

    <!-- Artikel Terbaru -->
    <section id="artikel" class="max-w-7xl mx-auto px-6 py-12">
        <h2 class="text-xl font-bold mb-6">Artikel Terbaru</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <img
                    alt="gambar wisata lamongan"
                    class="w-full h-48 object-cover"
                    height="360"
                    src="../WebsiteOleh/img/wisata.jpg"
                    width="600"
                />
                <div class="p-4">
                    <h3 class="font-semibold mb-2">
                        5 Tempat Wisata yang wajib dikunjungi saat di Lamongan
                    </h3>
                    <a href="wisata.php" class="inline-block text-sm text-[#d87a4a] hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <img
                    alt="Wingko Babat"
                    class="w-full h-48 object-cover"
                    height="360"
                    src="../websiteoleh/img/wingko.jpg"
                    width="600"
                />
                <div class="p-4">
                    <h3 class="font-semibold mb-2">Sejarah di Balik Wingko Babat Lamongan</h3>
                    <a href="sejarahwingko.php" class="inline-block text-sm text-[#d87a4a] hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <img
                    alt="gambar ali cafe"
                    class="w-full h-48 object-cover"
                    height="360"
                    src="../websiteoleh/img/cafe.jpg"
                    width="600"
                />
                <div class="p-4">
                    <h3 class="font-semibold mb-2">
                        5 Tempat Ngopi Hits di Lamongan yang Wajib Dikunjungi
                    </h3>
                    <a href="wisata.php" class="inline-block text-sm text-[#d87a4a] hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Kami & Tujuan Website -->
    <section class="bg-[#f9f6f2] py-10 border-t border-[#e5e5e5]">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-lg font-bold mb-3 text-[#b96a3a]">Kontak Kami</h3>
                <p class="mb-2">
                    Jika ada pertanyaan, saran, atau ingin bekerja sama, silakan hubungi kami:
                </p>
                <ul class="text-sm text-[#4a4a4a] space-y-1">
                    <li>
                        <i class="fas fa-envelope mr-2 text-[#d87a4a]"></i> Email:
                        <a href="mailto:info@anfibra.com" class="text-[#d87a4a] hover:underline">info@anfibra.com</a>
                    </li>
                    <li><i class="fas fa-phone mr-2 text-[#d87a4a]"></i> Telepon: 0812-3456-7890</li>
                    <li>
                        <i class="fab fa-instagram mr-2 text-[#d87a4a]"></i> Instagram:
                        <a
                            href="https://instagram.com/oleh2lamongan"
                            target="_blank"
                            class="text-[#d87a4a] hover:underline">@oleh2lamongan</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold mb-3 text-[#b96a3a]">Tujuan Website</h3>
                <p class="text-sm text-[#4a4a4a]">
                    Website ini dibuat untuk memberikan informasi lengkap seputar oleh-oleh khas
                    Lamongan, mulai dari rekomendasi produk, tempat perbelanjaan, hingga artikel
                    menarik seputar budaya dan kuliner Lamongan. Kami berharap website ini dapat
                    membantu wisatawan dan masyarakat lokal dalam menemukan oleh-oleh terbaik dari
                    Lamongan.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#1a1a1a] text-white mt-12">
        <div class="text-center text-xs py-4">
            &copy; 2025 Oleh - Oleh Lamongan. Dibuat oleh Tim Redaksi Anfibra.com.
        </div>
    </footer>

    <script>
        // Slider functionality script
const slider = document.getElementById("slider");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const pagination = document.getElementById("pagination");
const slides = slider.querySelectorAll("div[data-index]");
const slideCount = slides.length;

// Calculate the width of a single slide, including margin
function getSlideWidth() {
    const slideStyle = getComputedStyle(slides[0]);
    const width = slides[0].offsetWidth; // Width of the slide
    const marginRight = parseInt(slideStyle.marginRight) || 24; // Default margin if not set
    return width + marginRight; // Total width considering margins
}

// Create pagination dots dynamically
function createPaginationDots() {
    for (let i = 0; i < slideCount; i++) {
        const dot = document.createElement("button");
        dot.className = "w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-500 focus:outline-none"; // Style for dots
        dot.setAttribute("aria-label", `Go to slide ${i + 1}`); // Accessibility label
        dot.dataset.index = i; // Set index for easy access
        pagination.appendChild(dot); // Append dot to pagination
    }
}

// Update active dot based on the current slide
function updateActiveDot() {
    const scrollLeft = slider.scrollLeft; // Current scroll position
    const slideWidth = getSlideWidth(); // Get current slide width
    const index = Math.round(scrollLeft / slideWidth); // Determine which slide is currently active
    const dots = pagination.querySelectorAll("button");

    dots.forEach((dot, i) => {
        dot.classList.toggle("bg-[#d87a4a]", i === index); // Active dot color
        dot.classList.toggle("bg-gray-300", i !== index); // Inactive dot color
    });
}

// Scroll to a specific slide by index
function scrollToSlide(index) {
    const slideWidth = getSlideWidth(); // Get the slide width
    slider.scrollTo({
        left: slideWidth * index, // Scroll position
        behavior: "smooth", // Smooth transition
    });
}

// Event handler for the "Previous" button
prevBtn.addEventListener("click", () => {
    const currentSlideIndex = Math.round(slider.scrollLeft / getSlideWidth());
    const newIndex = Math.max(currentSlideIndex - 1, 0); // Prevent going to negative index
    scrollToSlide(newIndex);
});

// Event handler for the "Next" button
nextBtn.addEventListener("click", () => {
    const currentSlideIndex = Math.round(slider.scrollLeft / getSlideWidth());
    const newIndex = Math.min(currentSlideIndex + 1, slideCount - 1); // Prevent overflow
    scrollToSlide(newIndex);
});

// Event handler for pagination dot clicks
pagination.addEventListener("click", (event) => {
    if (event.target.matches('button')) { // Check if a dot was clicked
        const index = parseInt(event.target.dataset.index); // Get index from dot
        scrollToSlide(index); // Scroll to index
    }
});

// Scroll event to update active dot based on the scroll position
slider.addEventListener("scroll", () => {
    clearTimeout(this.updateTimeout); // Clear existing timeout if any
    this.updateTimeout = setTimeout(updateActiveDot, 100); // Update active dot after scroll events have settled
});

// Initialize the slider by creating dots and setting active dot
createPaginationDots();
updateActiveDot();
    </script>
</body>
</html>