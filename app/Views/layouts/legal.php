<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Documento Legal' ?> | Cycloid Talent</title>
    <meta name="description" content="<?= $description ?? 'Documentos legales de Cycloid Talent SAS.' ?>">
    <meta name="robots" content="noindex">
    <link rel="canonical" href="<?= $canonical ?? current_url() ?>">

    <!-- Inter font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('img/otto-favicon.png') ?>">

    <!-- PWA -->
    <link rel="manifest" href="<?= base_url('manifest.json') ?>">
    <meta name="theme-color" content="#0345BF">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Cycloid Talent">
    <link rel="apple-touch-icon" href="<?= base_url('assets/img/icons/icon-192x192.png') ?>">
</head>
<body class="bg-white text-cycloid-text font-sans antialiased" x-data>

    <?= $this->include('partials/navbar') ?>

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('partials/footer') ?>

    <!-- Alpine.js -->
    <script defer src="<?= base_url('assets/js/alpine.min.js') ?>"></script>

    <!-- Service Worker -->
    <script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('<?= base_url('sw.js') ?>');
        });
    }
    </script>
</body>
</html>
