<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-14">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <a href="<?= base_url('blog') ?>" class="hover:text-white">Blog</a>
            <span class="mx-2">›</span>
            <span class="text-white">RPS 2026</span>
        </nav>
        <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-3">Riesgo Psicosocial</p>
        <h1 class="text-3xl md:text-4xl font-extrabold leading-tight">Nueva evaluación de Riesgo Psicosocial 2026</h1>
        <p class="mt-3 text-gray-400 text-sm">2 de enero de 2026 · 6 min de lectura</p>
    </div>
</section>

<article class="py-12 sm:py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="rounded-2xl overflow-hidden mb-6 sm:mb-10 aspect-video bg-gray-100">
            <img src="<?= base_url('assets/img/blog/rps-2026.png') ?>"
                 alt="Evaluación RPS 2026" class="w-full h-full object-cover">
        </div>

        <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed space-y-6">

            <p>El año 2026 trae consigo un mayor énfasis del <strong class="text-cycloid-navy">Ministerio del Trabajo de Colombia</strong> en la vigilancia del cumplimiento de la Resolución 2646 de 2008. Las empresas que aún no han realizado su evaluación de Riesgo Psicosocial (RPS) enfrentan un riesgo real de sanción durante visitas de inspección.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">¿Qué cambió para 2026?</h2>
            <p>Si bien la Batería de Instrumentos del MinTrabajo sigue siendo el instrumento oficial, en 2026 el Ministerio ha reforzado los lineamientos sobre:</p>
            <ul class="list-disc pl-6 space-y-2">
                <li>La obligatoriedad de repetir la evaluación <strong class="text-cycloid-navy">cada dos años</strong> o cuando haya cambios significativos en la organización.</li>
                <li>La participación de <strong class="text-cycloid-navy">psicólogos con licencia en SST</strong> durante todo el proceso (no solo en el análisis).</li>
                <li>La inclusión de <strong class="text-cycloid-navy">trabajadores en modalidad de teletrabajo y trabajo en casa</strong> como población objetivo.</li>
                <li>Mayores exigencias en los <strong class="text-cycloid-navy">planes de intervención</strong> y evidencia de su implementación.</li>
            </ul>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Galería del portafolio RPS 2026</h2>
            <div class="grid grid-cols-2 gap-3 not-prose">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                <div class="rounded-xl overflow-hidden aspect-square bg-gray-100">
                    <img src="<?= base_url('assets/img/services/rps-2026/' . $i . '.jpg') ?>"
                         alt="RPS 2026" class="w-full h-full object-cover">
                </div>
                <?php endfor; ?>
            </div>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Nuestro proceso actualizado 2026</h2>
            <div class="space-y-4 not-prose">
                <?php
                $pasos = [
                    ['01', 'Reunión de apertura', 'Presentación del proceso a la alta dirección y diseño del cronograma de aplicación.'],
                    ['02', 'Sensibilización a trabajadores', 'Talleres previos para explicar el objetivo de la evaluación y garantizar respuestas sinceras.'],
                    ['03', 'Aplicación de la Batería', 'Cuestionarios del MinTrabajo diferenciados por cargo. Aplicación presencial o virtual certificada.'],
                    ['04', 'Análisis estadístico', 'Procesamiento con software validado. Identificación de niveles de riesgo por área y cargo.'],
                    ['05', 'Informe ejecutivo y técnico', 'Dos versiones: gerencial (resumen) y técnica (detalle completo por ítem y dominio).'],
                    ['06', 'Plan de intervención', 'Programa de intervenciones priorizadas por nivel de riesgo, con cronograma y responsables.'],
                ];
                foreach ($pasos as $p): ?>
                <div class="flex items-start gap-4 bg-cycloid-bg rounded-xl p-4 border border-gray-100">
                    <span class="text-xl font-extrabold text-cycloid-blue/20 leading-none shrink-0"><?= $p[0] ?></span>
                    <div>
                        <h4 class="font-semibold text-cycloid-navy text-sm"><?= $p[1] ?></h4>
                        <p class="text-xs text-gray-500 mt-0.5"><?= $p[2] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Entregables del servicio</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li>Informe ejecutivo y técnico en formato PDF</li>
                <li>Base de datos anonimizada con resultados individuales</li>
                <li>Plan de intervención priorizado a 12 meses</li>
                <li>Presentación a la gerencia y/o COPASST</li>
                <li>Certificado de aplicación firmado por psicólogo con licencia SST</li>
                <li>Acompañamiento en la primera intervención incluida</li>
            </ul>

            <div class="bg-cycloid-blue/5 border border-cycloid-blue/20 rounded-2xl p-6 mt-8 not-prose">
                <p class="font-semibold text-cycloid-navy mb-2">Portafolio RPS 2026 disponible</p>
                <p class="text-sm text-gray-500 mb-4">Solicita nuestro portafolio actualizado con metodología, cronograma y propuesta de valor para tu empresa.</p>
                <a href="<?= base_url('contacto') ?>"
                   class="inline-block bg-cycloid-blue text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-blue-700 transition-colors">
                    Solicitar portafolio RPS 2026 →
                </a>
            </div>
        </div>

        <div class="mt-16 pt-10 border-t border-gray-100">
            <h3 class="text-lg font-bold text-cycloid-navy mb-5">Artículos relacionados</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <a href="<?= base_url('blog/riesgo-psicosocial-que-es') ?>" class="block bg-cycloid-bg rounded-xl p-4 border border-gray-100 hover:border-cycloid-blue transition-colors">
                    <p class="text-sm font-semibold text-cycloid-navy">¿Qué es el Riesgo Psicosocial Laboral?</p>
                    <p class="text-xs text-cycloid-blue mt-1">Leer artículo →</p>
                </a>
                <a href="<?= base_url('blog/sg-sst-que-es') ?>" class="block bg-cycloid-bg rounded-xl p-4 border border-gray-100 hover:border-cycloid-blue transition-colors">
                    <p class="text-sm font-semibold text-cycloid-navy">¿Qué es el SG-SST y por qué es obligatorio?</p>
                    <p class="text-xs text-cycloid-blue mt-1">Leer artículo →</p>
                </a>
            </div>
        </div>
    </div>
</article>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
