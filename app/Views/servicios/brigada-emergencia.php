<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <span class="text-white">Brigada de Emergencia</span>
        </nav>
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Servicios</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">Brigada de Emergencia</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Formamos y entrenamos brigadas de emergencia empresariales con protocolos actualizados de primeros auxilios, evacuación, control de incendios y rescate.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-2xl md:text-3xl font-bold text-cycloid-navy">Módulos de formación</h2>
            <p class="mt-3 text-gray-500 max-w-xl mx-auto">Nuestro programa cubre los cuatro pilares fundamentales de la respuesta ante emergencias empresariales.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <?php
            $modulos = [
                [
                    'icono'  => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                    'titulo' => 'Primeros Auxilios',
                    'desc'   => 'RCP, DEA, manejo de heridas, fracturas, quemaduras y traslado seguro de víctimas. Certificación de 16 horas.',
                    'color'  => 'text-red-500 bg-red-50',
                ],
                [
                    'icono'  => 'M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z',
                    'titulo' => 'Control de Incendios',
                    'desc'   => 'Clasificación de fuegos, uso de extintores, mangueras y equipos contraincendio. Práctica con fuego real.',
                    'color'  => 'text-orange-500 bg-orange-50',
                ],
                [
                    'icono'  => 'M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1',
                    'titulo' => 'Evacuación',
                    'desc'   => 'Rutas de evacuación, puntos de encuentro, conteo de personal, manejo de personas con movilidad reducida.',
                    'color'  => 'text-green-500 bg-green-50',
                ],
                [
                    'icono'  => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z',
                    'titulo' => 'Rescate Básico',
                    'desc'   => 'Técnicas de rescate en espacios confinados, alturas y situaciones de atrapamiento. Uso de equipos de rescate.',
                    'color'  => 'text-blue-500 bg-blue-50',
                ],
            ];
            foreach ($modulos as $m): ?>
            <div class="flex items-start gap-5 bg-cycloid-bg rounded-2xl p-6 border border-gray-100">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 <?= $m['color'] ?>">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $m['icono'] ?>"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-cycloid-navy mb-2"><?= $m['titulo'] ?></h3>
                    <p class="text-sm text-gray-500 leading-relaxed"><?= $m['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Galería -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <?php for ($i = 9; $i <= 12; $i++): ?>
            <div class="rounded-2xl overflow-hidden aspect-square bg-gray-100">
                <img src="<?= base_url('assets/img/services/rps-2026/' . $i . '.jpg') ?>"
                     alt="Brigada de emergencia" class="w-full h-full object-cover">
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
