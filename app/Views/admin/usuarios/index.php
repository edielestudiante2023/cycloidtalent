<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="bg-white rounded-lg shadow">
    <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
        <h3 class="text-lg font-semibold">Usuarios</h3>
        <a href="<?= base_url('admin/usuarios/') ?>crear" style="background:#0345BF;color:#fff;padding:0.5rem 1rem;border-radius:0.25rem;font-size:0.875rem;">
            + Nuevo usuario
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Rol</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Estado</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Último login</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php foreach ($usuarios as $u): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium"><?= esc($u['nombre']) ?></td>
                        <td class="px-6 py-4"><?= esc($u['email']) ?></td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 rounded text-xs <?= $u['rol_nombre'] === 'superadmin' ? 'bg-purple-100 text-purple-800' : 'bg-gray-100 text-gray-800' ?>">
                                <?= esc($u['rol_nombre']) ?>
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 rounded text-xs <?= $u['activo'] ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' ?>">
                                <?= $u['activo'] ? 'Activo' : 'Inactivo' ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-500">
                            <?= $u['ultimo_login'] ? date('d/m/Y H:i', strtotime($u['ultimo_login'])) : 'Nunca' ?>
                        </td>
                        <td class="px-6 py-4 space-x-2">
                            <a href="<?= base_url('admin/usuarios/') ?>editar/<?= $u['id'] ?>" class="text-blue-600 hover:underline">Editar</a>
                            <a href="<?= base_url('admin/usuarios/') ?>toggle/<?= $u['id'] ?>" class="text-yellow-600 hover:underline">
                                <?= $u['activo'] ? 'Desactivar' : 'Activar' ?>
                            </a>
                            <a href="<?= base_url('admin/usuarios/') ?>eliminar/<?= $u['id'] ?>"
                               onclick="return confirm('¿Eliminar este usuario?')"
                               class="text-red-600 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
