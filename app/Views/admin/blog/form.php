<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div style="max-width:48rem;">
    <a href="<?= base_url('admin/blog') ?>" class="text-blue-600 hover:underline text-sm" style="display:inline-block;margin-bottom:1rem;">&larr; Volver al blog</a>

    <div class="bg-white rounded-lg shadow" style="padding:1.5rem;">
        <h3 class="text-lg font-semibold" style="margin-bottom:1.5rem;">
            <?= $post ? 'Editar artículo' : 'Crear artículo' ?>
        </h3>

        <form action="<?= $post ? base_url('admin/blog/actualizar/' . $post['id']) : base_url('admin/blog/guardar') ?>"
              method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div style="margin-bottom:1rem;">
                <label class="block text-sm font-medium text-gray-700" style="margin-bottom:0.25rem;">Título *</label>
                <input type="text" name="titulo" required
                    value="<?= old('titulo', $post['titulo'] ?? '') ?>"
                    style="width:100%;padding:0.5rem 1rem;border:1px solid #d1d5db;border-radius:0.5rem;outline:none;">
            </div>

            <div style="margin-bottom:1rem;">
                <label class="block text-sm font-medium text-gray-700" style="margin-bottom:0.25rem;">Extracto (resumen corto)</label>
                <textarea name="extracto" rows="2"
                    style="width:100%;padding:0.5rem 1rem;border:1px solid #d1d5db;border-radius:0.5rem;outline:none;resize:vertical;"><?= old('extracto', $post['extracto'] ?? '') ?></textarea>
            </div>

            <div style="margin-bottom:1rem;">
                <label class="block text-sm font-medium text-gray-700" style="margin-bottom:0.25rem;">Contenido * (HTML permitido)</label>
                <textarea name="contenido" rows="15" required
                    style="width:100%;padding:0.5rem 1rem;border:1px solid #d1d5db;border-radius:0.5rem;outline:none;resize:vertical;font-family:monospace;font-size:0.875rem;"><?= old('contenido', $post['contenido'] ?? '') ?></textarea>
            </div>

            <div style="margin-bottom:1rem;">
                <label class="block text-sm font-medium text-gray-700" style="margin-bottom:0.25rem;">
                    Imagen de portada <?= $post ? '(dejar vacío para no cambiar)' : '' ?> — máx. 5MB
                </label>
                <?php if ($post && ! empty($post['imagen'])): ?>
                    <div style="margin-bottom:0.5rem;">
                        <img src="<?= base_url('assets/img/blog/' . $post['imagen']) ?>"
                             alt="Imagen actual" style="max-height:120px;border-radius:0.5rem;">
                    </div>
                <?php endif; ?>
                <input type="file" name="imagen" accept="image/*"
                    style="width:100%;padding:0.5rem;border:1px solid #d1d5db;border-radius:0.5rem;">
            </div>

            <div style="margin-bottom:1.5rem;">
                <label style="display:flex;align-items:center;gap:0.5rem;cursor:pointer;">
                    <input type="checkbox" name="publicado" value="1"
                        <?= old('publicado', $post['publicado'] ?? 0) ? 'checked' : '' ?>>
                    <span class="text-sm font-medium text-gray-700">Publicar inmediatamente</span>
                </label>
            </div>

            <button type="submit"
                style="background:#0345BF;color:#fff;padding:0.5rem 1.5rem;border-radius:0.5rem;font-weight:600;border:none;cursor:pointer;">
                <?= $post ? 'Actualizar' : 'Crear artículo' ?>
            </button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
