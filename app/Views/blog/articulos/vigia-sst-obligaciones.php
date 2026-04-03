<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-14">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <a href="<?= base_url('blog') ?>" class="hover:text-white">Blog</a>
            <span class="mx-2">›</span>
            <span class="text-white">Vigía SST</span>
        </nav>
        <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-3">Normativa SST</p>
        <h1 class="text-3xl md:text-4xl font-extrabold leading-tight">¿Qué hace el Vigía SST en una empresa?</h1>
        <p class="mt-3 text-gray-400 text-sm">10 de enero de 2024 · 5 min de lectura</p>
    </div>
</section>

<article class="py-12 sm:py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="rounded-2xl overflow-hidden mb-6 sm:mb-10 aspect-video bg-gray-100">
            <img src="<?= base_url('assets/img/blog/vigia.jpg') ?>"
                 alt="Vigía SST empresarial" class="w-full h-full object-cover">
        </div>

        <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed space-y-6">

            <p>Si tu empresa tiene <strong class="text-cycloid-navy">menos de 10 trabajadores</strong>, no debes conformar un COPASST (Comité Paritario de Seguridad y Salud en el Trabajo). En cambio, la normativa colombiana exige designar un <strong class="text-cycloid-navy">Vigía de Seguridad y Salud en el Trabajo</strong>. Pero, ¿qué hace exactamente esta figura y cómo se designa correctamente?</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Base legal</h2>
            <p>El <strong class="text-cycloid-navy">Artículo 2.2.4.6.8 del Decreto 1072 de 2015</strong> establece que en empresas con menos de 10 trabajadores, el empleador puede designar un Vigía Ocupacional en lugar del COPASST. Esta figura puede ser el mismo empleador o uno de los trabajadores.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Funciones del Vigía SST</h2>
            <div class="space-y-3 not-prose">
                <?php
                $funciones = [
                    ['01', 'Inspecciones de seguridad', 'Visitar periódicamente los lugares de trabajo para identificar condiciones inseguras, actos inseguros y riesgos que puedan generar accidentes.'],
                    ['02', 'Reporte a la alta dirección', 'Comunicar al empleador las condiciones que representen riesgo para la salud de los trabajadores y hacer seguimiento a su corrección.'],
                    ['03', 'Participación en investigaciones', 'Apoyar la investigación de accidentes de trabajo e incidentes para determinar las causas y evitar su repetición.'],
                    ['04', 'Apoyo a capacitaciones', 'Participar activamente en el diseño y ejecución de actividades de capacitación en SST para los trabajadores.'],
                    ['05', 'Seguimiento al plan SST', 'Verificar el cumplimiento del plan de trabajo anual SST y registrar los avances y pendientes.'],
                    ['06', 'Coordinación con la ARL', 'Articular con la Administradora de Riesgos Laborales la realización de actividades de prevención y promoción.'],
                ];
                foreach ($funciones as $f): ?>
                <div class="flex items-start gap-4 bg-cycloid-bg rounded-xl p-4 border border-gray-100">
                    <span class="text-xl font-extrabold text-cycloid-blue/20 leading-none shrink-0"><?= $f[0] ?></span>
                    <div>
                        <h4 class="font-semibold text-cycloid-navy text-sm"><?= $f[1] ?></h4>
                        <p class="text-xs text-gray-500 mt-0.5"><?= $f[2] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">¿Cómo se designa el Vigía SST?</h2>
            <ol class="list-decimal pl-6 space-y-2">
                <li>El empleador y los trabajadores acuerdan quién será el Vigía.</li>
                <li>Se elabora un <strong class="text-cycloid-navy">Acta de Designación</strong> firmada por el representante legal.</li>
                <li>El Vigía debe registrarse ante la empresa (no ante el Ministerio del Trabajo, a diferencia del COPASST).</li>
                <li>Su período es de <strong class="text-cycloid-navy">2 años</strong>, renovable.</li>
            </ol>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">¿El Vigía puede ser externo?</h2>
            <p>Sí. La normativa no exige que el Vigía sea un trabajador de planta. Una empresa externa especializada en SST puede asumir el rol de Vigía para tu empresa, lo que garantiza mayor objetividad y conocimiento técnico sin necesidad de contratar personal fijo.</p>

            <div class="bg-cycloid-blue/5 border border-cycloid-blue/20 rounded-2xl p-6 mt-8 not-prose">
                <p class="font-semibold text-cycloid-navy mb-2">¿Necesitas un Vigía SST externo para tu empresa?</p>
                <p class="text-sm text-gray-500 mb-4">Nuestro servicio activa el Vigía en 48 horas con toda la documentación requerida por la Resolución 0312.</p>
                <a href="<?= base_url('servicios/vigia-sst') ?>"
                   class="inline-block bg-cycloid-blue text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-blue-700 transition-colors">
                    Ver servicio Vigía SST →
                </a>
            </div>
        </div>

        <div class="mt-16 pt-10 border-t border-gray-100">
            <h3 class="text-lg font-bold text-cycloid-navy mb-5">Artículos relacionados</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <a href="<?= base_url('blog/sg-sst-que-es') ?>" class="block bg-cycloid-bg rounded-xl p-4 border border-gray-100 hover:border-cycloid-blue transition-colors">
                    <p class="text-sm font-semibold text-cycloid-navy">¿Qué es el SG-SST y por qué es obligatorio?</p>
                    <p class="text-xs text-cycloid-blue mt-1">Leer artículo →</p>
                </a>
                <a href="<?= base_url('blog/propiedad-horizontal-sst') ?>" class="block bg-cycloid-bg rounded-xl p-4 border border-gray-100 hover:border-cycloid-blue transition-colors">
                    <p class="text-sm font-semibold text-cycloid-navy">SST en Propiedad Horizontal: lo que debes saber</p>
                    <p class="text-xs text-cycloid-blue mt-1">Leer artículo →</p>
                </a>
            </div>
        </div>
    </div>
</article>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
