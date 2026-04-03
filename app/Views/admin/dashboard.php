<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Mensajes no leídos -->
    <a href="<?= base_url('admin/contacto') ?>" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
        <div class="text-sm text-gray-500 font-medium">Mensajes no leídos</div>
        <div class="text-3xl font-bold text-[#0345BF] mt-2"><?= $mensajesNoLeidos ?></div>
        <div class="text-sm text-gray-400 mt-1">de <?= $totalMensajes ?> totales</div>
    </a>

    <!-- Total usuarios -->
    <a href="<?= base_url('admin/usuarios') ?>" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
        <div class="text-sm text-gray-500 font-medium">Usuarios registrados</div>
        <div class="text-3xl font-bold text-[#0345BF] mt-2"><?= $totalUsuarios ?></div>
    </a>

    <!-- Ir al sitio -->
    <a href="<?= base_url('/') ?>" target="_blank" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
        <div class="text-sm text-gray-500 font-medium">Sitio público</div>
        <div class="text-lg font-semibold text-[#0345BF] mt-2">Ver sitio &rarr;</div>
    </a>
</div>
<?= $this->endSection() ?>
