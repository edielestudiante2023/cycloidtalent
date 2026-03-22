<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-14">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <a href="<?= base_url('blog') ?>" class="hover:text-white">Blog</a>
            <span class="mx-2">›</span>
            <span class="text-white">Propiedad Horizontal</span>
        </nav>
        <p class="text-cycloid-cyan text-xs font-semibold uppercase tracking-widest mb-3">Sector Residencial</p>
        <h1 class="text-3xl md:text-4xl font-extrabold leading-tight">SST en Propiedad Horizontal: lo que debes saber</h1>
        <p class="mt-3 text-gray-400 text-sm">11 de junio de 2024 · 5 min de lectura</p>
    </div>
</section>

<article class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="rounded-2xl overflow-hidden mb-10 aspect-video bg-gray-100">
            <img src="<?= base_url('assets/img/blog/propiedad-horizontal.png') ?>"
                 alt="SST en propiedad horizontal" class="w-full h-full object-cover">
        </div>

        <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed space-y-6">

            <p>Muchos administradores de conjuntos residenciales, edificios de oficinas y centros comerciales desconocen que su propiedad horizontal <strong class="text-cycloid-navy">está obligada a implementar el SG-SST</strong>. Desde porteros hasta personal de mantenimiento y jardineros — todos son trabajadores cubiertos por la normativa de Seguridad y Salud en el Trabajo.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">¿Por qué aplica el SG-SST en propiedad horizontal?</h2>
            <p>La <strong class="text-cycloid-navy">Ley 675 de 2001</strong> (Ley de Propiedad Horizontal) y el <strong class="text-cycloid-navy">Decreto 1072 de 2015</strong> son claros: toda persona jurídica que tenga trabajadores dependientes debe implementar el SG-SST sin excepción. Los conjuntos residenciales son personas jurídicas con empleados, por lo tanto aplica.</p>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Cargos típicos en propiedad horizontal y sus riesgos</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 not-prose">
                <?php
                $cargos = [
                    ['Portero / Vigilante', 'Riesgo público, posturas prolongadas, trabajo nocturno, estrés'],
                    ['Personal de aseo', 'Riesgo químico (productos de limpieza), posturas forzadas, caídas'],
                    ['Jardinero', 'Exposición solar, herramientas cortantes, riesgo biológico'],
                    ['Técnico de mantenimiento', 'Riesgo eléctrico, alturas, espacios confinados, herramientas'],
                ];
                foreach ($cargos as $c): ?>
                <div class="bg-cycloid-bg rounded-xl p-4 border border-gray-100">
                    <h4 class="font-semibold text-cycloid-navy text-sm mb-1"><?= $c[0] ?></h4>
                    <p class="text-xs text-gray-500"><?= $c[1] ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">Obligaciones específicas del conjunto</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li>Implementar el SG-SST según los estándares mínimos de la Resolución 0312 de 2019.</li>
                <li>Afiliar a todos los trabajadores a ARL, EPS y fondos de pensiones.</li>
                <li>Realizar las capacitaciones obligatorias (inducción, EPP, emergencias).</li>
                <li>Conformar el COPASST o designar un Vigía SST según el número de trabajadores.</li>
                <li>Elaborar la Matriz de Identificación de Peligros y Valoración de Riesgos (IPVR).</li>
                <li>Gestionar el SG-SST de contratistas que operen en áreas comunes.</li>
            </ul>

            <h2 class="text-2xl font-bold text-cycloid-navy mt-10 mb-4">La plataforma Phorizontal</h2>
            <p>En Cycloid Talent desarrollamos <strong class="text-cycloid-navy">Phorizontal</strong>, una plataforma digital especializada en la gestión del SG-SST para conjuntos residenciales y edificios. Permite al administrador hacer seguimiento en tiempo real a los indicadores del sistema, subir documentos, gestionar capacitaciones y llevar el historial de inspecciones.</p>

            <div class="bg-cycloid-blue/5 border border-cycloid-blue/20 rounded-2xl p-6 mt-8 not-prose">
                <p class="font-semibold text-cycloid-navy mb-2">¿Tu conjunto tiene el SG-SST al día?</p>
                <p class="text-sm text-gray-500 mb-4">Gestionamos el SST de tu propiedad horizontal con plataforma digital y acompañamiento mensual.</p>
                <a href="<?= base_url('servicios/propiedad-horizontal') ?>"
                   class="inline-block bg-cycloid-blue text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-blue-700 transition-colors">
                    Ver servicio Propiedad Horizontal →
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
