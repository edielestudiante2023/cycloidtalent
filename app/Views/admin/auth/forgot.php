<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña | Cycloid Talent Admin</title>
    <link rel="icon" type="image/png" href="<?= base_url('img/otto-favicon.png') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
</head>
<body class="bg-gray-100 font-sans antialiased" style="display:flex;align-items:center;justify-content:center;min-height:100vh;">
    <div style="width:100%;max-width:28rem;">
        <div class="bg-white rounded-lg shadow-lg" style="padding:2rem;">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-[#0345BF]">Recuperar contraseña</h1>
                <p class="text-gray-500 mt-1 text-sm">Te enviaremos un enlace para restablecerla</p>
            </div>

            <?php if (! empty($error)): ?>
                <div class="mb-4 p-4 bg-red-100 border border-red-300 text-red-800 rounded text-sm">
                    <?= esc($error) ?>
                </div>
            <?php endif; ?>

            <?php if (! empty($success)): ?>
                <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-800 rounded text-sm">
                    <?= esc($success) ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/forgot') ?>" method="POST">
                <?= csrf_field() ?>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" required autofocus
                        placeholder="tu@email.com"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                </div>

                <button type="submit"
                    style="width:100%;background:#0345BF;color:#fff;padding:0.5rem 1rem;border-radius:0.5rem;font-weight:600;border:none;cursor:pointer;margin-bottom:1rem;">
                    Enviar enlace de recuperación
                </button>
            </form>

            <div class="text-center">
                <a href="<?= base_url('admin/login') ?>" class="text-sm text-blue-600 hover:underline">
                    &larr; Volver al login
                </a>
            </div>
        </div>
    </div>
</body>
</html>
