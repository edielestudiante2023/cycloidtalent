<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div style="max-width:32rem;">
    <a href="<?= base_url('admin/galeria') ?>" class="text-blue-600 hover:underline text-sm" style="display:inline-block;margin-bottom:1rem;">&larr; Volver a galería</a>

    <div class="bg-white rounded-lg shadow" style="padding:1.5rem;">
        <h3 class="text-lg font-semibold" style="margin-bottom:1.5rem;">Subir foto de servicio</h3>

        <form action="<?= base_url('admin/galeria/guardar') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div style="margin-bottom:1rem;">
                <label class="block text-sm font-medium text-gray-700" style="margin-bottom:0.25rem;">Título *</label>
                <input type="text" name="titulo" required value="<?= old('titulo') ?>"
                    style="width:100%;padding:0.5rem 1rem;border:1px solid #d1d5db;border-radius:0.5rem;outline:none;">
            </div>

            <div style="margin-bottom:1rem;">
                <label class="block text-sm font-medium text-gray-700" style="margin-bottom:0.25rem;">Imagen * (máx. 5MB)</label>
                <input type="file" name="imagen" accept="image/*" required
                    style="width:100%;padding:0.5rem;border:1px solid #d1d5db;border-radius:0.5rem;">
            </div>

            <div style="margin-bottom:1rem;">
                <label class="block text-sm font-medium text-gray-700" style="margin-bottom:0.25rem;">Servicio</label>
                <select name="servicio"
                    style="width:100%;padding:0.5rem 1rem;border:1px solid #d1d5db;border-radius:0.5rem;background:#fff;">
                    <option value="riesgo-psicosocial">Riesgo Psicosocial</option>
                </select>
            </div>

            <div style="margin-bottom:1.5rem;">
                <label class="block text-sm font-medium text-gray-700" style="margin-bottom:0.25rem;">Orden (menor = primero)</label>
                <input type="number" name="orden" value="0" min="0"
                    style="width:100%;padding:0.5rem 1rem;border:1px solid #d1d5db;border-radius:0.5rem;outline:none;">
            </div>

            <button type="submit"
                style="background:#0345BF;color:#fff;padding:0.5rem 1.5rem;border-radius:0.5rem;font-weight:600;border:none;cursor:pointer;">
                Subir foto
            </button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
