<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="bg-white rounded-lg shadow">
    <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
        <h3 class="text-lg font-semibold">Artículos del blog</h3>
        <a href="<?= base_url('admin/blog/crear') ?>"
           style="background:#0345BF;color:#fff;padding:0.5rem 1rem;border-radius:0.25rem;font-size:0.875rem;text-decoration:none;">
            + Nuevo artículo
        </a>
    </div>

    <?php if (empty($posts)): ?>
        <div class="p-6 text-center text-gray-500">No hay artículos aún.</div>
    <?php else: ?>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Título</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Autor</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Estado</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Fecha</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php foreach ($posts as $p): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">
                                <?= esc($p['titulo']) ?>
                                <?php if ($p['imagen']): ?>
                                    <span class="text-xs text-gray-400 ml-1">[img]</span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 text-gray-500"><?= esc($p['autor_nombre'] ?? 'Sin autor') ?></td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded text-xs <?= $p['publicado'] ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' ?>">
                                    <?= $p['publicado'] ? 'Publicado' : 'Borrador' ?>
                                </span>
                            </td>
                            <td class="px-6 py-4 text-gray-500"><?= date('d/m/Y', strtotime($p['created_at'])) ?></td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="<?= base_url('admin/blog/editar/' . $p['id']) ?>" class="text-blue-600 hover:underline">Editar</a>
                                <a href="<?= base_url('admin/blog/toggle/' . $p['id']) ?>" class="text-yellow-600 hover:underline">
                                    <?= $p['publicado'] ? 'Despublicar' : 'Publicar' ?>
                                </a>
                                <a href="<?= base_url('admin/blog/eliminar/' . $p['id']) ?>"
                                   onclick="return confirm('¿Eliminar este artículo?')"
                                   class="text-red-600 hover:underline">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>
