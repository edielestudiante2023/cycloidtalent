<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <span class="text-white">Vigía SST</span>
        </nav>
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Servicios</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">Vigía SST Externo</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Suministramos el Vigía de Seguridad y Salud en el Trabajo para empresas con menos de 10 trabajadores, cumpliendo con la obligación legal sin necesidad de nombrar un empleado interno.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-cycloid-navy mb-5">¿Qué es el Vigía SST?</h2>
                <p class="text-gray-500 leading-relaxed mb-6">
                    El Decreto 1072 de 2015 establece que las empresas con menos de 10 trabajadores deben designar un Vigía de Seguridad y Salud en el Trabajo en lugar del COPASST. El Vigía actúa como enlace entre los trabajadores y la dirección en materia de SST.
                </p>
                <div class="bg-cycloid-blue/5 border border-cycloid-blue/20 rounded-2xl p-5 mb-6">
                    <p class="text-sm font-semibold text-cycloid-navy mb-1">¿Lo sabías?</p>
                    <p class="text-sm text-gray-600">No designar el Vigía SST puede generar multas de hasta 500 SMMLV según el Artículo 91 de la Ley 1562 de 2012. Es una obligación legal sin excepción.</p>
                </div>
                <ul class="space-y-3">
                    <?php
                    $funciones = [
                        'Inspeccionar puestos de trabajo y condiciones de seguridad',
                        'Reportar condiciones inseguras a la alta dirección',
                        'Participar en la investigación de accidentes e incidentes',
                        'Apoyar actividades de capacitación SST',
                        'Registrar y controlar el cumplimiento del plan de trabajo SST',
                        'Coordinar con la ARL actividades de prevención',
                    ];
                    foreach ($funciones as $f): ?>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-cycloid-blue mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                        </svg>
                        <span class="text-gray-600 text-sm"><?= $f ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="space-y-5">
                <!-- Diferencias COPASST vs Vigía -->
                <div class="bg-cycloid-bg rounded-2xl p-6 border border-gray-100">
                    <h3 class="font-bold text-cycloid-navy mb-4">COPASST vs. Vigía SST</h3>
                    <div class="space-y-3">
                        <?php
                        $comparacion = [
                            ['campo' => 'Aplica a', 'copasst' => '≥ 10 trabajadores', 'vigia' => '< 10 trabajadores'],
                            ['campo' => 'Composición', 'copasst' => '2+ representantes por parte', 'vigia' => '1 persona'],
                            ['campo' => 'Elección', 'copasst' => 'Votación trabajadores', 'vigia' => 'Acuerdo entre partes'],
                            ['campo' => 'Vigencia', 'copasst' => '2 años', 'vigia' => '2 años'],
                        ];
                        foreach ($comparacion as $c): ?>
                        <div class="grid grid-cols-3 gap-2 text-xs">
                            <span class="font-semibold text-cycloid-navy"><?= $c['campo'] ?></span>
                            <span class="text-gray-500 bg-white rounded-lg px-2 py-1 text-center"><?= $c['copasst'] ?></span>
                            <span class="text-cycloid-blue bg-cycloid-blue/10 rounded-lg px-2 py-1 text-center font-medium"><?= $c['vigia'] ?></span>
                        </div>
                        <?php endforeach; ?>
                        <div class="grid grid-cols-3 gap-2 text-xs mt-1 pt-2 border-t border-gray-100">
                            <span></span>
                            <span class="text-center text-gray-400 text-xs">COPASST</span>
                            <span class="text-center text-cycloid-blue text-xs font-semibold">Vigía ✓</span>
                        </div>
                    </div>
                </div>

                <!-- Qué incluye nuestro servicio -->
                <div class="bg-cycloid-bg rounded-2xl p-6 border border-gray-100">
                    <h3 class="font-bold text-cycloid-navy mb-4">Nuestro servicio incluye</h3>
                    <ul class="space-y-3">
                        <?php
                        $incluye = [
                            'Asignación formal del Vigía SST externo certificado',
                            'Acta de designación y hoja de vida del Vigía',
                            'Reuniones mensuales de seguimiento SST',
                            'Informes trimestrales de gestión al empleador',
                            'Acceso a plataforma de gestión SST',
                            'Soporte ante visitas del Ministerio del Trabajo',
                        ];
                        foreach ($incluye as $i): ?>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-cycloid-blue mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-600 text-sm"><?= $i ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- CTA -->
                <div class="bg-cycloid-navy rounded-2xl p-6 text-white">
                    <p class="font-bold mb-2">¿Tu empresa tiene menos de 10 trabajadores?</p>
                    <p class="text-sm text-gray-300 mb-4">Cumple la obligación legal hoy mismo. Nuestro Vigía externo se activa en 48 horas.</p>
                    <a href="<?= base_url('contacto') ?>"
                       class="inline-block bg-cycloid-cyan text-cycloid-navy px-5 py-2.5 rounded-xl text-sm font-bold hover:brightness-110 transition">
                        Solicitar Vigía SST →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
