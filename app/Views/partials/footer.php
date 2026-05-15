<footer class="bg-cycloid-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">

            <!-- Brand -->
            <div class="md:col-span-1">
                <img src="<?= base_url('assets/img/logos/cycloid-logo-blanco.png') ?>"
                     alt="Cycloid Talent" class="h-10 w-auto mb-4" loading="lazy">
                <p class="text-sm text-gray-400 leading-relaxed">
                    Consultoría especializada en Seguridad y Salud en el Trabajo y gestión del riesgo psicosocial para empresas colombianas.
                </p>
                <div style="display:inline-flex;align-items:center;gap:0.5rem;margin-top:0.75rem;padding:0.4rem 0.7rem;background:rgba(0,201,219,0.08);border:1px solid rgba(0,201,219,0.25);border-radius:9999px;">
                    <svg style="width:0.9rem;height:0.9rem;color:#00C9DB;flex-shrink:0;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span style="font-size:0.7rem;color:#cbd5e1;line-height:1.2;">Licencia SST · Res. 25-1231/2026<br><span style="color:#94a3b8;">Sec. Salud Cundinamarca</span></span>
                </div>
            </div>

            <!-- Servicios -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-300 mb-4">Servicios</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="<?= base_url('servicios/consultoria-sst') ?>" class="hover:text-cycloid-cyan transition-colors">Consultoría SG-SST</a></li>
                    <li><a href="<?= base_url('servicios/riesgo-psicosocial') ?>" class="hover:text-cycloid-cyan transition-colors">Riesgo Psicosocial</a></li>
                    <li>
                        <a href="https://psyrisksite.cycloidtalent.com/" target="_blank" rel="noopener"
                           class="hover:text-cycloid-cyan transition-colors">
                            PsyRisk · Plataforma de Batería Psicosocial <span aria-label="Enlace externo">↗</span>
                        </a>
                    </li>
                    <li><a href="<?= base_url('servicios/propiedad-horizontal') ?>" class="hover:text-cycloid-cyan transition-colors">SST en Propiedad Horizontal</a></li>
                </ul>
            </div>

            <!-- Links -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-300 mb-4">Empresa</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="<?= base_url('nosotros') ?>" class="hover:text-cycloid-cyan transition-colors">Nosotros</a></li>
                    <li><a href="<?= base_url('clientes') ?>" class="hover:text-cycloid-cyan transition-colors">Clientes</a></li>
                    <li><a href="<?= base_url('blog') ?>" class="hover:text-cycloid-cyan transition-colors">Blog</a></li>
                    <li><a href="<?= base_url('contacto') ?>" class="hover:text-cycloid-cyan transition-colors">Contacto</a></li>
                    <li><a href="<?= base_url('legal/reglamento-interno') ?>" class="hover:text-cycloid-cyan transition-colors">Reglamento Interno</a></li>
                    <li><a href="<?= base_url('legal/reglamento-higiene') ?>" class="hover:text-cycloid-cyan transition-colors">Reglamento de Higiene</a></li>
                </ul>
            </div>

            <!-- Contacto + Redes -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-300 mb-4">Contacto</h4>
                <ul class="space-y-2 text-sm text-gray-400 mb-6">
                    <li>Tv. 24B #17-209, Soacha, Oficina 202</li>
                    <li>Cundinamarca, Colombia</li>
                    <li>
                        <a href="tel:3229074371" class="hover:text-cycloid-cyan transition-colors">322 907 4371</a>
                    </li>
                    <li>
                        <a href="mailto:diana.cuestas@cycloidtalent.com" class="hover:text-cycloid-cyan transition-colors">diana.cuestas@cycloidtalent.com</a>
                    </li>
                </ul>

                <!-- Social icons -->
                <div class="flex gap-3">
                    <a href="https://www.facebook.com/CycloidTalent" target="_blank" rel="noopener"
                       class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center hover:bg-cycloid-blue transition-colors" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                        </svg>
                    </a>
                    <a href="https://co.linkedin.com/company/cycloid-talent" target="_blank" rel="noopener"
                       class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center hover:bg-cycloid-blue transition-colors" aria-label="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                            <circle cx="4" cy="4" r="2"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/cycloid_talent" target="_blank" rel="noopener"
                       class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center hover:bg-cycloid-blue transition-colors" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/>
                        </svg>
                    </a>
                    <a href="https://www.tiktok.com/@cycloid_talent" target="_blank" rel="noopener"
                       class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center hover:bg-cycloid-blue transition-colors" aria-label="TikTok">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.76a4.85 4.85 0 01-1.01-.07z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="border-t border-white/10 mt-10 pt-6 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-gray-500">
            <p>© <?= date('Y') ?> CYCLOID TALENT SAS — NIT 901653912-2</p>
            <div class="flex gap-4">
                <a href="<?= base_url('legal/reglamento-interno') ?>" class="hover:text-gray-300 transition-colors">Reglamento Interno</a>
                <a href="<?= base_url('legal/reglamento-higiene') ?>" class="hover:text-gray-300 transition-colors">Reglamento de Higiene</a>
            </div>
        </div>
    </div>
</footer>
