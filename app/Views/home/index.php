<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Hero -->
<section class="bg-cycloid-navy text-white py-24 px-4">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
            Seguridad y Salud<br>
            <span class="text-cycloid-cyan">que protege tu empresa</span>
        </h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto mb-8">
            Consultoría SST, Riesgo Psicosocial y Seguridad Laboral para empresas colombianas.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= base_url('contacto') ?>"
               class="bg-cycloid-blue text-white px-8 py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors">
                Solicitar asesoría
            </a>
            <a href="<?= base_url('servicios/consultoria-sst') ?>"
               class="border border-white/30 text-white px-8 py-3 rounded-xl font-semibold hover:bg-white/10 transition-colors">
                Ver servicios
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
