<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-14">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <a href="<?= base_url('blog') ?>" class="hover:text-white">Blog</a>
            <span class="mx-2">›</span>
            <span class="text-white">SG-SST</span>
        </nav>
        <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-3">Normativa SST</p>
        <h1 class="text-3xl md:text-4xl font-extrabold leading-tight">¿Qué es el SG-SST y por qué es obligatorio?</h1>
        <p class="mt-3 text-gray-400 text-sm">13 de mayo de 2023 · 7 min de lectura</p>
    </div>
</section>

<article class="py-12 sm:py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="rounded-2xl overflow-hidden mb-6 sm:mb-10 aspect-video bg-gray-100">
            <img src="<?= base_url('assets/img/blog/sg-sst.jpg') ?>"
                 alt="Sistema de Gestión de Seguridad y Salud en el Trabajo" class="w-full h-full object-cover">
        </div>

        <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed space-y-6">

            <p>El <strong class="text-cycloid-navy">Sistema de Gestión de Seguridad y Salud en el Trabajo (SG-SST)</strong> es un proceso lógico y por etapas, basado en la mejora continua, que incluye la política, la organización, la planificación, la aplicación, la evaluación, la auditoría y las acciones de mejora con el objetivo de anticipar, reconocer, evaluar y controlar los riesgos que puedan afectar la seguridad y la salud en los espacios laborales.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Base legal obligatoria</h2>
            <p>En Colombia, el SG-SST es obligatorio para <strong class="text-cycloid-navy">todas las empresas</strong> sin importar su tamaño, sector económico o tipo de contratación. Las normas que lo regulan son:</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 not-prose">
                <?php
                $normas = [
                    ['Decreto 1072 de 2015', 'Único Reglamentario del Sector Trabajo. Compila todas las normas laborales incluyendo el SG-SST.'],
                    ['Resolución 0312 de 2019', 'Define los estándares mínimos del SG-SST según el tamaño de la empresa (10, 50, más de 50 trabajadores).'],
                    ['Ley 1562 de 2012', 'Modifica el Sistema General de Riesgos Laborales y establece sanciones de hasta 500 SMMLV.'],
                    ['Decreto 171 de 2016', 'Determinó los plazos de implementación del SG-SST por fases.'],
                ];
                foreach ($normas as $n): ?>
                <div class="bg-cycloid-bg rounded-xl p-4 border border-gray-100">
                    <span class="text-xs font-bold text-cycloid-blue bg-cycloid-blue/10 px-2 py-1 rounded-lg"><?= $n[0] ?></span>
                    <p class="text-xs text-gray-500 mt-2"><?= $n[1] ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Fases del SG-SST</h2>
            <p>El SG-SST se implementa en un ciclo PHVA (Planear, Hacer, Verificar, Actuar) de mejora continua:</p>
            <ol class="list-decimal pl-6 space-y-3">
                <li><strong class="text-cycloid-navy">Planear:</strong> Diagnóstico inicial, política SST, objetivos, identificación de peligros y valoración de riesgos (IPVR), plan de trabajo anual.</li>
                <li><strong class="text-cycloid-navy">Hacer:</strong> Implementación del plan, capacitaciones, conformación de COPASST o Vigía, gestión de proveedores, programas de prevención.</li>
                <li><strong class="text-cycloid-navy">Verificar:</strong> Indicadores de gestión, auditorías internas, investigación de accidentes, seguimiento a objetivos.</li>
                <li><strong class="text-cycloid-navy">Actuar:</strong> Acciones correctivas y preventivas, revisión por la alta dirección, mejora continua del sistema.</li>
            </ol>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">¿Qué exige la Resolución 0312 según el tamaño?</h2>
            <div class="overflow-x-auto not-prose">
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-cycloid-navy text-white">
                            <th class="px-4 py-3 text-left rounded-tl-xl">Tamaño empresa</th>
                            <th class="px-4 py-3 text-left">Estándares</th>
                            <th class="px-4 py-3 text-left rounded-tr-xl">Responsable</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-100 bg-cycloid-bg">
                            <td class="px-4 py-3 font-medium text-cycloid-navy">10 o menos trabajadores</td>
                            <td class="px-4 py-3 text-gray-600">7 estándares mínimos</td>
                            <td class="px-4 py-3 text-gray-600">Responsable designado o externo</td>
                        </tr>
                        <tr class="border-b border-gray-100 bg-white">
                            <td class="px-4 py-3 font-medium text-cycloid-navy">11 a 50 trabajadores</td>
                            <td class="px-4 py-3 text-gray-600">21 estándares</td>
                            <td class="px-4 py-3 text-gray-600">Técnico o Tecnólogo SST</td>
                        </tr>
                        <tr class="bg-cycloid-bg">
                            <td class="px-4 py-3 font-medium text-cycloid-navy">Más de 50 trabajadores</td>
                            <td class="px-4 py-3 text-gray-600">60 estándares</td>
                            <td class="px-4 py-3 text-gray-600">Profesional SST con licencia</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Sanciones por incumplimiento</h2>
            <p>El Ministerio del Trabajo puede imponer multas de <strong class="text-cycloid-navy">hasta 500 Salarios Mínimos Mensuales Legales Vigentes (SMMLV)</strong> por incumplimiento. En casos graves que generen la muerte del trabajador, puede llegar a la clausura del establecimiento.</p>

            <div class="bg-cycloid-blue/5 border border-cycloid-blue/20 rounded-2xl p-6 mt-8 not-prose">
                <p class="font-semibold text-cycloid-navy mb-2">¿Tu empresa aún no tiene el SG-SST implementado?</p>
                <p class="text-sm text-gray-500 mb-4">En Cycloid Talent lo implementamos en 30 días hábiles, adaptado a tu sector y tamaño de empresa.</p>
                <a href="<?= base_url('servicios/consultoria-sst') ?>"
                   class="inline-block bg-cycloid-blue text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-blue-700 transition-colors">
                    Ver consultoría SG-SST →
                </a>
            </div>
        </div>

        <div class="mt-16 pt-10 border-t border-gray-100">
            <h3 class="text-lg font-bold text-cycloid-navy mb-5">Artículos relacionados</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <a href="<?= base_url('blog/vigia-sst-obligaciones') ?>" class="block bg-cycloid-bg rounded-xl p-4 border border-gray-100 hover:border-cycloid-blue transition-colors">
                    <p class="text-sm font-semibold text-cycloid-navy">¿Qué hace el Vigía SST en una empresa?</p>
                    <p class="text-xs text-cycloid-blue mt-1">Leer artículo →</p>
                </a>
                <a href="<?= base_url('blog/auditoria-proveedores-sst') ?>" class="block bg-cycloid-bg rounded-xl p-4 border border-gray-100 hover:border-cycloid-blue transition-colors">
                    <p class="text-sm font-semibold text-cycloid-navy">Por qué auditar el SST de tus proveedores</p>
                    <p class="text-xs text-cycloid-blue mt-1">Leer artículo →</p>
                </a>
            </div>
        </div>
    </div>
</article>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
