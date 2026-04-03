<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <span class="text-white">Auditoría Proveedores</span>
        </nav>
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Servicios</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">Auditoría SG-SST a Proveedores</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Evaluamos el cumplimiento del Sistema de Gestión de Seguridad y Salud en el Trabajo de tus proveedores y contratistas mediante un checklist de 28 ítems basado en la normativa colombiana.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            <div>
                <h2 class="text-2xl font-bold text-cycloid-navy mb-5">¿Por qué auditar tus proveedores?</h2>
                <p class="text-gray-500 leading-relaxed mb-6">
                    El Decreto 1072 de 2015 establece que el contratante es responsable solidario de garantizar condiciones de seguridad a los trabajadores de sus contratistas. Una auditoría SST a proveedores protege tu empresa de sanciones y accidentes.
                </p>
                <div class="bg-cycloid-blue/5 border border-cycloid-blue/20 rounded-2xl p-5 mb-6">
                    <p class="text-sm font-semibold text-cycloid-navy mb-1">¿Sabías que...?</p>
                    <p class="text-sm text-gray-600">El Ministerio del Trabajo puede sancionar a la empresa contratante si un trabajador de su proveedor sufre un accidente por incumplimiento SST.</p>
                </div>
                <ul class="space-y-3">
                    <?php
                    $beneficios = [
                        'Identificación de brechas SST en proveedores críticos',
                        'Informe detallado por proveedor con calificación',
                        'Plan de acción correctiva con plazos',
                        'Seguimiento a la implementación de mejoras',
                        'Evidencia documental para auditorías del Ministerio',
                    ];
                    foreach ($beneficios as $b): ?>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-cycloid-blue mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                        </svg>
                        <span class="text-gray-600 text-sm"><?= $b ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Checklist acordeón -->
            <div x-data="{ abierto: null }">
                <h3 class="text-xl font-bold text-cycloid-navy mb-5">Checklist de 28 ítems</h3>
                <?php
                $categorias = [
                    ['titulo' => 'Política y planificación (6 ítems)', 'items' => [
                        'Política SST documentada, firmada y divulgada',
                        'Objetivos SST definidos y medibles',
                        'Plan de trabajo anual aprobado',
                        'Presupuesto SST asignado',
                        'Responsable SST designado formalmente',
                        'Indicadores de gestión SST definidos',
                    ]],
                    ['titulo' => 'Identificación de peligros y riesgos (5 ítems)', 'items' => [
                        'Matriz de identificación de peligros actualizada',
                        'Valoración de riesgos documentada',
                        'Medidas de intervención implementadas',
                        'Inspecciones periódicas realizadas',
                        'Condiciones de seguridad verificadas en sitio',
                    ]],
                    ['titulo' => 'Capacitación y entrenamiento (5 ítems)', 'items' => [
                        'Inducción SST al personal nuevo',
                        'Plan de capacitación anual ejecutado',
                        'Registros de asistencia a capacitaciones',
                        'Entrenamiento en uso de EPP',
                        'Simulacros de emergencia realizados',
                    ]],
                    ['titulo' => 'Afiliación y nómina (4 ítems)', 'items' => [
                        'Afiliación a ARL vigente y al día',
                        'Afiliación a EPS y pensión de todos los trabajadores',
                        'Pago de aportes a seguridad social al día',
                        'Clasificación correcta de riesgo ante ARL',
                    ]],
                    ['titulo' => 'Gestión de incidentes y accidentes (4 ítems)', 'items' => [
                        'Procedimiento de reporte de accidentes documentado',
                        'Investigación de accidentes e incidentes realizada',
                        'Reporte al Ministerio dentro de los plazos',
                        'Plan de acción post-accidente implementado',
                    ]],
                    ['titulo' => 'Documentación y mejora continua (4 ítems)', 'items' => [
                        'Documentos SST organizados y disponibles',
                        'Auditoría interna SST realizada',
                        'Revisión por la gerencia ejecutada',
                        'Acciones correctivas y preventivas en seguimiento',
                    ]],
                ];
                foreach ($categorias as $idx => $cat): ?>
                <div class="border border-gray-100 rounded-xl mb-2 overflow-hidden">
                    <button @click="abierto === <?= $idx ?> ? abierto = null : abierto = <?= $idx ?>"
                            class="w-full flex justify-between items-center px-5 py-4 text-left bg-cycloid-bg hover:bg-gray-100 transition-colors">
                        <span class="font-medium text-cycloid-navy text-sm"><?= $cat['titulo'] ?></span>
                        <svg class="w-4 h-4 text-gray-400 transition-transform" :class="abierto === <?= $idx ?> ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="abierto === <?= $idx ?>" x-transition class="px-5 py-4 bg-white">
                        <ul class="space-y-2">
                            <?php foreach ($cat['items'] as $item): ?>
                            <li class="flex items-start gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-cycloid-blue mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                </svg>
                                <?= $item ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php $this->setVar('tools', [
    ['logo' => 'sstrojo.png', 'name' => 'Cycloid SST', 'desc' => 'Plataforma de documentación, indicadores y trazabilidad SST.'],
]); ?>
<?= $this->include('partials/tools_section') ?>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
