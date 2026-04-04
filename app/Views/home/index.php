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
            Expertos en SG-SST<br>
            <span class="text-cycloid-cyan">y Riesgo Psicosocial</span>
        </h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto mb-10">
            Administramos tu Sistema de Gestión en Seguridad y Salud en el Trabajo
            y evaluamos el riesgo psicosocial de tu organización con la batería del Ministerio del Trabajo.
        </p>
        <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
            <a href="<?= base_url('servicios/consultoria-sst') ?>"
               class="bg-cycloid-blue text-white px-6 py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors">
                Consultoría SG-SST &rarr;
            </a>
            <a href="<?= base_url('servicios/propiedad-horizontal') ?>"
               class="bg-cycloid-blue text-white px-6 py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors">
                SST en Propiedad Horizontal &rarr;
            </a>
            <a href="<?= base_url('servicios/riesgo-psicosocial') ?>"
               style="background:#00C9DB;color:#fff;padding:0.75rem 1.5rem;border-radius:0.75rem;font-weight:600;text-decoration:none;display:inline-block;">
                Riesgo Psicosocial &rarr;
            </a>
        </div>
        <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;margin-top:1.5rem;">
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
     POR QUÉ CYCLOID
════════════════════════════════════════════ -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-10">
                <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-3">¿Por qué elegirnos?</p>
                <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy mb-6">
                    Expertos en SST<br>con resultados reales
                </h2>
                <p class="text-gray-500 leading-relaxed">
                    En Cycloid Talent combinamos experiencia técnica con un enfoque humano.
                    No solo cumplimos la normativa — ayudamos a construir culturas de seguridad
                    que protegen a las personas y a las empresas.
                </p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
                <?php
                $stats = [
                    ['num' => '+50',  'label' => 'Clientes atendidos'],
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
