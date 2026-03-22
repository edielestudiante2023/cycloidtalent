<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <span class="text-white">Riesgo Psicosocial</span>
        </nav>
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Servicios</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">Evaluación de Riesgo Psicosocial</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Identificamos, evaluamos y controlamos los factores de riesgo psicosocial laboral con la Batería de Instrumentos del Ministerio del Trabajo (Resolución 2646 de 2008).
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-cycloid-navy mb-5">¿Qué evaluamos?</h2>
                <p class="text-gray-500 leading-relaxed mb-8">
                    El riesgo psicosocial afecta la salud mental, emocional y física de los trabajadores. Su gestión inadecuada genera ausentismo, accidentalidad y baja productividad. La Resolución 2646 obliga a todas las empresas a identificarlo y controlarlo.
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

<!-- Galería de imágenes RPS -->
<section class="py-16 bg-cycloid-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-cycloid-navy mb-8 text-center">Nuestro trabajo en campo</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <?php for ($i = 1; $i <= 8; $i++): ?>
            <div class="rounded-2xl overflow-hidden aspect-square bg-gray-100">
                <img src="<?= base_url('assets/img/services/rps-2026/' . $i . '.jpg') ?>"
                     alt="Evaluación RPS" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
