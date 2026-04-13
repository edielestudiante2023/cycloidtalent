<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <span class="text-white">Batería de Riesgo Psicosocial</span>
        </nav>
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Servicios SST</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">Batería de Riesgo Psicosocial en Colombia</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Aplicamos, medimos y evaluamos la Batería de Riesgo Psicosocial con los instrumentos oficiales del Ministerio del Trabajo, cumpliendo la Resolución 2646 de 2008 y la Resolución 2764 de 2022.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-cycloid-navy mb-5">¿Qué evaluamos en la Batería de Riesgo Psicosocial?</h2>
                <p class="text-gray-500 leading-relaxed mb-8">
                    El <strong>riesgo psicosocial</strong> afecta la salud mental, emocional y física de los trabajadores. Su gestión inadecuada genera ausentismo, accidentalidad y baja productividad. La Resolución 2646 de 2008 y la Resolución 2764 de 2022 obligan a todas las empresas colombianas a identificar, evaluar y controlar los factores de riesgo psicosocial laboral mediante la Batería del Ministerio del Trabajo.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php
                    $factores = [
                        ['titulo' => 'Gestión organizacional', 'desc' => 'Estilo de mando, pago, contratación, participación'],
                        ['titulo' => 'Características del trabajo', 'desc' => 'Demandas, control, monotonía, autonomía'],
                        ['titulo' => 'Relaciones sociales', 'desc' => 'Interacción con jefes, compañeros y clientes'],
                        ['titulo' => 'Condiciones del trabajo', 'desc' => 'Ambiente físico, tecnológico y diseño del puesto'],
                        ['titulo' => 'Jornada de trabajo', 'desc' => 'Duración, pausas, turnos y trabajo nocturno'],
                        ['titulo' => 'Factores extralaborales', 'desc' => 'Vida familiar, social y condiciones del hogar'],
                    ];
                    foreach ($factores as $f): ?>
                    <div class="bg-cycloid-bg rounded-xl p-4 border border-gray-100">
                        <h4 class="font-semibold text-cycloid-navy text-sm mb-1"><?= $f['titulo'] ?></h4>
                        <p class="text-xs text-gray-500"><?= $f['desc'] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-bold text-cycloid-navy mb-5">Nuestro proceso</h3>
                <ol class="space-y-5">
                    <?php
                    $pasos = [
                        ['n' => '01', 'titulo' => 'Sensibilización', 'desc' => 'Socialización con la empresa y los trabajadores sobre el proceso de evaluación.'],
                        ['n' => '02', 'titulo' => 'Aplicación de la batería', 'desc' => 'Cuestionarios validados del Ministerio del Trabajo para todos los niveles de cargo.'],
                        ['n' => '03', 'titulo' => 'Análisis de resultados', 'desc' => 'Procesamiento estadístico e identificación de niveles de riesgo por área.'],
                        ['n' => '04', 'titulo' => 'Informe y plan de intervención', 'desc' => 'Entrega de informe completo con recomendaciones y plan de acción priorizado.'],
                        ['n' => '05', 'titulo' => 'Seguimiento', 'desc' => 'Acompañamiento en la implementación de medidas de intervención.'],
                    ];
                    foreach ($pasos as $p): ?>
                    <li class="flex items-start gap-4">
                        <span class="text-2xl font-extrabold text-cycloid-blue/20 leading-none"><?= $p['n'] ?></span>
                        <div>
                            <h4 class="font-bold text-cycloid-navy"><?= $p['titulo'] ?></h4>
                            <p class="text-sm text-gray-500 mt-0.5"><?= $p['desc'] ?></p>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ol>
                <div class="mt-8 p-5 bg-cycloid-blue/5 rounded-2xl border border-cycloid-blue/20">
                    <p class="text-sm font-semibold text-cycloid-navy mb-2">Portafolio RPS 2026</p>
                    <p class="text-sm text-gray-500 mb-4">Descarga nuestro portafolio actualizado con metodología, cronograma y propuesta de valor.</p>
                    <a href="<?= base_url('contacto') ?>"
                       class="inline-block bg-cycloid-blue text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-blue-700 transition-colors">
                        Solicitar portafolio
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Carrusel de imágenes RPS -->
<section class="py-16 bg-cycloid-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-cycloid-navy mb-8 text-center">Nuestro trabajo en campo</h2>

        <div x-data="{
            actual: 0,
            total: 18,
            prev() { this.actual = (this.actual - 1 + this.total) % this.total },
            next() { this.actual = (this.actual + 1) % this.total }
        }" class="relative">

            <!-- Imagen principal -->
            <div class="relative rounded-2xl overflow-hidden bg-gray-100 aspect-video">
                <?php for ($i = 1; $i <= 18; $i++): ?>
                <img src="<?= base_url('assets/img/Portafolio RPS - ACTUALIZACIÓN 2026/' . $i . '.png') ?>"
                     alt="Portafolio RPS <?= $i ?>"
                     class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500" loading="lazy"
                     :class="actual === <?= $i - 1 ?> ? 'opacity-100' : 'opacity-0'">
                <?php endfor; ?>

                <!-- Flechas -->
                <button @click="prev()"
                        class="absolute left-2 sm:left-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-cycloid-navy w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center shadow transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button @click="next()"
                        class="absolute right-2 sm:right-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-cycloid-navy w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center shadow transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

                <!-- Contador -->
                <span class="absolute bottom-3 right-4 bg-black/50 text-white text-xs px-3 py-1 rounded-full"
                      x-text="(actual + 1) + ' / ' + total"></span>
            </div>

            <!-- Miniaturas -->
            <div class="flex gap-2 mt-3 overflow-x-auto pb-1">
                <?php for ($i = 1; $i <= 18; $i++): ?>
                <button @click="actual = <?= $i - 1 ?>"
                        class="shrink-0 w-12 h-12 sm:w-16 sm:h-16 rounded-xl overflow-hidden border-2 transition"
                        :class="actual === <?= $i - 1 ?> ? 'border-cycloid-blue' : 'border-transparent opacity-60 hover:opacity-100'">
                    <img src="<?= base_url('assets/img/Portafolio RPS - ACTUALIZACIÓN 2026/' . $i . '.png') ?>"
                         alt="Miniatura <?= $i ?>" class="w-full h-full object-cover" loading="lazy">
                </button>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<?php if (! empty($galeria)): ?>
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-cycloid-navy mb-8 text-center">Algunos de nuestros servicios</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:1.5rem;">
            <?php foreach ($galeria as $foto): ?>
            <div class="rounded-2xl overflow-hidden shadow-sm border border-gray-100" style="background:#fff;">
                <div style="aspect-ratio:4/3;overflow:hidden;">
                    <img src="<?= base_url('assets/img/servicios/' . $foto['imagen']) ?>"
                         alt="<?= esc($foto['titulo']) ?>"
                         style="width:100%;height:100%;object-fit:cover;" loading="lazy">
                </div>
                <div style="padding:1rem;">
                    <p class="text-sm font-semibold text-cycloid-navy"><?= esc($foto['titulo']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ¿Por qué elegir Cycloid Talent para evaluación RPS? -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-14">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">¿Por qué elegirnos?</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy mb-4">Evaluación de Riesgo Psicosocial con psicólogos licenciados</h2>
            <p class="text-gray-500 leading-relaxed">
                Somos especialistas en la aplicación de la Batería de Riesgo Psicosocial del Ministerio del Trabajo. Contamos con psicólogos con licencia SST vigente y herramientas tecnológicas propias para análisis preciso.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $beneficios = [
                ['titulo' => 'Psicólogos con licencia SST', 'desc' => 'Todo nuestro equipo tiene licencia vigente en Seguridad y Salud en el Trabajo emitida por la Secretaría de Salud.'],
                ['titulo' => 'Batería oficial MinTrabajo', 'desc' => 'Aplicamos los instrumentos oficiales validados del Ministerio del Trabajo según Resolución 2646 y 2764.'],
                ['titulo' => 'Método Psycloid', 'desc' => 'Modelo propio de análisis e intervención basado en más de 5 años de experiencia en RPS empresarial.'],
                ['titulo' => 'Plan de intervención', 'desc' => 'Entregamos plan de intervención priorizado a 12 meses con cronograma, responsables y métricas.'],
            ];
            foreach ($beneficios as $b): ?>
            <div class="bg-cycloid-bg rounded-2xl p-6 border border-gray-100">
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
<section class="py-20 bg-cycloid-bg">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">FAQ</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy">Preguntas frecuentes sobre la Batería de Riesgo Psicosocial</h2>
        </div>

        <div class="space-y-4" x-data="{ open: 0 }">
            <?php foreach ($faqs as $i => $faq): ?>
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
    ['logo' => 'logo_psirysk.png', 'name' => 'PsyRisk', 'desc' => 'Plataforma de evaluación y análisis de batería de riesgo psicosocial laboral.'],
    ['logo' => 'logo_rps.png', 'name' => 'Cycloid RPS', 'desc' => 'Portafolio integral de gestión de riesgo psicosocial.'],
    ['logo' => 'psicloidmethod.png', 'name' => 'Psycloid Method', 'desc' => 'Modelo propio de análisis e intervención de batería de riesgo psicosocial.'],
    ['logo' => 'sstrojo.png', 'name' => 'Cycloid SST', 'desc' => 'Plataforma de documentación, indicadores y trazabilidad SST.'],
]); ?>
<?= $this->include('partials/tools_section') ?>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
