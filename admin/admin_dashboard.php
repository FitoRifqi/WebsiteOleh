<?php
session_start();

// Redirect to the login page if not logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

include '../config/database.php';
include '../functions/sidebar.php'; // Include the sidebar function

// Continue with your main dashboard
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content as before -->
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Admin Dashboard - Oleh-Oleh Lamongan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
    <style>
        /* Your existing CSS styles */
    </style>
</head>
<body class="bg-gray-100 text-[#1a1a1a]">

    <?php render_sidebar(); // Call the sidebar function ?>

    <div class="content">
        <header class="flex items-center justify-between py-4 mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard Utama</h1>
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">Selamat datang, Admin!</span>
                <button class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600">
                    <i class="fas fa-user-circle mr-2"></i>Profil
                </button>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Total Artikel</h3>
                <p class="text-3xl font-bold text-blue-600">10</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Total Toko</h3>
                <p class="text-3xl font-bold text-green-600">8</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold mb-4">Artikel Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow rounded-lg overflow-hidden border border-gray-200">
                    <img alt="Sajian Rawon Khas Lamongan" class="w-full h-48 object-cover" height="360" src="../websiteoleh/img/rawon.jpg" width="600"/>
                    <div class="p-4">
                        <h3 class="font-semibold mb-2">5 Oleh-Oleh Khas Lamongan Favorit Wisatawan</h3>
                        <p class="text-sm text-gray-600 mb-4">Tanggal: 28 Mei 2024</p>
                        <div class="flex justify-end space-x-2">
                            <button class="bg-blue-500 text-white text-sm px-3 py-1 rounded hover:bg-blue-600">Edit</button>
                            <button class="bg-red-500 text-white text-sm px-3 py-1 rounded hover:bg-red-600">Hapus</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow rounded-lg overflow-hidden border border-gray-200">
                    <img alt="Wingko Babat" class="w-full h-48 object-cover" height="360" src="../websiteoleh/img/wingko.jpg" width="600"/>
                    <div class="p-4">
                        <h3 class="font-semibold mb-2">Sejarah di Balik Wingko Babat Lamongan</h3>
                        <p class="text-sm text-gray-600 mb-4">Tanggal: 20 Mei 2024</p>
                        <div class="flex justify-end space-x-2">
                            <button class="bg-blue-500 text-white text-sm px-3 py-1 rounded hover:bg-blue-600">Edit</button>
                            <button class="bg-red-500 text-white text-sm px-3 py-1 rounded hover:bg-red-600">Hapus</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow rounded-lg overflow-hidden border border-gray-200">
                    <img alt="Interior of Toko Oleh-Oleh Nusantara with a wall sign in Indonesian characters and a table with chairs" class="w-full h-48 object-cover" height="360" src="https://storage.googleapis.com/a1aa/image/2f842387-b655-4b0c-ec06-27e20f268ab6.jpg" width="600"/>
                    <div class="p-4">
                        <h3 class="font-semibold mb-2">Panduan Wisata Belanja Oleh-Oleh di Lamongan</h3>
                        <p class="text-sm text-gray-600 mb-4">Tanggal: 15 Mei 2024</p>
                        <div class="flex justify-end space-x-2">
                            <button class="bg-blue-500 text-white text-sm px-3 py-1 rounded hover:bg-blue-600">Edit</button>
                            <button class="bg-red-500 text-white text-sm px-3 py-1 rounded hover:bg-red-600">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-4">
                <a href="admin_articles.php" class="inline-block bg-gray-200 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-300">Lihat Semua Artikel <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Tambah Artikel Baru</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="article_title" class="block text-sm font-medium text-gray-700">Judul Artikel</label>
                    <input type="text" id="article_title" name="article_title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Masukkan judul artikel" required>
                </div>
                <div>
                    <label for="article_image" class="block text-sm font-medium text-gray-700">URL Gambar</label>
                    <input type="url" id="article_image" name="article_image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="https://example.com/image.jpg">
                </div>
                <div>
                    <label for="article_content" class="block text-sm font-medium text-gray-700">Isi Artikel</label>
                    <textarea id="article_content" name="article_content" rows="6" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Tulis isi artikel di sini..." required></textarea>
                </div>
                <div>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                        <i class="fas fa-plus-circle mr-2"></i>Tambah Artikel
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>