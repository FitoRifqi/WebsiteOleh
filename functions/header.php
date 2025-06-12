<!-- header.php -->
<header class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto bg-white shadow-md sticky top-0 z-30">
    <div class="flex items-center space-x-2">
        <img
            alt="Logo kabupaten Lamongan"
            class="w-10 h-10"
            height="32"
            src="../websiteoleh/img/logolamongan.png"
            width="32"
        />
        <span class="font-semibold text-lg text-orange-600">Oleh - Oleh Lamongan</span>
    </div>
    <nav class="hidden md:flex space-x-8 text-sm font-medium text-[#1a1a1a]">
        <a class="hover:text-[#d87a4a] transition-colors" href="index.php">Beranda</a>
        <a class="hover:text-[#d87a4a] transition-colors" href="#kategori">Kategori</a>
        <a class="hover:text-[#d87a4a] transition-colors" href="#rekomendasi">Rekomendasi</a>
        <a class="hover:text-[#d87a4a] transition-colors" href="#tempat">Tempat</a>
        <a class="hover:text-[#d87a4a] transition-colors" href="#artikel">Artikel Lainnya</a>
    </nav>
    <div class="hidden md:flex items-center space-x-4">
        <button aria-label="Search" class="text-sm font-semibold text-[#1a1a1a] hover:text-[#d87a4a] transition-colors">
            <i class="fas fa-search"></i>
        </button>
        <button class="bg-[#1a1a1a] text-white text-sm font-semibold px-5 py-2 rounded-full hover:bg-[#d87a4a] transition-colors">
            <a href="admin/login.php">Masuk</a>
        </button>
    </div>
    <button aria-label="Open menu" class="md:hidden text-[#1a1a1a] text-xl">
        <i class="fas fa-bars"></i>
    </button>
</header>

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