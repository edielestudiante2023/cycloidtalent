<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="bg-white rounded-lg shadow">
    <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
        <h3 class="text-lg font-semibold">Galería de servicios</h3>
        <a href="<?= base_url('admin/galeria/subir') ?>"
           style="background:#0345BF;color:#fff;padding:0.5rem 1rem;border-radius:0.25rem;font-size:0.875rem;text-decoration:none;">
            + Subir foto
        </a>
    </div>

    <?php if (empty($fotos)): ?>
        <div class="p-6 text-center text-gray-500">No hay fotos aún.</div>
    <?php else: ?>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:1rem;padding:1.5rem;">
            <?php foreach ($fotos as $f): ?>
                <div class="bg-gray-50 rounded-lg overflow-hidden border border-gray-200" style="<?= !$f['activo'] ? 'opacity:0.5;' : '' ?>">
                    <div style="aspect-ratio:4/3;overflow:hidden;">
                        <img src="<?= base_url('assets/img/servicios/' . $f['imagen']) ?>"
                             alt="<?= esc($f['titulo']) ?>"
                             style="width:100%;height:100%;object-fit:cover;">
                    </div>
                    <div style="padding:0.75rem;">
                        <p class="text-sm font-medium" style="margin-bottom:0.25rem;"><?= esc($f['titulo']) ?></p>
                        <p class="text-xs text-gray-400">Orden: <?= $f['orden'] ?> · <?= $f['activo'] ? 'Visible' : 'Oculta' ?></p>
                        <div style="display:flex;gap:0.5rem;margin-top:0.5rem;">
                            <a href="<?= base_url('admin/galeria/toggle/' . $f['id']) ?>"
                               class="text-yellow-600 hover:underline text-xs">
                                <?= $f['activo'] ? 'Ocultar' : 'Mostrar' ?>
                            </a>
                            <a href="<?= base_url('admin/galeria/eliminar/' . $f['id']) ?>"
                               onclick="return confirm('¿Eliminar esta foto?')"
                               class="text-red-600 hover:underline text-xs">Eliminar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>
