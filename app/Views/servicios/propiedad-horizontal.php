<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <span class="text-white">SST en Propiedad Horizontal</span>
        </nav>
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Servicios SST</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">SST en Propiedad Horizontal en Colombia</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Implementamos el SG-SST en propiedad horizontal: conjuntos residenciales, edificios de oficinas y centros comerciales. Cumplimiento del Decreto 1072 adaptado a porteros, personal de aseo, jardinería y mantenimiento.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-cycloid-navy mb-5">¿Por qué la propiedad horizontal necesita SG-SST?</h2>
                <p class="text-gray-500 leading-relaxed mb-6">
                    Los <strong>conjuntos residenciales, edificios de oficinas y centros comerciales en propiedad horizontal</strong> tienen trabajadores directos (porteros, personal de mantenimiento, jardineros, aseadoras, vigilantes internos) que están cubiertos por la normativa SST colombiana. El <strong>administrador del conjunto es el responsable legal</strong> ante el Ministerio del Trabajo, y el incumplimiento puede generar multas de hasta 500 SMMLV y responsabilidad civil solidaria ante accidentes laborales.
                </p>
                <p class="text-gray-500 leading-relaxed mb-8">
                    En Cycloid Talent desarrollamos un servicio especializado en <strong>SST para propiedad horizontal</strong>, con plataforma propia (Phorizontal) para el seguimiento y gestión digital de indicadores, capacitaciones y cumplimiento normativo.
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

<!-- ¿Por qué elegir Cycloid Talent para SST en propiedad horizontal? -->
<section class="py-20 bg-cycloid-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-14">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">¿Por qué elegirnos?</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy mb-4">SG-SST especializado en propiedad horizontal</h2>
            <p class="text-gray-500 leading-relaxed">
                Somos expertos en implementar el SG-SST para administraciones de conjuntos residenciales y edificios. Más de 50 propiedades horizontales atendidas en Colombia con plataforma propia de gestión digital.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $beneficios = [
                ['titulo' => 'Especialización PH', 'desc' => 'SG-SST adaptado específicamente a administraciones de propiedad horizontal, no un modelo empresarial genérico.'],
                ['titulo' => 'Plataforma Phorizontal', 'desc' => 'Software propio para gestión digital del SG-SST con acceso desde celular para el administrador y el Consejo.'],
                ['titulo' => 'Capacitaciones por rol', 'desc' => 'Formación virtual diferenciada para porteros, aseo, jardinería, mantenimiento y vigilancia.'],
                ['titulo' => 'Blindaje legal', 'desc' => 'Protegemos al administrador ante demandas, multas y auditorías del Ministerio del Trabajo.'],
            ];
            foreach ($beneficios as $b): ?>
            <div class="bg-white rounded-2xl p-6 border border-gray-100">
                <div class="w-10 h-10 bg-cycloid-blue/10 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-cycloid-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-cycloid-navy mb-2"><?= $b['titulo'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $b['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Preguntas Frecuentes -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">FAQ</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy">Preguntas frecuentes sobre SG-SST en propiedad horizontal</h2>
        </div>

        <div class="space-y-4" x-data="{ open: 0 }">
            <?php foreach ($faqs as $i => $faq): ?>
            <div class="bg-cycloid-bg rounded-2xl border border-gray-100 overflow-hidden">
                <button type="button" @click="open === <?= $i ?> ? open = null : open = <?= $i ?>"
                    class="w-full text-left p-5 flex items-center justify-between gap-4 hover:bg-gray-100 transition-colors">
                    <span class="font-semibold text-cycloid-navy text-sm md:text-base"><?= $faq['q'] ?></span>
                    <svg class="w-5 h-5 text-cycloid-blue shrink-0 transition-transform" :class="open === <?= $i ?> ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open === <?= $i ?>" x-transition class="px-5 pb-5 text-sm text-gray-600 leading-relaxed">
                    <?= $faq['a'] ?>
                </div>
            </div>
            <?php endforeach; ?>
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
