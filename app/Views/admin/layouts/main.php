<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin' ?> | Cycloid Talent</title>
    <link rel="icon" type="image/png" href="<?= base_url('img/otto-favicon.png') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
    <style>
        .sidebar { min-height: 100vh; }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased" x-data="{ sidebarOpen: true }">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="sidebar w-64 bg-[#0345BF] text-white flex-shrink-0 flex flex-col" x-show="sidebarOpen">
            <div class="p-6 border-b border-blue-700">
                <h1 class="text-xl font-bold">Cycloid Admin</h1>
                <p class="text-blue-200 text-sm mt-1"><?= session()->get('usuario_nombre') ?></p>
            </div>
            <nav class="flex-1 p-4 space-y-1">
                <a href="/admin" class="block px-4 py-2 rounded hover:bg-blue-700 transition <?= uri_string() === 'admin' ? 'bg-blue-700' : '' ?>">
                    Dashboard
                </a>
                <a href="/admin/contacto" class="block px-4 py-2 rounded hover:bg-blue-700 transition <?= str_starts_with(uri_string(), 'admin/contacto') ? 'bg-blue-700' : '' ?>">
                    Mensajes de contacto
                </a>
                <a href="/admin/usuarios" class="block px-4 py-2 rounded hover:bg-blue-700 transition <?= str_starts_with(uri_string(), 'admin/usuarios') ? 'bg-blue-700' : '' ?>">
                    Usuarios
                </a>
            </nav>
            <div class="p-4 border-t border-blue-700">
                <a href="/admin/logout" class="block px-4 py-2 rounded hover:bg-red-600 transition text-center">
                    Cerrar sesión
                </a>
            </div>
        </aside>

        <!-- Main content -->
        <div class="flex-1 flex flex-col min-h-screen">
            <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
                <button @click="sidebarOpen = !sidebarOpen" class="text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                <h2 class="text-lg font-semibold text-gray-800"><?= $title ?? 'Admin' ?></h2>
                <div></div>
            </header>

            <main class="flex-1 p-6">
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-800 rounded">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="mb-4 p-4 bg-red-100 border border-red-300 text-red-800 rounded">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('errors')): ?>
                    <div class="mb-4 p-4 bg-red-100 border border-red-300 text-red-800 rounded">
                        <ul class="list-disc list-inside">
                            <?php foreach (session()->getFlashdata('errors') as $err): ?>
                                <li><?= esc($err) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?= $this->renderSection('content') ?>
            </main>
        </div>
    </div>

    <script defer src="<?= base_url('assets/js/alpine.min.js') ?>"></script>
</body>
</html>
