<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <span class="text-white">Consultoría en SST</span>
        </nav>
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Servicios SST</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">Consultoría en SST en Colombia</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Consultoría en Seguridad y Salud en el Trabajo para empresas colombianas. Diseñamos, implementamos y mantenemos tu SG-SST conforme al Decreto 1072 de 2015 y la Resolución 0312 de 2019.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-cycloid-navy mb-5">¿Qué incluye nuestra consultoría en SST?</h2>
                <p class="text-gray-500 leading-relaxed mb-4">
                    La <strong>consultoría en SST</strong> es obligatoria para todas las empresas en Colombia sin importar su tamaño o sector. No cumplir con el SG-SST puede generar multas de hasta 500 SMMLV. En Cycloid Talent implementamos tu Sistema de Gestión de Seguridad y Salud en el Trabajo de forma eficiente, adaptada a tu realidad empresarial.
                </p>
                <p class="text-gray-500 leading-relaxed mb-8" style="padding:0.85rem 1rem;background:#f0f9ff;border-left:4px solid #0345BF;border-radius:0.5rem;">
                    <strong class="text-cycloid-navy">Cycloid Talent está licenciada</strong> por la Secretaría de Salud de Cundinamarca (<a href="<?= base_url('nosotros') ?>#licencia-sst" class="text-cycloid-blue hover:underline">Resolución 25-1231 de 2026</a>) para el <em>diseño, administración y ejecución del SG-SST</em> en todo el territorio nacional, con vigencia de 10 años.
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

