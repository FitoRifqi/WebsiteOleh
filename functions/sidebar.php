<?php
// sidebar.php

function render_sidebar() {
    $active_page = basename($_SERVER['PHP_SELF']); // Get the current page
    
    // Define the menu items
    $menu_items = [
        ['name' => 'Dashboard', 'icon' => 'fas fa-home', 'link' => 'admin_dashboard.php'],
        ['name' => 'Manajemen Artikel', 'icon' => 'fas fa-newspaper', 'link' => '#'],
        ['name' => 'Manajemen Toko', 'icon' => 'fas fa-store', 'link' => '#'],
        ['name' => 'Manajemen Pengguna', 'icon' => 'fas fa-users', 'link' => '#'],
        ['name' => 'Pengaturan', 'icon' => 'fas fa-cog', 'link' => '#', 'is_divider' => true],
        ['name' => 'Logout', 'icon' => 'fas fa-sign-out-alt', 'link' => '../index.php']
    ];

    // Begin sidebar HTML structure
    echo '<div class="sidebar">';
    echo '<div class="sidebar-header">
            <img alt="Logo kabupaten Lamongan" class="w-16 h-16 rounded-full border-2 border-orange-400" height="64" src="/websiteoleh/img/logolamongan.png" width="64"/>
            <span class="font-bold text-xl text-orange-400 block mt-2">Admin Dashboard</span>
            <p class="text-gray-400 text-sm">Oleh-Oleh Lamongan</p>
          </div>';
    echo '<nav><ul>';

    // Loop through each menu item and create the sidebar structure
    foreach ($menu_items as $item) {
        // Check if item is a divider
        if (isset($item['is_divider']) && $item['is_divider']) {
            echo '<li class="border-t border-gray-700 pt-4 mt-4">';
        } else {
            echo '<li>';
        }
        // Output the menu item
        echo '<a href="' . htmlspecialchars($item['link']) . '" class="' . ($active_page === basename($item['link']) ? 'active' : '') . '">
                <i class="' . htmlspecialchars($item['icon']) . '"></i>
                <span>' . htmlspecialchars($item['name']) . '</span>
              </a></li>';
    }
    
    echo '</ul></nav></div>'; // Close tags for the list and sidebar
}
?>
 <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .sidebar {
            width: 250px;
            background-color: #111827; /* Tailwind's gray-900 */
            color: #ffffff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 1.5rem 0; /* Adjust padding for visual */
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar-header {
            text-align: center;
            margin-bottom: 2rem;
            padding: 0 1.5rem;
        }
        .sidebar-header img {
            margin: 0 auto 0.5rem;
        }
        .sidebar nav {
            width: 100%;
            padding: 0 1rem; /* Padding for menu items */
        }
        .sidebar nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar nav ul li {
            margin-bottom: 0.5rem;
        }
        .sidebar nav ul li a {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.25rem; /* Padding for each menu item */
            border-radius: 0.5rem;
            color: #d1d5db; /* gray-300 */
            text-decoration: none;
            transition: background-color 0.2s, color 0.2s;
        }
        .sidebar nav ul li a:hover {
            background-color: #374151; /* gray-700 */
            color: #ffffff;
        }
        .sidebar nav ul li a.active {
            background-color: #f97316; /* orange-500 */
            color: #ffffff;
            font-weight: 600;
        }
        .sidebar nav ul li a i {
            margin-right: 1rem;
            font-size: 1.125rem; /* Slightly larger icons */
        }
        .content {
            margin-left: 250px;
            padding: 1.5rem;
        }
    </style>