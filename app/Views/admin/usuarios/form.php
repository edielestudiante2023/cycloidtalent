<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-xl">
    <a href="/admin/usuarios" class="text-blue-600 hover:underline text-sm mb-4 inline-block">&larr; Volver a usuarios</a>

    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold mb-6">
            <?= $usuario ? 'Editar usuario' : 'Crear usuario' ?>
        </h3>

        <form action="<?= $usuario ? '/admin/usuarios/actualizar/' . $usuario['id'] : '/admin/usuarios/guardar' ?>" method="POST">
            <?= csrf_field() ?>

            <div class="space-y-4">
                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                    <input type="text" name="nombre" id="nombre" required
                        value="<?= old('nombre', $usuario['nombre'] ?? '') ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" required
                        value="<?= old('email', $usuario['email'] ?? '') ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                        Contraseña <?= $usuario ? '(dejar vacío para no cambiar)' : '' ?>
                    </label>
                    <input type="password" name="password" id="password" <?= $usuario ? '' : 'required' ?>
                        minlength="8"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                </div>

                <div>
                    <label for="rol_id" class="block text-sm font-medium text-gray-700 mb-1">Rol</label>
                    <select name="rol_id" id="rol_id" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                        <?php foreach ($roles as $rol): ?>
                            <option value="<?= $rol['id'] ?>"
                                <?= old('rol_id', $usuario['rol_id'] ?? '') == $rol['id'] ? 'selected' : '' ?>>
                                <?= esc($rol['nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit"
                    class="bg-[#0345BF] text-white px-6 py-2 rounded-lg hover:bg-blue-800 transition font-semibold">
                    <?= $usuario ? 'Actualizar' : 'Crear usuario' ?>
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