<!-- ¿Por qué elegir Cycloid Talent para consultoría SST? -->
<section class="py-20 bg-cycloid-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-14">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">¿Por qué elegirnos?</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy mb-4">Consultoría en SST con resultados reales</h2>
            <p class="text-gray-500 leading-relaxed">
                Somos especialistas en Seguridad y Salud en el Trabajo con experiencia en más de 50 empresas colombianas. Nuestra consultoría SST combina cumplimiento normativo, herramientas tecnológicas y acompañamiento humano.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $beneficios = [
                ['titulo' => 'Cumplimiento garantizado', 'desc' => 'Evita multas del Ministerio del Trabajo de hasta 500 SMMLV con una consultoría SST integral.'],
                ['titulo' => 'Licenciados en SST', 'desc' => 'Equipo con licencia en Seguridad y Salud en el Trabajo emitida por la Secretaría de Salud.'],
                ['titulo' => 'Tecnología propia', 'desc' => 'Dashboard SST con seguimiento en tiempo real de indicadores, tareas y cumplimiento.'],
                ['titulo' => 'Enfoque integral', 'desc' => 'Consultoría SST para empresas, propiedad horizontal, locales comerciales y contratistas.'],
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

<!-- Proceso de consultoría en SST -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">Nuestro proceso</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy">Cómo implementamos el SG-SST en tu empresa</h2>
        </div>

        <div class="space-y-6">
            <?php
            $pasos = [
                ['n' => '01', 'titulo' => 'Diagnóstico inicial SST', 'desc' => 'Evaluamos el estado actual de tu empresa frente a los estándares mínimos de la Resolución 0312. Identificamos brechas y priorizamos acciones.'],
                ['n' => '02', 'titulo' => 'Diseño del SG-SST', 'desc' => 'Elaboramos política SST, matrices IPVR, plan de trabajo anual, procedimientos y documentación exigida por el Decreto 1072.'],
                ['n' => '03', 'titulo' => 'Implementación y capacitación', 'desc' => 'Capacitamos al personal, conformamos el COPASST o Vigía SST, ejecutamos el plan de trabajo y realizamos inspecciones preventivas.'],
                ['n' => '04', 'titulo' => 'Seguimiento y mejora', 'desc' => 'Medimos indicadores, reportamos avances mensuales y preparamos tu empresa para auditorías del Ministerio del Trabajo y la ARL.'],
            ];
            foreach ($pasos as $p): ?>
            <div class="flex items-start gap-6 bg-cycloid-bg rounded-2xl p-6 border border-gray-100">
                <span class="text-3xl font-extrabold text-cycloid-blue/30 leading-none shrink-0"><?= $p['n'] ?></span>
                <div>
                    <h3 class="font-bold text-cycloid-navy mb-2"><?= $p['titulo'] ?></h3>
                    <p class="text-sm text-gray-500 leading-relaxed"><?= $p['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Preguntas Frecuentes -->
<section class="py-20 bg-cycloid-bg">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">FAQ</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy">Preguntas frecuentes sobre consultoría en SST</h2>
        </div>

        <div class="space-y-4" x-data="{ open: 0 }">
            <?php
            $faqs = [
                [
                    'q' => '¿Qué es la consultoría en SST y por qué es obligatoria en Colombia?',
                    'a' => 'La consultoría en Seguridad y Salud en el Trabajo (SST) es el servicio profesional que ayuda a las empresas a diseñar e implementar un Sistema de Gestión SG-SST conforme al Decreto 1072 de 2015. Es obligatoria para TODAS las empresas en Colombia, sin importar su tamaño o sector, y su incumplimiento puede generar multas de hasta 500 SMMLV.',
                ],
                [
                    'q' => '¿Cuánto cuesta una consultoría SST en Colombia?',
                    'a' => 'El costo de la consultoría en SST depende del tamaño de la empresa, la cantidad de trabajadores, la complejidad de los procesos y el nivel de riesgo. En Cycloid Talent ofrecemos planes adaptados desde micro empresas hasta medianas y grandes empresas. Solicita una cotización gratuita sin compromiso.',
                ],
                [
                    'q' => '¿Qué diferencia hay entre la ARL y una consultoría SST externa?',
                    'a' => 'La ARL (Administradora de Riesgos Laborales) ofrece asesoría básica incluida en la cotización, pero no implementa el SG-SST por ti. Una consultoría SST externa como Cycloid Talent diseña, implementa, documenta y da seguimiento integral a tu Sistema de Gestión, garantizando el cumplimiento normativo completo.',
                ],
                [
                    'q' => '¿Cuánto tiempo toma implementar el SG-SST?',
                    'a' => 'La implementación del SG-SST toma entre 3 y 6 meses dependiendo del tamaño de la empresa y su madurez previa en SST. El mantenimiento es continuo: el SG-SST requiere actualizaciones anuales y auditorías periódicas para mantenerse vigente.',
                ],
                [
                    'q' => '¿A quién va dirigida esta consultoría en SST?',
                    'a' => 'Nuestra consultoría SST está dirigida a empresas de cualquier tamaño en Colombia: pymes, grandes empresas, propiedad horizontal (conjuntos residenciales y edificios), locales comerciales, contratistas y proveedores que deben cumplir con los estándares mínimos del Ministerio del Trabajo.',
                ],
                [
                    'q' => '¿Qué pasa si no cumplo con el SG-SST?',
                    'a' => 'El incumplimiento del SG-SST genera sanciones económicas de hasta 500 salarios mínimos legales mensuales vigentes (SMMLV), clausura del establecimiento y responsabilidad legal del empleador ante accidentes o enfermedades laborales de los trabajadores.',
                ],
            ];
            foreach ($faqs as $i => $faq): ?>
            <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden">
                <button type="button" @click="open === <?= $i ?> ? open = null : open = <?= $i ?>"
                    class="w-full text-left p-5 flex items-center justify-between gap-4 hover:bg-gray-50 transition-colors">
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
    ['logo' => 'enterprisesst.png', 'name' => 'EnterpriseSST', 'desc' => 'Software integral para la gestión y seguimiento del SG-SST en tiempo real.'],
    ['logo' => 'sstrojo.png', 'name' => 'Cycloid SST', 'desc' => 'Plataforma de documentación, indicadores y trazabilidad SST.'],
]); ?>
<?= $this->include('partials/tools_section') ?>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
