<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-14">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <a href="<?= base_url('blog') ?>" class="hover:text-white">Blog</a>
            <span class="mx-2">›</span>
            <span class="text-white">Auditoría Proveedores</span>
        </nav>
        <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-3">Auditoría SST</p>
        <h1 class="text-3xl md:text-4xl font-extrabold leading-tight">Por qué auditar el SST de tus proveedores</h1>
        <p class="mt-3 text-gray-400 text-sm">13 de octubre de 2023 · 6 min de lectura</p>
    </div>
</section>

<article class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="rounded-2xl overflow-hidden mb-10 aspect-video bg-gray-100">
            <img src="<?= base_url('assets/img/blog/auditoria.png') ?>"
                 alt="Auditoría SST a proveedores" class="w-full h-full object-cover">
        </div>

        <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed space-y-6">

            <p>Cuando un accidente ocurre en las instalaciones de tu empresa, pero el trabajador lesionado es empleado de un contratista, ¿quién responde? En Colombia, la respuesta es clara: <strong class="text-cycloid-navy">la empresa contratante puede ser sancionada como responsable solidario</strong>.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">El principio de responsabilidad solidaria</h2>
            <p>El <strong class="text-cycloid-navy">Artículo 2.2.4.6.28 del Decreto 1072 de 2015</strong> establece que el empleador que contrate servicios de otra empresa debe verificar que esta cumpla con las obligaciones del SG-SST. Si el contratista incumple y ocurre un accidente, el contratante puede recibir sanciones del Ministerio del Trabajo.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Checklist de 28 ítems que evaluamos</h2>
            <p>Nuestra auditoría SST a proveedores evalúa 28 puntos distribuidos en 6 categorías:</p>

            <div class="space-y-4 not-prose">
                <?php
                $cats = [
                    ['Política y planificación', 6, 'Política firmada, objetivos, plan anual, presupuesto, responsable y KPIs'],
                    ['Identificación de peligros', 5, 'Matriz IPVR actualizada, valoración, medidas de intervención e inspecciones'],
                    ['Capacitación y entrenamiento', 5, 'Inducción, plan de capacitación, registros, EPP y simulacros'],
                    ['Afiliación y nómina', 4, 'ARL, EPS, pensión y clasificación de riesgo al día'],
                    ['Gestión de accidentes', 4, 'Reporte, investigación, cumplimiento de plazos y plan post-accidente'],
                    ['Documentación y mejora', 4, 'Documentos disponibles, auditoría interna, revisión gerencial y CARS'],
                ];
                foreach ($cats as $c): ?>
                <div class="flex items-start gap-4 bg-cycloid-bg rounded-xl p-4 border border-gray-100">
                    <span class="text-2xl font-extrabold text-cycloid-blue/20 leading-none"><?= $c[1] ?></span>
                    <div>
                        <h4 class="font-semibold text-cycloid-navy text-sm"><?= $c[0] ?></h4>
                        <p class="text-xs text-gray-500 mt-0.5"><?= $c[2] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">¿Qué entregamos al final?</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li>Informe individual por proveedor con calificación porcentual</li>
                <li>Clasificación del nivel de cumplimiento: Crítico / En proceso / Aceptable / Óptimo</li>
                <li>Plan de acción correctiva con responsables y plazos</li>
                <li>Evidencia documental para presentar ante auditorías del Ministerio</li>
                <li>Seguimiento a la implementación de las mejoras acordadas</li>
            </ul>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">¿Cada cuánto se debe auditar?</h2>
            <p>La frecuencia recomendada es <strong class="text-cycloid-navy">anual</strong> para proveedores críticos (aquellos que operan dentro de tus instalaciones o que manejan actividades de alto riesgo). Para proveedores de bajo riesgo, una evaluación cada dos años puede ser suficiente, complementada con una lista de verificación documental semestral.</p>

            <div class="bg-cycloid-blue/5 border border-cycloid-blue/20 rounded-2xl p-6 mt-8 not-prose">
                <p class="font-semibold text-cycloid-navy mb-2">Audita el SG-SST de tus proveedores este año</p>
                <p class="text-sm text-gray-500 mb-4">Protege tu empresa de sanciones y garantiza condiciones seguras en toda tu cadena de contratación.</p>
                <a href="<?= base_url('servicios/auditoria-proveedores') ?>"
                   class="inline-block bg-cycloid-blue text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-blue-700 transition-colors">
                    Ver servicio de auditoría →
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
                <a href="<?= base_url('blog/vigia-sst-obligaciones') ?>" class="block bg-cycloid-bg rounded-xl p-4 border border-gray-100 hover:border-cycloid-blue transition-colors">
                    <p class="text-sm font-semibold text-cycloid-navy">¿Qué hace el Vigía SST en una empresa?</p>
                    <p class="text-xs text-cycloid-blue mt-1">Leer artículo →</p>
                </a>
            </div>
        </div>
    </div>
</article>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
