<!-- resume.php -->
<?php
require_once __DIR__ . '/includes/pages.php';
$currentPage = basename($_SERVER['PHP_SELF']);
$title = $pages[$currentPage]['title'] ?? 'Need to add title';
$content = $pages[$currentPage]['content'] ?? __DIR__ . '/content/index_content.php';
include __DIR__ . '/includes/layout.php';
?>