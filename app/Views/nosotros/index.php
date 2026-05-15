<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Hero mini -->
<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" style="display:flex;align-items:center;justify-content:space-between;gap:2rem;">
        <div style="flex:1;">
            <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Quiénes somos</p>
            <h1 class="text-3xl md:text-5xl font-extrabold">Nosotros</h1>
            <p class="mt-4 text-gray-300 max-w-2xl">
                Especialistas en Seguridad y Salud en el Trabajo y diagnóstico de riesgo psicosocial. Generamos tranquilidad y confianza mediante innovación tecnológica.
            </p>
        </div>
        <style>.nosotros-logo{display:none}@media(min-width:1024px){.nosotros-logo{display:block}}</style>
        <div class="nosotros-logo" style="flex-shrink:0;">
            <img src="<?= base_url('assets/img/logos/cycloid_sqe.jpg') ?>"
                 alt="Cycloid Talent - Sistemas que evolucionan"
                 style="max-height:180px;width:auto;border-radius:1rem;" loading="lazy">
        </div>
    </div>
</section>

<!-- Misión y Visión -->
<section class="py-14 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-10">
            <div class="bg-cycloid-bg rounded-2xl p-5 sm:p-8 border border-gray-100">
                <div class="w-12 h-12 bg-cycloid-blue/10 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-cycloid-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-cycloid-navy mb-3">Misión</h2>
                <p class="text-gray-500 leading-relaxed">
                    Cycloid Talent es una empresa especializada en Sistemas de Gestión en Seguridad y Salud en el Trabajo y diagnósticos de riesgo psicosocial. Generamos tranquilidad y confianza mediante nuestra innovación tecnológica.
                </p>
                <p class="text-cycloid-blue font-bold italic mt-3">"SISTEMAS QUE EVOLUCIONAN"</p>
            </div>
            <div class="bg-cycloid-bg rounded-2xl p-5 sm:p-8 border border-gray-100">
                <div class="w-12 h-12 bg-cycloid-cyan/10 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-cycloid-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-cycloid-navy mb-3">Visión</h2>
                <p class="text-gray-500 leading-relaxed">
                    Posicionar a Cycloid Talent como el principal proveedor de administración SG-SST en Soacha y alrededores para el 2027 y en Bogotá para el 2030, así como ser reconocidos como uno de los principales proveedores en Colombia para el diagnóstico de evaluación de factores de riesgo psicosocial en 2030.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Certificaciones y licencias -->
<section id="licencia-sst" class="py-14 sm:py-20 bg-cycloid-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-2">Respaldo institucional</p>
            <h2 class="text-3xl md:text-4xl font-bold">Certificaciones y licencias</h2>
        </div>

        <div style="max-width:56rem;margin:0 auto;background:rgba(255,255,255,0.04);border:1px solid rgba(0,201,219,0.3);border-radius:1.5rem;padding:2rem;">
            <div style="display:flex;flex-wrap:wrap;gap:1.5rem;align-items:flex-start;">
                <div style="flex-shrink:0;width:4.5rem;height:4.5rem;background:rgba(0,201,219,0.15);border-radius:1rem;display:flex;align-items:center;justify-content:center;">
                    <svg style="width:2.5rem;height:2.5rem;color:#00C9DB;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <div style="flex:1;min-width:18rem;">
                    <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-1">Licencia oficial</p>
                    <h3 class="text-xl md:text-2xl font-bold mb-2">Prestación de Servicios en Seguridad y Salud en el Trabajo</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Otorgada por la <strong class="text-white">Secretaría de Salud de Cundinamarca</strong> a CYCLOID TALENT S.A.S (NIT 901653912-2) mediante <strong class="text-white">Resolución No. 25-1231 del 06 de mayo de 2026</strong>, bajo la Ley 1562 de 2012 y la Resolución 908 de 2025 del Ministerio de Salud y Protección Social.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-8 pt-8" style="border-top:1px solid rgba(255,255,255,0.08);">
                <div>
                    <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-1">Vigencia</p>
                    <p class="text-white font-semibold">10 años</p>
                    <p class="text-gray-400 text-xs mt-0.5">Renovable</p>
                </div>
                <div>
                    <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-1">Cobertura</p>
                    <p class="text-white font-semibold">Territorio nacional</p>
                    <p class="text-gray-400 text-xs mt-0.5">Todo Colombia</p>
                </div>
                <div>
                    <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-1">Verificación</p>
                    <p class="text-white font-semibold text-sm break-all">verificacioneslsst@<wbr>cundinamarca.gov.co</p>
                </div>
            </div>

            <div class="mt-8 pt-8" style="border-top:1px solid rgba(255,255,255,0.08);">
                <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-3">Campos de acción autorizados</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:0.85rem 1rem;background:rgba(0,201,219,0.05);border:1px solid rgba(0,201,219,0.2);border-radius:0.75rem;">
                        <svg style="width:1.25rem;height:1.25rem;color:#00C9DB;margin-top:0.1rem;flex-shrink:0;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-sm text-gray-200">Diseño, administración y ejecución del Sistema de Gestión de la Seguridad y Salud en el Trabajo</span>
                    </div>
                    <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:0.85rem 1rem;background:rgba(0,201,219,0.05);border:1px solid rgba(0,201,219,0.2);border-radius:0.75rem;">
                        <svg style="width:1.25rem;height:1.25rem;color:#00C9DB;margin-top:0.1rem;flex-shrink:0;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-sm text-gray-200">Psicología en Seguridad y Salud en el Trabajo</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-400 text-xs mt-6 italic">
                * Conforme al Artículo Tercero de la Resolución, una copia de este acto administrativo se entrega a cada cliente al momento de la prestación del servicio.
            </p>
        </div>
    </div>
