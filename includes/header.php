<!-- header.php -->

<!-- Determine the active page -->
<?php
require_once __DIR__ . '/pages.php';
$currentPage = basename($_SERVER['PHP_SELF']);
//$title = $pages[$currentPage]['title'] ?? 'Need to add title'
?>

<header class="bg-gray-800 text-white py-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center px-4">
      <h1 class="text-xl font-bold"><?= $title ?></h1>

      <!-- Navigation -->
      <nav>
        <ul class="flex space-x-6 items-center">
          <?php foreach ($pages as $file => $page): ?>
            <li>
              <a href="<?= $page['href'] ?>"
                class="text-gray-300 hover:text-white <?= ($currentPage === $file) ? 'font-bold' : '' ?>" aria-label="<?= $page['label'] ?>">
                <?= $page['label'] ?>
              </a>
            </li>
          <?php endforeach; ?>

          <!-- Social Icons in header -->
          <li>
            <a href="https://github.com/Chris-Rauch" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="hover:text-gray-400">
              <!-- GitHub SVG icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" >
                <path d="M12 0C5.372 0 0 5.372 0 12c0 5.303 3.438 9.8 8.205 11.387.6.11.82-.26.82-.577 0-.285-.01-1.04-.015-2.04-3.338.725-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.757-1.333-1.757-1.09-.745.083-.73.083-.73 1.205.086 1.84 1.237 1.84 1.237 1.07 1.834 2.807 1.304 3.492.997.108-.774.418-1.304.76-1.604-2.665-.3-5.467-1.332-5.467-5.93 0-1.31.47-2.382 1.236-3.222-.123-.303-.536-1.52.117-3.176 0 0 1.008-.322 3.3 1.23a11.52 11.52 0 013.003-.404 11.52 11.52 0 013.003.404c2.292-1.552 3.298-1.23 3.298-1.23.655 1.656.242 2.873.12 3.176.77.84 1.234 1.912 1.234 3.222 0 4.61-2.807 5.625-5.48 5.922.43.37.815 1.1.815 2.222 0 1.604-.015 2.896-.015 3.286 0 .32.216.694.825.576C20.565 21.796 24 17.298 24 12c0-6.628-5.373-12-12-12z"/>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://linkedin.com/in/christopher-rauch" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="hover:text-gray-400">
              <!-- LinkedIn SVG icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.24 7.9h4.5v12.6h-4.5V7.9zm7.5 0h4.3v1.7h.1c.6-1.1 2-2.3 4.2-2.3 4.5 0 5.3 3 5.3 6.9v7.3h-4.5v-6.5c0-1.5-.03-3.5-2.2-3.5-2.2 0-2.6 1.7-2.6 3.4v6.6h-4.5V7.9z"/>
              </svg>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
