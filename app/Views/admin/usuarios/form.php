<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-xl">
    <a href="<?= base_url('admin/usuarios') ?>" class="text-blue-600 hover:underline text-sm mb-4 inline-block">&larr; Volver a usuarios</a>

    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold mb-6">
            <?= $usuario ? 'Editar usuario' : 'Crear usuario' ?>
        </h3>

        <form action="<?= $usuario ? base_url('admin/usuarios/actualizar/' . $usuario['id']) : base_url('admin/usuarios/guardar') ?>" method="POST">
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
                    <div class="relative">
                        <input type="password" name="password" id="password" <?= $usuario ? '' : 'required' ?>
                            minlength="8"
                            class="w-full px-4 py-2 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                        <button type="button" id="togglePassword"
                            aria-label="Mostrar u ocultar contraseña"
                            style="position:absolute;top:50%;right:0.5rem;transform:translateY(-50%);background:none;border:none;cursor:pointer;padding:0.25rem;display:flex;align-items:center;color:#6b7280;">
                            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="display:none;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                            </svg>
                        </button>
                    </div>
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
                    style="background:#0345BF;color:#fff;padding:0.5rem 1.5rem;border-radius:0.5rem;font-weight:600;border:none;cursor:pointer;">
                    <?= $usuario ? 'Actualizar' : 'Crear usuario' ?>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
(function () {
    var toggle = document.getElementById('togglePassword');
    var input = document.getElementById('password');
    var eyeOpen = document.getElementById('eyeOpen');
    var eyeClosed = document.getElementById('eyeClosed');
    if (!toggle || !input) return;
    toggle.addEventListener('click', function () {
        var isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';
        eyeOpen.style.display = isPassword ? 'none' : '';
        eyeClosed.style.display = isPassword ? '' : 'none';
    });
})();
</script>
<?= $this->endSection() ?>