</section>

<!-- Principios -->
<section class="py-14 sm:py-20 bg-cycloid-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">Lo que nos guía</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy">Nuestros principios</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $principios = [
                ['icono' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'titulo' => 'Integridad', 'desc' => 'Actuamos con honestidad, ética y coherencia en todas nuestras relaciones y procesos, garantizando transparencia en nuestras acciones y decisiones.'],
                ['icono' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4', 'titulo' => 'Calidad', 'desc' => 'Nos comprometemos con la mejora continua de nuestros servicios y procesos, asegurando altos estándares de desempeño que generen valor y satisfacción.'],
                ['icono' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3', 'titulo' => 'Cumplimiento normativo', 'desc' => 'Respetamos la legislación vigente, las regulaciones aplicables y las políticas internas, actuando siempre dentro del marco legal y ético.'],
                ['icono' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'titulo' => 'Orientación al cliente', 'desc' => 'Escuchamos y comprendemos las necesidades de nuestros clientes para ofrecer soluciones efectivas, oportunas y de calidad.'],
            ];
            foreach ($principios as $p): ?>
            <div class="bg-white rounded-2xl p-6 border border-gray-100 text-center">
                <div class="w-12 h-12 bg-cycloid-blue/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-cycloid-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $p['icono'] ?>"/>
                    </svg>
                </div>
                <h3 class="font-bold text-cycloid-navy mb-2"><?= $p['titulo'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $p['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Valores -->
<section class="py-14 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">Nuestra esencia</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy">Valores empresariales</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $valores = [
                ['titulo' => 'Empatía', 'desc' => 'Comprendemos las necesidades, emociones y expectativas de nuestros clientes y colaboradores, construyendo relaciones humanas basadas en la confianza.'],
                ['titulo' => 'Vocación de servicio', 'desc' => 'Actuamos con disposición y compromiso hacia quienes confían en nosotros, entregando soluciones que aporten valor real y satisfacción.'],
                ['titulo' => 'Confianza', 'desc' => 'Fomentamos relaciones sólidas y duraderas basadas en la transparencia, la credibilidad y el cumplimiento de nuestras promesas.'],
                ['titulo' => 'Humanización', 'desc' => 'Priorizamos a las personas sobre los procesos, creando experiencias laborales más conscientes, empáticas y orientadas al bienestar integral.'],
            ];
            foreach ($valores as $v): ?>
            <div class="bg-cycloid-bg rounded-2xl p-6 border border-gray-100">
                <div class="w-10 h-10 bg-cycloid-cyan/10 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-cycloid-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-cycloid-navy mb-2"><?= $v['titulo'] ?></h3>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $v['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Políticas de calidad -->
<section class="py-14 sm:py-20 bg-cycloid-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">Nuestro compromiso</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy">Políticas de calidad</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <?php
            $politicas = [
                'Garantizamos la actualización normativa continua de nuestros clientes en materia de Seguridad y Salud en el Trabajo, asegurando el cumplimiento de las disposiciones legales vigentes.',
                'Fidelizamos a nuestros clientes mediante la excelencia en el servicio y la atención permanente a sus necesidades.',
                'Mantenemos y fortalecemos las competencias de nuestro personal, asegurando que su formación y experiencia respaldan la calidad de los servicios que ofrecemos.',
                'Cumplimos con los requisitos legales, reglamentarios y otros aplicables en todos los ámbitos de nuestra gestión, garantizando transparencia y responsabilidad.',
            ];
            foreach ($politicas as $i => $pol): ?>
            <div class="flex items-start gap-4 bg-white rounded-xl p-5 border border-gray-100">
                <span class="text-2xl font-extrabold text-cycloid-blue/20 leading-none shrink-0"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                <p class="text-sm text-gray-500 leading-relaxed"><?= $pol ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Equipo -->
<section class="py-14 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">Las personas detrás</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy">Nuestro equipo</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php
            $equipo = [
                ['foto' => 'edison.png',  'nombre' => 'Edison Cuervo',   'cargo' => 'Director Administrativo'],
                ['foto' => 'diana.png',   'nombre' => 'Diana Cuestas',   'cargo' => 'Directora Comercial'],
                ['foto' => 'eleyson.png', 'nombre' => 'Eleyson Segura',  'cargo' => 'Director RPS'],
                ['foto' => 'natalia.png', 'nombre' => 'Natalia Jiménez', 'cargo' => 'Directora SST'],
            ];
            foreach ($equipo as $m): ?>
            <div class="text-center">
                <div class="w-28 h-28 sm:w-36 sm:h-36 mx-auto mb-4 rounded-full overflow-hidden border-4 border-cycloid-bg shadow-md">
                    <img src="<?= base_url('assets/img/team/' . $m['foto']) ?>"
                         alt="<?= $m['nombre'] ?>"
                         class="w-full h-full object-cover" loading="lazy">
                </div>
                <h3 class="font-bold text-cycloid-navy text-lg"><?= $m['nombre'] ?></h3>
                <p class="text-cycloid-blue text-sm font-medium mt-1"><?= $m['cargo'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->include('partials/contact_cta') ?>

<?= $this->endSection() ?>
