<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Hero mini -->
<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Quiénes somos</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">Nosotros</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Un equipo apasionado por la seguridad y salud en el trabajo, comprometido con proteger a las personas y las organizaciones.
        </p>
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
                    Brindar soluciones integrales en Seguridad y Salud en el Trabajo que protejan la integridad de los trabajadores y garanticen el cumplimiento normativo de las empresas colombianas, a través de un servicio especializado, humano y efectivo.
                </p>
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
                    Ser reconocidos en 2028 como la consultora SST de referencia en la región, destacándonos por la calidad de nuestros servicios, la innovación en metodologías de evaluación psicosocial y la construcción de culturas organizacionales seguras y sostenibles.
                </p>
            </div>
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
                ['icono' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'titulo' => 'Integridad', 'desc' => 'Actuamos con honestidad y transparencia en cada proceso, generando confianza con nuestros clientes.'],
                ['icono' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'titulo' => 'Compromiso humano', 'desc' => 'Ponemos a las personas en el centro de cada decisión. La seguridad es un derecho, no un trámite.'],
                ['icono' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z', 'titulo' => 'Innovación', 'desc' => 'Aplicamos metodologías actualizadas y herramientas tecnológicas para ofrecer soluciones efectivas.'],
                ['icono' => 'M13 10V3L4 14h7v7l9-11h-7z', 'titulo' => 'Excelencia', 'desc' => 'Nos exigimos los más altos estándares de calidad en cada entregable, capacitación y asesoría.'],
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
