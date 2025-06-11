<?php
if (!isset($title)) {
    $title = 'Untitled';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col bg-gray-600 text-gray-800">
    <!-- Header -->
    <?php include __DIR__ . '/header.php'; ?>

    <!-- Page Content -->
    <main class="flex-1 container mx-auto pt-4">
        <?php include $content; ?>
    </main>

    <!-- Footer -->
    <?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
