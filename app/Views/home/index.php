<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- ═══════════════════════════════════════════
     HERO
════════════════════════════════════════════ -->
<section class="bg-cycloid-navy text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-28 text-center">
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-4">
            Consultoría SST en Colombia
        </p>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6">
            Seguridad y Salud<br>
            <span class="text-cycloid-cyan">que protege tu empresa</span>
        </h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto mb-10">
            Implementamos y mantenemos tu SG-SST, gestionamos el riesgo psicosocial
            y formamos tus brigadas de emergencia. Cumplimiento normativo garantizado.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= base_url('contacto') ?>"
               class="bg-cycloid-blue text-white px-8 py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors">
                Solicitar asesoría
            </a>
            <a href="<?= base_url('nosotros') ?>"
               class="border border-white/30 text-white px-8 py-3 rounded-xl font-semibold hover:bg-white/10 transition-colors">
                Conoce el equipo
            </a>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     SERVICIOS
════════════════════════════════════════════ -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">Lo que hacemos</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy">Nuestros servicios</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <?php
            $servicios = [
                [
                    'icono'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
                    'titulo' => 'Consultoría SG-SST',
                    'desc'   => 'Diseño, implementación y mantenimiento de tu Sistema de Gestión de Seguridad y Salud en el Trabajo según el Decreto 1072.',
                    'link'   => 'servicios/consultoria-sst',
                ],
                [
                    'icono'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>',
                    'titulo' => 'Riesgo Psicosocial',
                    'desc'   => 'Evaluación y gestión del riesgo psicosocial laboral con la Batería de Instrumentos del Ministerio del Trabajo.',
                    'link'   => 'servicios/riesgo-psicosocial',
                ],
                [
                    'icono'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>',
                    'titulo' => 'Propiedad Horizontal',
                    'desc'   => 'Gestión SST especializada para conjuntos residenciales y edificios de oficinas en propiedad horizontal.',
                    'link'   => 'servicios/propiedad-horizontal',
                ],
                [
                    'icono'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>',
                    'titulo' => 'Brigada de Emergencia',
                    'desc'   => 'Formación y entrenamiento de brigadas: primeros auxilios, evacuación, control de incendios y rescate.',
                    'link'   => 'servicios/brigada-emergencia',
                ],
                [
                    'icono'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>',
                    'titulo' => 'Auditoría Proveedores',
                    'desc'   => 'Evaluación del SG-SST de tus proveedores y contratistas con checklist de 28 ítems basado en la normativa.',
                    'link'   => 'servicios/auditoria-proveedores',
                ],
                [
                    'icono'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>',
                    'titulo' => 'Vigía SST',
                    'desc'   => 'Servicio de Vigía SST externo para empresas con menos de 10 trabajadores. Cumple la ley sin costo de nómina.',
                    'link'   => 'servicios/vigia-sst',
                ],
            ];
            foreach ($servicios as $s): ?>
            <a href="<?= base_url($s['link']) ?>"
               class="group bg-cycloid-bg rounded-2xl p-6 border border-gray-100 hover:border-cycloid-blue hover:shadow-lg transition-all duration-200">
                <div class="w-12 h-12 bg-cycloid-blue/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-cycloid-blue transition-colors">
                    <svg class="w-6 h-6 text-cycloid-blue group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <?= $s['icono'] ?>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-cycloid-navy mb-2 group-hover:text-cycloid-blue transition-colors">
                    <?= $s['titulo'] ?>
                </h3>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $s['desc'] ?></p>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     CLIENTES (logos)
════════════════════════════════════════════ -->
<section class="py-16 bg-cycloid-bg border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-sm font-semibold uppercase tracking-widest text-gray-400 mb-10">
            Empresas que confían en nosotros
        </p>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12">
            <a href="<?= base_url('clientes') ?>"
               class="grayscale hover:grayscale-0 opacity-60 hover:opacity-100 transition-all duration-300">
                <img src="<?= base_url('assets/img/clients/meltec.png') ?>"
                     alt="Meltec" class="h-10 w-auto object-contain" loading="lazy">
            </a>
            <a href="<?= base_url('clientes') ?>"
               class="grayscale hover:grayscale-0 opacity-60 hover:opacity-100 transition-all duration-300">
                <img src="<?= base_url('assets/img/clients/polux.jpg') ?>"
                     alt="Polux" class="h-10 w-auto object-contain" loading="lazy">
            </a>
            <a href="<?= base_url('clientes') ?>"
               class="grayscale hover:grayscale-0 opacity-60 hover:opacity-100 transition-all duration-300">
                <img src="<?= base_url('assets/img/clients/client1.png') ?>"
                     alt="Cliente" class="h-10 w-auto object-contain" loading="lazy">
            </a>
            <a href="<?= base_url('clientes') ?>"
               class="grayscale hover:grayscale-0 opacity-60 hover:opacity-100 transition-all duration-300">
                <img src="<?= base_url('assets/img/clients/client2.png') ?>"
                     alt="Cliente" class="h-10 w-auto object-contain" loading="lazy">
            </a>
            <a href="<?= base_url('clientes') ?>"
               class="grayscale hover:grayscale-0 opacity-60 hover:opacity-100 transition-all duration-300">
                <img src="<?= base_url('assets/img/clients/client3.png') ?>"
                     alt="Cliente" class="h-10 w-auto object-contain" loading="lazy">
            </a>
            <a href="<?= base_url('clientes') ?>"
               class="grayscale hover:grayscale-0 opacity-60 hover:opacity-100 transition-all duration-300">
                <img src="<?= base_url('assets/img/clients/client4.png') ?>"
                     alt="Cliente" class="h-10 w-auto object-contain" loading="lazy">
            </a>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     POR QUÉ CYCLOID
