<!-- about.php -->
<?php
require_once __DIR__ . '/includes/pages.php';
$currentPage = basename($_SERVER['PHP_SELF']);
$page = $pages[$currentPage] ?? null;

if (!$page) {
    // fallback for unknown pages
    http_response_code(404);
    die('Page not found');
}

$title = $page['title'];
$content = $page['content'];

include __DIR__ . '/includes/layout.php';
?>
