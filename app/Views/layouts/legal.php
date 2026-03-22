<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Documento Legal' ?> | Cycloid Talent</title>
    <meta name="description" content="<?= $description ?? 'Documentos legales de Cycloid Talent SAS.' ?>">
    <meta name="robots" content="noindex">

    <!-- Inter font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logos/cycloid-logo-azul.png') ?>">
</head>
<body class="bg-white text-cycloid-text font-sans antialiased" x-data>

    <?= $this->include('partials/navbar') ?>

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('partials/footer') ?>

    <!-- Alpine.js -->
    <script type="module" src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
