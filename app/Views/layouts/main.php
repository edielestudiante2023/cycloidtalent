<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Cycloid Talent' ?> | Cycloid Talent</title>
    <meta name="description" content="<?= $description ?? 'Consultoría SST, Riesgo Psicosocial y Seguridad en el Trabajo en Colombia.' ?>">

    <!-- Inter font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logos/cycloid-logo-azul.png') ?>">
</head>
<body class="bg-cycloid-bg text-cycloid-text font-sans antialiased" x-data>

    <?= $this->include('partials/navbar') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('partials/footer') ?>

    <!-- Alpine.js -->
    <script type="module" src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
