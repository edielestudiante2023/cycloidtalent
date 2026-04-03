<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-14">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <a href="<?= base_url('blog') ?>" class="hover:text-white">Blog</a>
            <span class="mx-2">›</span>
            <span class="text-white">Brigada de Emergencia</span>
        </nav>
        <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-3">Prevención</p>
        <h1 class="text-3xl md:text-4xl font-extrabold leading-tight">La importancia de tener una Brigada de Emergencia</h1>
        <p class="mt-3 text-gray-400 text-sm">1 de septiembre de 2023 · 5 min de lectura</p>
    </div>
</section>

<article class="py-12 sm:py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="rounded-2xl overflow-hidden mb-6 sm:mb-10 aspect-video bg-gray-100">
            <img src="<?= base_url('assets/img/blog/brigada.jpg') ?>"
                 alt="Brigada de emergencia empresarial" class="w-full h-full object-cover">
        </div>

        <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed space-y-6">

            <p>Cada año en Colombia, miles de trabajadores resultan lesionados en emergencias que pudieron haberse atendido con mayor eficacia si la empresa hubiera contado con una <strong class="text-cycloid-navy">brigada de emergencia debidamente entrenada</strong>. Los primeros minutos tras un incidente son críticos — y en ausencia de respuesta organizada, las consecuencias se multiplican.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">¿Qué es una brigada de emergencia?</h2>
            <p>Una brigada de emergencia es un grupo de trabajadores voluntarios, debidamente entrenados, que están preparados para actuar de manera organizada ante situaciones de emergencia dentro de la empresa. Su objetivo es minimizar el impacto humano y material de un incidente antes de que lleguen los servicios de emergencia externos.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Obligación legal en Colombia</h2>
            <p>La conformación de la brigada de emergencia está respaldada por múltiples normas:</p>
            <ul class="list-disc pl-6 space-y-2">
                <li><strong class="text-cycloid-navy">Decreto 1072 de 2015</strong> — Obliga a las empresas a contar con planes de emergencia y personal entrenado.</li>
                <li><strong class="text-cycloid-navy">Resolución 0312 de 2019</strong> — Incluye la gestión de emergencias como estándar mínimo del SG-SST.</li>
                <li><strong class="text-cycloid-navy">NTC 1700 y 1478</strong> — Normas técnicas sobre extintores, alarmas y planes de evacuación.</li>
            </ul>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Roles dentro de la brigada</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 not-prose">
                <?php
                $roles = [
                    ['Jefe de brigada', 'Coordina la respuesta general ante la emergencia y la comunicación con organismos externos.'],
                    ['Brigadistas de primeros auxilios', 'Brindan atención básica en salud a lesionados mientras llega asistencia médica.'],
                    ['Brigadistas contraincendios', 'Utilizan extintores y mangueras para controlar conatos de incendio.'],
                    ['Brigadistas de evacuación', 'Guían la evacuación ordenada del personal y verifican el conteo en puntos de encuentro.'],
                ];
                foreach ($roles as $r): ?>
                <div class="bg-cycloid-bg rounded-xl p-4 border border-gray-100">
                    <h4 class="font-semibold text-cycloid-navy text-sm mb-1"><?= $r[0] ?></h4>
                    <p class="text-xs text-gray-500"><?= $r[1] ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Contenido del programa de formación</h2>
            <p>Un programa efectivo de brigadas cubre cuatro módulos fundamentales:</p>
            <ol class="list-decimal pl-6 space-y-3">
                <li><strong class="text-cycloid-navy">Primeros auxilios (16 horas):</strong> RCP, DEA, manejo de heridas, fracturas, quemaduras, traslado seguro de víctimas.</li>
                <li><strong class="text-cycloid-navy">Control de incendios (8 horas):</strong> Clasificación de fuegos, uso correcto de extintores, práctica con fuego real.</li>
                <li><strong class="text-cycloid-navy">Evacuación (4 horas):</strong> Rutas, señalización, manejo de personas con movilidad reducida, puntos de encuentro.</li>
                <li><strong class="text-cycloid-navy">Rescate básico (8 horas):</strong> Espacios confinados, alturas, atrapamientos. Uso de equipos de rescate.</li>
            </ol>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Frecuencia de actualización</h2>
            <p>La brigada debe renovar su formación <strong class="text-cycloid-navy">anualmente</strong>. Además, se recomienda realizar simulacros de emergencia al menos dos veces al año para mantener la capacidad de respuesta del equipo y detectar fallos en el plan de emergencias.</p>

            <div class="bg-cycloid-blue/5 border border-cycloid-blue/20 rounded-2xl p-6 mt-8 not-prose">
                <p class="font-semibold text-cycloid-navy mb-2">Formamos brigadas de emergencia en tu empresa</p>
                <p class="text-sm text-gray-500 mb-4">Nuestro programa incluye práctica con fuego real, certificación y seguimiento post-formación.</p>
                <a href="<?= base_url('servicios/brigada-emergencia') ?>"
                   class="inline-block bg-cycloid-blue text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-blue-700 transition-colors">
                    Ver servicio de Brigada →
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
