<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <span class="text-white">Propiedad Horizontal</span>
        </nav>
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Servicios</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">SST en Propiedad Horizontal</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Gestión especializada de Seguridad y Salud en el Trabajo para conjuntos residenciales, edificios de oficinas y centros comerciales.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-cycloid-navy mb-5">¿Por qué la propiedad horizontal necesita SST?</h2>
                <p class="text-gray-500 leading-relaxed mb-6">
                    Los conjuntos residenciales y edificios tienen trabajadores (porteros, personal de mantenimiento, jardineros, aseadoras) que están cubiertos por la normativa SST. El incumplimiento puede generar multas y responsabilidad civil ante accidentes.
                </p>
                <p class="text-gray-500 leading-relaxed mb-8">
                    En Cycloid Talent desarrollamos un servicio especializado para este sector, con plataforma propia para el seguimiento y gestión de indicadores.
                </p>
                <ul class="space-y-3">
                    <?php
                    $items = [
                        'SG-SST adaptado a la estructura de propiedad horizontal',
                        'Gestión de personal de mantenimiento, vigilancia y servicios generales',
                        'Capacitaciones específicas por rol',
                        'Matrices de riesgo para áreas comunes y zonas técnicas',
                        'Gestión de contratistas y proveedores del conjunto',
                        'Acceso a plataforma digital de seguimiento',
                    ];
                    foreach ($items as $item): ?>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-cycloid-blue mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                        </svg>
                        <span class="text-gray-600 text-sm"><?= $item ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="space-y-4">
                <div class="bg-cycloid-bg rounded-2xl p-6 border border-gray-100">
                    <h3 class="font-bold text-cycloid-navy mb-3">Plataforma Phorizontal</h3>
                    <p class="text-sm text-gray-500 mb-4">
                        Accede a nuestra plataforma especializada para gestionar el SST de tu conjunto o edificio de forma digital y en tiempo real.
                    </p>
                    <a href="https://phorizontal.cycloidtalent.com" target="_blank" rel="noopener"
                       class="inline-block bg-cycloid-blue text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-blue-700 transition-colors">
                        Ingresar a Phorizontal →
                    </a>
                </div>
                <div class="bg-cycloid-bg rounded-2xl p-6 border border-gray-100">
                    <h3 class="font-bold text-cycloid-navy mb-3">Formación virtual — Chamilo</h3>
                    <p class="text-sm text-gray-500 mb-4">
                        Capacita a tu personal de forma virtual con nuestros cursos disponibles en la plataforma Chamilo, sin interrumpir las operaciones del conjunto.
                    </p>
                    <a href="https://phorizontal.cycloidtalent.com" target="_blank" rel="noopener"
                       class="inline-block border border-cycloid-blue text-cycloid-blue px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-cycloid-blue hover:text-white transition-colors">
                        Ir a los cursos →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->setVar('tools', [
    ['logo' => 'enterprisesst.png', 'name' => 'EnterpriseSST', 'desc' => 'Software integral para la gestión del SG-SST adaptado a propiedad horizontal.'],
    ['logo' => 'sstrojo.png', 'name' => 'Cycloid SST', 'desc' => 'Plataforma de documentación, indicadores y trazabilidad SST.'],
]); ?>
<?= $this->include('partials/tools_section') ?>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
