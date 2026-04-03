<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <span class="text-white">Consultoría SG-SST</span>
        </nav>
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Servicios</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">Consultoría SG-SST</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Diseñamos, implementamos y mantenemos tu Sistema de Gestión de Seguridad y Salud en el Trabajo conforme al Decreto 1072 de 2015 y la Resolución 0312 de 2019.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-cycloid-navy mb-5">¿Qué incluye nuestro servicio?</h2>
                <p class="text-gray-500 leading-relaxed mb-8">
                    El SG-SST es obligatorio para todas las empresas en Colombia sin importar su tamaño o sector. No cumplirlo puede generar multas de hasta 500 SMMLV. En Cycloid Talent lo implementamos de forma eficiente, adaptada a tu realidad empresarial.
                </p>
                <ul class="space-y-4">
                    <?php
                    $items = [
                        'Diagnóstico inicial del estado de la empresa frente a la normativa',
                        'Política de Seguridad y Salud en el Trabajo',
                        'Matrices de identificación de peligros y valoración de riesgos (IPVR)',
                        'Plan anual de trabajo SST con indicadores de gestión',
                        'Capacitaciones obligatorias al personal',
                        'Conformación y apoyo al COPASST o Vigía SST',
                        'Preparación para auditorías del Ministerio del Trabajo',
                        'Acceso al dashboard de seguimiento en tiempo real',
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
            <div class="bg-cycloid-bg rounded-2xl p-5 sm:p-8 border border-gray-100">
                <h3 class="font-bold text-cycloid-navy mb-6 text-lg">Normativa que cumplimos</h3>
                <div class="space-y-4">
                    <?php
                    $normas = [
                        ['cod' => 'Decreto 1072', 'desc' => 'Único Reglamentario del Sector Trabajo — SG-SST'],
                        ['cod' => 'Resolución 0312', 'desc' => 'Estándares mínimos del SG-SST por tamaño de empresa'],
                        ['cod' => 'Ley 1562', 'desc' => 'Sistema General de Riesgos Laborales'],
                        ['cod' => 'Decreto 171', 'desc' => 'Implementación del SG-SST — plazos y fases'],
                    ];
                    foreach ($normas as $n): ?>
                    <div class="flex items-center gap-4 bg-white rounded-xl p-4 border border-gray-100">
                        <span class="text-xs font-bold text-cycloid-blue bg-cycloid-blue/10 px-3 py-1 rounded-lg whitespace-nowrap"><?= $n['cod'] ?></span>
                        <span class="text-sm text-gray-600"><?= $n['desc'] ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="mt-8">
                    <a href="https://dashboard.cycloidtalent.com" target="_blank" rel="noopener"
                       class="block w-full text-center bg-cycloid-blue text-white py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors">
                        Acceder al dashboard SST →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->setVar('tools', [
    ['logo' => 'enterprisesst.png', 'name' => 'EnterpriseSST', 'desc' => 'Software integral para la gestión y seguimiento del SG-SST en tiempo real.'],
    ['logo' => 'sstrojo.png', 'name' => 'Cycloid SST', 'desc' => 'Plataforma de documentación, indicadores y trazabilidad SST.'],
]); ?>
<?= $this->include('partials/tools_section') ?>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
