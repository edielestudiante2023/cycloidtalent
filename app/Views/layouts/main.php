<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Cycloid Talent' ?> | Cycloid Talent</title>
    <meta name="description" content="<?= $description ?? 'Consultoría SST, Riesgo Psicosocial y Seguridad en el Trabajo en Colombia.' ?>">

    <!-- Canonical -->
    <link rel="canonical" href="<?= $canonical ?? current_url() ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="<?= $og_type ?? 'website' ?>">
    <meta property="og:locale" content="es_CO">
    <meta property="og:site_name" content="Cycloid Talent">
    <meta property="og:title" content="<?= $title ?? 'Cycloid Talent' ?> | Cycloid Talent">
    <meta property="og:description" content="<?= $description ?? 'Consultoría SST, Riesgo Psicosocial y Seguridad en el Trabajo en Colombia.' ?>">
    <meta property="og:url" content="<?= $canonical ?? current_url() ?>">
    <meta property="og:image" content="<?= $og_image ?? base_url('assets/img/logos/cycloid-og-default.png') ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $title ?? 'Cycloid Talent' ?> | Cycloid Talent">
    <meta name="twitter:description" content="<?= $description ?? 'Consultoría SST, Riesgo Psicosocial y Seguridad en el Trabajo en Colombia.' ?>">
    <meta name="twitter:image" content="<?= $og_image ?? base_url('assets/img/logos/cycloid-og-default.png') ?>">

    <!-- Preload critical resources -->
    <link rel="preload" href="<?= base_url('assets/css/output.css') ?>" as="style">
    <link rel="preload" href="<?= base_url('assets/js/alpine.min.js') ?>" as="script">

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

    <!-- Structured Data (JSON-LD) -->
    <?php if (isset($jsonld)): ?>
    <script type="application/ld+json"><?= $jsonld ?></script>
    <?php endif; ?>
</head>
<body class="bg-cycloid-bg text-cycloid-text font-sans antialiased" x-data>

    <?= $this->include('partials/navbar') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('partials/footer') ?>

    <?= $this->include('partials/otto_widget') ?>

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
