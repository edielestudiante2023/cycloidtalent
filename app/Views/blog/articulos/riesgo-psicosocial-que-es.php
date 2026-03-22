<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-14">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <a href="<?= base_url('blog') ?>" class="hover:text-white">Blog</a>
            <span class="mx-2">›</span>
            <span class="text-white">Riesgo Psicosocial</span>
        </nav>
        <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-3">Riesgo Psicosocial</p>
        <h1 class="text-3xl md:text-4xl font-extrabold leading-tight">¿Qué es el Riesgo Psicosocial Laboral?</h1>
        <p class="mt-3 text-gray-400 text-sm">13 de enero de 2023 · 6 min de lectura</p>
    </div>
</section>

<article class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="rounded-2xl overflow-hidden mb-10 aspect-video bg-gray-100">
            <img src="<?= base_url('assets/img/blog/riesgo-psicosocial.png') ?>"
                 alt="Riesgo Psicosocial Laboral" class="w-full h-full object-cover">
        </div>

        <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed space-y-6">

            <p>El <strong class="text-cycloid-navy">riesgo psicosocial laboral</strong> hace referencia a aquellas condiciones presentes en el trabajo — relacionadas con la organización, el contenido de la tarea y la realización de la misma — que afectan el bienestar y la salud (física, psíquica y social) de los trabajadores, así como el desarrollo del trabajo.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Marco normativo en Colombia</h2>
            <p>La <strong class="text-cycloid-navy">Resolución 2646 de 2008</strong> del Ministerio de la Protección Social establece disposiciones y responsabilidades para la identificación, evaluación, prevención, intervención y monitoreo permanente de la exposición a factores de riesgo psicosocial en el trabajo. Esta norma obliga a todas las empresas colombianas a:</p>
            <ul class="list-disc pl-6 space-y-2">
                <li>Identificar los factores de riesgo psicosocial a los que se exponen sus trabajadores.</li>
                <li>Evaluar esos factores mediante instrumentos validados científica y técnicamente.</li>
                <li>Diseñar e implementar programas de intervención.</li>
                <li>Hacer seguimiento y monitoreo continuo.</li>
            </ul>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Factores intralaborales</h2>
            <p>Los factores intralaborales son aquellas características del trabajo y su organización que influyen en la salud del trabajador. Se agrupan en cuatro dominios:</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 not-prose">
                <?php
                $factores = [
                    ['Demandas del trabajo', 'Exigencias de carga mental, emocional, responsabilidad y jornada.'],
                    ['Control sobre el trabajo', 'Autonomía, claridad de rol, capacitación y oportunidades de desarrollo.'],
                    ['Liderazgo y relaciones sociales', 'Características del jefe, relaciones con compañeros, retroalimentación.'],
                    ['Recompensa', 'Reconocimiento, sentido de pertenencia, claridad de contrato y condiciones.'],
                ];
                foreach ($factores as $f): ?>
                <div class="bg-cycloid-bg rounded-xl p-4 border border-gray-100">
                    <h4 class="font-semibold text-cycloid-navy text-sm mb-1"><?= $f[0] ?></h4>
                    <p class="text-xs text-gray-500"><?= $f[1] ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Factores extralaborales</h2>
            <p>Adicionalmente, la normativa reconoce factores externos al trabajo que también impactan al trabajador: la situación económica del grupo familiar, las características de la vivienda, el acceso a servicios públicos, el tiempo libre, las relaciones familiares y el desplazamiento al trabajo.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">¿Cómo se evalúa?</h2>
            <p>El Ministerio del Trabajo validó en 2010 la <strong class="text-cycloid-navy">Batería de Instrumentos para la Evaluación de Factores de Riesgo Psicosocial</strong>. Esta batería incluye cuestionarios diferenciados para jefes y trabajadores sin personal a cargo, cuya aplicación debe realizarse bajo la dirección de un psicólogo con licencia en SST.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Consecuencias del riesgo psicosocial no gestionado</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li>Estrés laboral crónico y burnout</li>
                <li>Aumento del ausentismo y la rotación de personal</li>
                <li>Accidentes de trabajo por fatiga mental</li>
                <li>Bajo rendimiento y pérdida de productividad</li>
                <li>Multas del Ministerio del Trabajo por incumplimiento de la Resolución 2646</li>
            </ul>

            <div class="bg-cycloid-blue/5 border border-cycloid-blue/20 rounded-2xl p-6 mt-8 not-prose">
                <p class="font-semibold text-cycloid-navy mb-2">¿Tu empresa ya realizó la evaluación de Riesgo Psicosocial?</p>
                <p class="text-sm text-gray-500 mb-4">En Cycloid Talent aplicamos la Batería del Ministerio del Trabajo con psicólogos certificados. Descarga nuestro portafolio RPS 2026.</p>
                <a href="<?= base_url('servicios/riesgo-psicosocial') ?>"
                   class="inline-block bg-cycloid-blue text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-blue-700 transition-colors">
                    Ver servicio RPS →
                </a>
            </div>
        </div>

        <!-- Artículos relacionados -->
        <div class="mt-16 pt-10 border-t border-gray-100">
            <h3 class="text-lg font-bold text-cycloid-navy mb-5">Artículos relacionados</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <a href="<?= base_url('blog/evaluacion-rps-2026') ?>" class="block bg-cycloid-bg rounded-xl p-4 border border-gray-100 hover:border-cycloid-blue transition-colors">
                    <p class="text-sm font-semibold text-cycloid-navy">Nueva evaluación de Riesgo Psicosocial 2026</p>
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
