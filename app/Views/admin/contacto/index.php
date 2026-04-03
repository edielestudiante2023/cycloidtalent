<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="bg-white rounded-lg shadow">
    <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
        <h3 class="text-lg font-semibold">Mensajes de contacto</h3>
        <span class="text-sm text-gray-500"><?= count($mensajes) ?> mensajes</span>
    </div>

    <?php if (empty($mensajes)): ?>
        <div class="p-6 text-center text-gray-500">No hay mensajes aún.</div>
    <?php else: ?>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Estado</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Asunto</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Fecha</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php foreach ($mensajes as $m): ?>
                        <tr class="<?= $m['leido'] ? 'bg-white' : 'bg-blue-50 font-semibold' ?> hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <?php if (! $m['leido']): ?>
                                    <span class="inline-block w-2 h-2 bg-blue-600 rounded-full"></span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4"><?= esc($m['nombre']) ?></td>
                            <td class="px-6 py-4"><?= esc($m['email']) ?></td>
                            <td class="px-6 py-4"><?= esc($m['asunto']) ?></td>
                            <td class="px-6 py-4 text-gray-500"><?= date('d/m/Y H:i', strtotime($m['created_at'])) ?></td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="<?= base_url('admin/contacto/') ?><?= $m['id'] ?>" class="text-blue-600 hover:underline">Ver</a>
                                <a href="<?= base_url('admin/contacto/') ?>toggle/<?= $m['id'] ?>" class="text-yellow-600 hover:underline">
                                    <?= $m['leido'] ? 'No leído' : 'Leído' ?>
                                </a>
                                <a href="<?= base_url('admin/contacto/') ?>eliminar/<?= $m['id'] ?>"
                                   onclick="return confirm('¿Eliminar este mensaje?')"
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
