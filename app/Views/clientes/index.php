<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Hero mini -->
<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Quiénes confían en nosotros</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">Nuestros clientes</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Empresas de diferentes sectores que han confiado en Cycloid Talent para gestionar su Seguridad y Salud en el Trabajo.
        </p>
    </div>
</section>

<!-- Grid de logos -->
<section class="py-14 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-cycloid-blue text-sm font-semibold uppercase tracking-widest mb-2">Más de 50 empresas atendidas</p>
            <h2 class="text-3xl md:text-4xl font-bold text-cycloid-navy">Empresas que nos eligen</h2>
            <p class="mt-4 text-gray-500 max-w-xl mx-auto">
                Trabajamos con empresas de manufactura, servicios, propiedad horizontal y más sectores en Colombia.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 items-center">
            <?php
            $clientes = [
                ['logo' => 'meltec.png',  'nombre' => 'Meltec'],
                ['logo' => 'polux.jpg',   'nombre' => 'Polux'],
                ['logo' => 'client1.png', 'nombre' => 'Cliente'],
                ['logo' => 'client2.png', 'nombre' => 'Cliente'],
                ['logo' => 'client3.png', 'nombre' => 'Cliente'],
                ['logo' => 'client4.png', 'nombre' => 'Cliente'],
            ];
            foreach ($clientes as $c): ?>
            <div class="flex items-center justify-center p-6 bg-cycloid-bg rounded-2xl border border-gray-100 grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-300 min-h-[100px]">
                <img src="<?= base_url('assets/img/clients/' . $c['logo']) ?>"
                     alt="<?= $c['nombre'] ?>"
                     class="max-h-14 w-auto object-contain" loading="lazy">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Sectores atendidos -->
<section class="py-16 bg-cycloid-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-cycloid-navy">Sectores que atendemos</h2>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            <?php
            $sectores = ['Manufactura', 'Servicios', 'Propiedad Horizontal', 'Construcción', 'Comercio', 'Salud', 'Logística', 'Tecnología'];
            foreach ($sectores as $s): ?>
            <div class="bg-white rounded-xl px-4 py-3 text-center text-sm font-medium text-cycloid-navy border border-gray-100">
                <?= $s ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->include('partials/contact_cta') ?>

<?= $this->endSection() ?>
