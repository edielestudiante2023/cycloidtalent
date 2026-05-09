<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Hero mini -->
<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Estamos para ayudarte</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">Contacto — Asesoría SST en Colombia</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Solicita una asesoría gratuita en Consultoría SG-SST, Batería de Riesgo Psicosocial o SST en Propiedad Horizontal. Cuéntanos qué necesita tu empresa y te responderemos en menos de 24 horas.
        </p>
    </div>
</section>

<section class="py-14 sm:py-20 bg-cycloid-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">

            <!-- Formulario -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl p-5 sm:p-8 shadow-sm border border-gray-100">
                    <h2 class="text-xl font-bold text-cycloid-navy mb-6">Envíanos un mensaje</h2>

                    <?php if (session()->getFlashdata('success')): ?>
                    <div class="mb-6 bg-green-50 border border-green-200 text-green-800 rounded-xl px-4 py-3 text-sm">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')): ?>
                    <div class="mb-6 bg-red-50 border border-red-200 text-red-800 rounded-xl px-4 py-3 text-sm">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                    <?php endif; ?>

                    <?php $errors = session()->getFlashdata('errors'); ?>
                    <?php if ($errors): ?>
                    <div class="mb-6 bg-red-50 border border-red-200 text-red-800 rounded-xl px-4 py-3 text-sm">
                        <p class="font-semibold mb-1">Por favor corrige los siguientes errores:</p>
                        <ul class="list-disc list-inside">
                            <?php foreach ($errors as $err): ?>
                                <li><?= esc($err) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <div x-data="{ online: navigator.onLine }"
                         x-init="window.addEventListener('online', () => online = true); window.addEventListener('offline', () => online = false)"
                         x-show="!online"
                         x-cloak
                         class="mb-6 bg-amber-50 border border-amber-200 text-amber-800 rounded-xl px-4 py-3 text-sm">
                        Sin conexión a internet. El formulario requiere conexión para enviar tu mensaje.
                    </div>

                    <form action="<?= base_url('contacto/enviar') ?>" method="POST" id="contactForm">
                        <!-- Honeypot: campo invisible para bots -->
                        <div style="position:absolute;left:-9999px;top:-9999px;" aria-hidden="true">
                            <input type="text" name="website" tabindex="-1" autocomplete="off" value="">
                        </div>
                        <!-- Timestamp anti-bot -->
                        <input type="hidden" name="_ts" value="<?= time() ?>">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-sm font-medium text-cycloid-text mb-1">Nombre *</label>
                                <input type="text" name="nombre" value="<?= old('nombre') ?>"
                                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-cycloid-blue focus:border-transparent <?= isset($errors['nombre']) ? 'border-red-400' : '' ?>"
                                       placeholder="Tu nombre completo">
                                <?php if (isset($errors['nombre'])): ?>
                                <p class="text-red-500 text-xs mt-1"><?= $errors['nombre'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-cycloid-text mb-1">Email *</label>
                                <input type="email" name="email" value="<?= old('email') ?>"
                                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-cycloid-blue <?= isset($errors['email']) ? 'border-red-400' : '' ?>"
                                       placeholder="tu@email.com">
                                <?php if (isset($errors['email'])): ?>
                                <p class="text-red-500 text-xs mt-1"><?= $errors['email'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-sm font-medium text-cycloid-text mb-1">Empresa *</label>
                                <input type="text" name="empresa" value="<?= old('empresa') ?>"
                                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-cycloid-blue <?= isset($errors['empresa']) ? 'border-red-400' : '' ?>"
                                       placeholder="Nombre de tu empresa">
                                <?php if (isset($errors['empresa'])): ?>
                                <p class="text-red-500 text-xs mt-1"><?= $errors['empresa'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-cycloid-text mb-1">Teléfono *</label>
                                <input type="tel" name="telefono" value="<?= old('telefono') ?>"
                                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-cycloid-blue <?= isset($errors['telefono']) ? 'border-red-400' : '' ?>"
                                       placeholder="3XX XXX XXXX">
                                <?php if (isset($errors['telefono'])): ?>
                                <p class="text-red-500 text-xs mt-1"><?= $errors['telefono'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-cycloid-text mb-1">Servicio de interés *</label>
                                <select name="servicio"
                                        class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-cycloid-blue bg-white <?= isset($errors['servicio']) ? 'border-red-400' : '' ?>">
                                    <option value="">Selecciona un servicio</option>
                                    <option value="Consultoría SG-SST" <?= old('servicio') === 'Consultoría SG-SST' ? 'selected' : '' ?>>Consultoría SG-SST</option>
                                    <option value="Riesgo Psicosocial" <?= old('servicio') === 'Riesgo Psicosocial' ? 'selected' : '' ?>>Evaluación Riesgo Psicosocial</option>
                                    <option value="Propiedad Horizontal" <?= old('servicio') === 'Propiedad Horizontal' ? 'selected' : '' ?>>SST Propiedad Horizontal</option>
                                </select>
                                <?php if (isset($errors['servicio'])): ?>
                                <p class="text-red-500 text-xs mt-1"><?= $errors['servicio'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-cycloid-text mb-1">¿Cómo nos conociste? *</label>
                                <select name="como_conocio"
                                        class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-cycloid-blue bg-white <?= isset($errors['como_conocio']) ? 'border-red-400' : '' ?>">
                                    <option value="">Selecciona una opción</option>
                                    <?php
                                    $opcionesComoConocio = ['Google', 'Facebook', 'Instagram', 'TikTok', 'LinkedIn', 'YouTube', 'Referido', 'Evento o capacitación', 'Otro'];
                                    foreach ($opcionesComoConocio as $opt): ?>
                                        <option value="<?= esc($opt) ?>" <?= old('como_conocio') === $opt ? 'selected' : '' ?>><?= esc($opt) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($errors['como_conocio'])): ?>
                                <p class="text-red-500 text-xs mt-1"><?= $errors['como_conocio'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-cycloid-text mb-1">Mensaje *</label>
                            <textarea name="mensaje" rows="5"
                                      class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-cycloid-blue resize-none <?= isset($errors['mensaje']) ? 'border-red-400' : '' ?>"
                                      placeholder="Cuéntanos sobre tu empresa y qué necesitas..."><?= old('mensaje') ?></textarea>
                            <?php if (isset($errors['mensaje'])): ?>
                            <p class="text-red-500 text-xs mt-1"><?= $errors['mensaje'] ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Verificación humana -->
                        <div class="mb-6" x-data="{ checked: false }">
                            <label style="display:flex;align-items:center;gap:0.75rem;padding:0.75rem 1rem;border:2px solid #e5e7eb;border-radius:0.75rem;cursor:pointer;user-select:none;"
                                   :style="checked ? 'border-color:#0345BF;background:#f0f7ff' : ''">
                                <input type="checkbox" name="humano" value="1" x-model="checked" required
                                       style="width:1.25rem;height:1.25rem;accent-color:#0345BF;">
                                <span class="text-sm font-medium text-gray-700">No soy un robot</span>
                                <svg x-show="checked" style="margin-left:auto;width:1.25rem;height:1.25rem;color:#0345BF;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </label>
                        </div>

                        <button type="submit"
                                class="w-full bg-cycloid-blue text-white py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors">
                            Enviar mensaje
                        </button>
                    </form>
                </div>
            </div>

            <!-- Datos de contacto -->
            <div class="space-y-6">
                <div class="bg-white rounded-2xl p-6 border border-gray-100">
                    <h3 class="font-bold text-cycloid-navy mb-4">Información de contacto</h3>
                    <ul class="space-y-4 text-sm text-gray-600">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cycloid-blue mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Conjunto Residencial Sandalo<br>Tv. 24B #17-209, Soacha, Cundinamarca<br>Oficina 202</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-cycloid-blue shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:3229074371" class="hover:text-cycloid-blue transition-colors">322 907 4371</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-cycloid-blue shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:diana.cuestas@cycloidtalent.com" class="hover:text-cycloid-blue transition-colors break-all">diana.cuestas@cycloidtalent.com</a>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-gray-100">
                    <h3 class="font-bold text-cycloid-navy mb-4">Síguenos</h3>
                    <div class="flex flex-wrap gap-3">
                        <a href="https://www.facebook.com/CycloidTalent" target="_blank" rel="noopener"
                           class="flex items-center gap-2 text-sm text-gray-600 hover:text-cycloid-blue transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                            Facebook
                        </a>
                        <a href="https://co.linkedin.com/company/cycloid-talent" target="_blank" rel="noopener"
                           class="flex items-center gap-2 text-sm text-gray-600 hover:text-cycloid-blue transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                            LinkedIn
                        </a>
                        <a href="https://www.instagram.com/cycloid_talent" target="_blank" rel="noopener"
                           class="flex items-center gap-2 text-sm text-gray-600 hover:text-cycloid-blue transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/></svg>
                            Instagram
                        </a>
                        <a href="https://www.tiktok.com/@cycloid_talent" target="_blank" rel="noopener"
                           class="flex items-center gap-2 text-sm text-gray-600 hover:text-cycloid-blue transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.76a4.85 4.85 0 01-1.01-.07z"/></svg>
                            TikTok
                        </a>
                    </div>
                </div>

                <div class="bg-cycloid-blue/5 rounded-2xl p-6 border border-cycloid-blue/20">
                    <p class="text-sm text-cycloid-navy font-medium mb-1">Horario de atención</p>
                    <p class="text-sm text-gray-600">Lunes a Viernes: 8:00 am – 5:00 pm</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
