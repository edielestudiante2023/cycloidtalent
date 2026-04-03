<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-3xl">
    <a href="<?= base_url('admin/contacto') ?>" class="text-blue-600 hover:underline text-sm mb-4 inline-block">&larr; Volver a mensajes</a>

    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold"><?= esc($mensaje['asunto']) ?></h3>
            <p class="text-sm text-gray-500 mt-1">
                Recibido el <?= date('d/m/Y H:i', strtotime($mensaje['created_at'])) ?>
            </p>
        </div>

        <div class="p-6 space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <span class="text-xs text-gray-500 uppercase font-medium">Nombre</span>
                    <p class="mt-1"><?= esc($mensaje['nombre']) ?></p>
                </div>
                <div>
                    <span class="text-xs text-gray-500 uppercase font-medium">Email</span>
                    <p class="mt-1">
                        <a href="mailto:<?= esc($mensaje['email']) ?>" class="text-blue-600 hover:underline">
                            <?= esc($mensaje['email']) ?>
                        </a>
                    </p>
                </div>
                <?php if (! empty($mensaje['telefono'])): ?>
                <div>
                    <span class="text-xs text-gray-500 uppercase font-medium">Teléfono</span>
                    <p class="mt-1"><?= esc($mensaje['telefono']) ?></p>
                </div>
                <?php endif; ?>
                <?php if (! empty($mensaje['empresa'])): ?>
                <div>
                    <span class="text-xs text-gray-500 uppercase font-medium">Empresa</span>
                    <p class="mt-1"><?= esc($mensaje['empresa']) ?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="pt-4 border-t border-gray-200">
                <span class="text-xs text-gray-500 uppercase font-medium">Mensaje</span>
                <div class="mt-2 text-gray-700 whitespace-pre-wrap"><?= esc($mensaje['mensaje']) ?></div>
            </div>

            <?php if (! empty($mensaje['ip_address'])): ?>
            <div class="pt-4 border-t border-gray-200">
                <span class="text-xs text-gray-400 text-sm">IP: <?= esc($mensaje['ip_address']) ?></span>
            </div>
            <?php endif; ?>
        </div>

        <div class="px-6 py-4 border-t border-gray-200 flex space-x-3">
            <a href="mailto:<?= esc($mensaje['email']) ?>?subject=Re: <?= esc($mensaje['asunto']) ?>"
               style="background:#0345BF;color:#fff;padding:0.5rem 1rem;border-radius:0.25rem;font-size:0.875rem;display:inline-block;text-decoration:none;">
                Responder por email
            </a>
            <a href="<?= base_url('admin/contacto/eliminar/') ?><?= $mensaje['id'] ?>"
               onclick="return confirm('¿Eliminar este mensaje?')"
               class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition text-sm">
                Eliminar
            </a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
