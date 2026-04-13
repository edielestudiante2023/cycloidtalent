<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Cycloid Talent Admin</title>
    <link rel="icon" type="image/png" href="<?= base_url('img/otto-favicon.png') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
</head>
<body class="bg-gray-100 font-sans antialiased" style="display:flex;align-items:center;justify-content:center;min-height:100vh;">
    <div style="width:100%;max-width:28rem;">
        <div class="bg-white rounded-lg shadow-lg" style="padding:2rem;">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-[#0345BF]">Cycloid Talent</h1>
                <p class="text-gray-500 mt-1">Panel de administración</p>
            </div>

            <?php if (! empty($error)): ?>
                <div class="mb-4 p-4 bg-red-100 border border-red-300 text-red-800 rounded text-sm">
                    <?= esc($error) ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-800 rounded text-sm">
                    <?= esc(session()->getFlashdata('success')) ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/login') ?>" method="POST">
                <?= csrf_field() ?>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" required autofocus
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                </div>

                <div class="mb-2">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                    <div style="position:relative;">
                        <input type="password" name="password" id="password" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                            style="padding-right:3rem;">
                        <button type="button" id="togglePassword" aria-label="Mostrar/ocultar contraseña"
                            style="position:absolute;right:0.5rem;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;padding:0.5rem;color:#6b7280;">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" style="width:1.25rem;height:1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="mb-6 text-right">
                    <a href="<?= base_url('admin/forgot') ?>" class="text-sm text-blue-600 hover:underline">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>

                <button type="submit"
                    style="width:100%;background:#0345BF;color:#fff;padding:0.5rem 1rem;border-radius:0.5rem;font-weight:600;border:none;cursor:pointer;">
                    Iniciar sesión
                </button>
            </form>

            <script>
                (function() {
                    var btn = document.getElementById('togglePassword');
                    var input = document.getElementById('password');
                    var icon = document.getElementById('eyeIcon');
                    var eyeOpen = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>';
                    var eyeClosed = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"/>';
                    btn.addEventListener('click', function() {
                        if (input.type === 'password') {
                            input.type = 'text';
                            icon.innerHTML = eyeClosed;
                        } else {
                            input.type = 'password';
                            icon.innerHTML = eyeOpen;
                        }
                    });
                })();
            </script>
        </div>
    </div>
</body>
</html>
