<!-- Otto Floating Widget -->
<div x-data="{ open: false, shown: false }"
     x-init="setTimeout(() => shown = true, 1500)"
     x-cloak
     style="position:fixed;bottom:24px;right:24px;z-index:50;display:flex;flex-direction:column;align-items:flex-end;gap:12px;"

    <!-- Message Bubble -->
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-2 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-2 scale-95"
         @click.outside="open = false"
         class="bg-white rounded-2xl shadow-2xl border border-gray-200 w-[300px] sm:w-[320px] overflow-hidden">

        <!-- Header -->
        <div class="bg-cycloid-navy px-5 py-4 flex items-center gap-3">
            <img src="<?= base_url('img/otto.png') ?>"
                 alt="Otto" class="w-10 h-10 rounded-full bg-white object-cover">
            <div>
                <p class="text-white font-semibold text-sm">Otto</p>
                <p class="text-gray-400 text-xs">Asistente Cycloid Talent</p>
            </div>
            <button @click="open = false" class="ml-auto text-gray-400 hover:text-white transition">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Body -->
        <div class="p-5">
            <p class="text-sm text-gray-600 mb-4">
                ¡Hola! Soy Otto 🦦 ¿En qué te puedo orientar?
            </p>
            <div class="space-y-2">
                <a href="<?= base_url('contacto') ?>"
                   class="flex items-center gap-3 p-3 rounded-xl bg-cycloid-bg hover:bg-cycloid-blue/5 border border-gray-100 hover:border-cycloid-blue/30 transition-all group">
                    <span class="w-8 h-8 rounded-lg bg-cycloid-blue/10 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-cycloid-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </span>
                    <span class="text-sm font-medium text-cycloid-navy group-hover:text-cycloid-blue transition">Solicitar asesoría gratuita</span>
                </a>
                <a href="<?= base_url('servicios/consultoria-sst') ?>"
                   class="flex items-center gap-3 p-3 rounded-xl bg-cycloid-bg hover:bg-cycloid-blue/5 border border-gray-100 hover:border-cycloid-blue/30 transition-all group">
                    <span class="w-8 h-8 rounded-lg bg-cycloid-blue/10 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-cycloid-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </span>
                    <span class="text-sm font-medium text-cycloid-navy group-hover:text-cycloid-blue transition">Ver servicios</span>
                </a>
                <a href="https://wa.me/573229074371" target="_blank" rel="noopener"
                   class="flex items-center gap-3 p-3 rounded-xl bg-cycloid-bg hover:bg-green-50 border border-gray-100 hover:border-green-300 transition-all group">
                    <span class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.612.638l4.556-1.164A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.359 0-4.542-.812-6.266-2.175l-.438-.357-2.715.694.724-2.636-.392-.464A9.949 9.949 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/>
                        </svg>
                    </span>
                    <span class="text-sm font-medium text-cycloid-navy group-hover:text-green-700 transition">Escribir por WhatsApp</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Otto Avatar Button -->
    <button x-show="shown"
            @click="open = !open"
            style="width:64px;height:64px;border-radius:50%;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,.25);border:2px solid #fff;cursor:pointer;padding:0;background:none;"
            aria-label="Abrir asistente Otto">
        <img src="<?= base_url('img/otto.png') ?>"
             alt="Otto"
             style="width:64px;height:64px;border-radius:50%;object-fit:cover;display:block;">
    </button>
</div>