════════════════════════════════════════════ -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div>
                <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-3">¿Por qué elegirnos?</p>
                <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy mb-6">
                    Expertos en SST<br>con resultados reales
                </h2>
                <p class="text-gray-500 leading-relaxed mb-8">
                    En Cycloid Talent combinamos experiencia técnica con un enfoque humano.
                    No solo cumplimos la normativa — ayudamos a construir culturas de seguridad
                    que protegen a las personas y a las empresas.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <?php
                    $stats = [
                        ['num' => '+50',  'label' => 'Empresas atendidas'],
                        ['num' => '+500', 'label' => 'Trabajadores capacitados'],
                        ['num' => '100%', 'label' => 'Cumplimiento normativo'],
                        ['num' => '+5',   'label' => 'Años de experiencia'],
                    ];
                    foreach ($stats as $s): ?>
                    <div>
                        <p class="text-3xl font-extrabold text-cycloid-blue"><?= $s['num'] ?></p>
                        <p class="text-sm text-gray-500 mt-1"><?= $s['label'] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <img src="<?= base_url('assets/img/Portafolio RPS - ACTUALIZACIÓN 2026/1.png') ?>"
                     alt="Cycloid Talent en acción"
                     class="rounded-2xl object-cover w-full h-48 shadow-md" loading="lazy">
                <img src="<?= base_url('assets/img/Portafolio RPS - ACTUALIZACIÓN 2026/2.png') ?>"
                     alt="Capacitación SST"
                     class="rounded-2xl object-cover w-full h-48 shadow-md mt-6" loading="lazy">
                <img src="<?= base_url('assets/img/Portafolio RPS - ACTUALIZACIÓN 2026/5.png') ?>"
                     alt="Brigada de emergencia"
                     class="rounded-2xl object-cover w-full h-48 shadow-md" loading="lazy">
                <img src="<?= base_url('assets/img/Portafolio RPS - ACTUALIZACIÓN 2026/6.png') ?>"
                     alt="Consultoría SST"
                     class="rounded-2xl object-cover w-full h-48 shadow-md mt-6" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     BLOG RECIENTE
════════════════════════════════════════════ -->
<section class="py-20 bg-cycloid-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-end justify-between mb-12">
            <div>
                <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">Conocimiento</p>
                <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy">Últimos artículos</h2>
            </div>
            <a href="<?= base_url('blog') ?>"
               class="hidden sm:inline-flex text-cycloid-blue font-semibold text-sm hover:underline">
                Ver todos →
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php
            $posts = [
                [
                    'slug'     => 'evaluacion-rps-2026',
                    'titulo'   => 'Nueva evaluación de Riesgo Psicosocial 2026',
                    'fecha'    => 'Enero 2026',
                    'extracto' => 'Conoce el portafolio actualizado de evaluación RPS 2026 con los nuevos lineamientos del Ministerio del Trabajo.',
                ],
                [
                    'slug'     => 'sg-sst-que-es',
                    'titulo'   => '¿Qué es el SG-SST y por qué es obligatorio?',
                    'fecha'    => 'Mayo 2023',
                    'extracto' => 'El SG-SST es obligatorio para todas las empresas en Colombia según el Decreto 1072 de 2015. Te explicamos qué implica.',
                ],
                [
                    'slug'     => 'brigada-emergencia-importancia',
                    'titulo'   => 'La importancia de una Brigada de Emergencia',
                    'fecha'    => 'Sep 2023',
                    'extracto' => 'Una brigada bien entrenada puede salvar vidas. Aprende cómo conformar la tuya según la normativa colombiana.',
                ],
            ];
            foreach ($posts as $p): ?>
            <a href="<?= base_url('blog/' . $p['slug']) ?>"
               class="group bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-lg transition-all duration-200">
                <div class="bg-cycloid-navy/5 h-3 group-hover:bg-cycloid-blue transition-colors"></div>
                <div class="p-6">
                    <p class="text-xs text-gray-400 mb-3"><?= $p['fecha'] ?></p>
                    <h3 class="font-bold text-cycloid-navy mb-3 group-hover:text-cycloid-blue transition-colors leading-snug">
                        <?= $p['titulo'] ?>
                    </h3>
                    <p class="text-sm text-gray-500 leading-relaxed"><?= $p['extracto'] ?></p>
                    <p class="mt-4 text-cycloid-blue text-sm font-semibold">Leer artículo →</p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-8 sm:hidden">
            <a href="<?= base_url('blog') ?>" class="text-cycloid-blue font-semibold text-sm">Ver todos los artículos →</a>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     CTA FINAL
════════════════════════════════════════════ -->
<section class="bg-cycloid-blue py-16">
    <div class="max-w-3xl mx-auto px-4 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">¿Listo para cumplir con la normativa SST?</h2>
        <p class="text-blue-100 mb-8 text-lg">
            Agenda una asesoría gratuita y te decimos exactamente qué necesita tu empresa.
        </p>
        <a href="<?= base_url('contacto') ?>"
           class="bg-white text-cycloid-blue px-10 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition-colors inline-block">
            Contactar ahora
        </a>
    </div>
</section>

<?= $this->endSection() ?>
