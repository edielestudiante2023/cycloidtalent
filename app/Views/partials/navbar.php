<nav class="bg-white shadow-sm sticky top-0 z-50" x-data="{ open: false, servicios: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <a href="<?= base_url('/') ?>" class="flex items-center">
                <img src="<?= base_url('assets/img/logos/cycloid-logo-azul.png') ?>"
                     alt="Cycloid Talent" class="h-10 w-auto">
            </a>

            <!-- Desktop menu -->
            <div class="hidden md:flex items-center gap-6 text-sm font-medium text-cycloid-text">

                <a href="<?= base_url('nosotros') ?>"
                   class="hover:text-cycloid-blue transition-colors">Nosotros</a>

                <!-- Servicios dropdown -->
                <div class="relative" x-data="{ open: false }" @click.outside="open = false">
                    <button @click="open = !open"
                            class="flex items-center gap-1 hover:text-cycloid-blue transition-colors"
                            :class="open ? 'text-cycloid-blue' : ''">
                        Servicios
                        <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                         class="absolute top-full left-0 mt-2 w-56 bg-white rounded-xl shadow-lg border border-gray-100 py-2 z-50"
                         @click="open = false">
                        <a href="<?= base_url('servicios/consultoria-sst') ?>"
                           class="block px-4 py-2 hover:bg-cycloid-bg hover:text-cycloid-blue transition-colors">Consultoría SG-SST</a>
                        <a href="<?= base_url('servicios/riesgo-psicosocial') ?>"
                           class="block px-4 py-2 hover:bg-cycloid-bg hover:text-cycloid-blue transition-colors">Riesgo Psicosocial</a>
                        <a href="<?= base_url('servicios/propiedad-horizontal') ?>"
                           class="block px-4 py-2 hover:bg-cycloid-bg hover:text-cycloid-blue transition-colors">Propiedad Horizontal</a>
                    </div>
                </div>

                <a href="<?= base_url('clientes') ?>"
                   class="hover:text-cycloid-blue transition-colors">Clientes</a>

                <a href="<?= base_url('blog') ?>"
                   class="hover:text-cycloid-blue transition-colors">Blog</a>

                <a href="<?= base_url('contacto') ?>"
                   class="hover:text-cycloid-blue transition-colors">Contacto</a>

                <!-- Acceder button -->
                <a href="<?= base_url('admin/login') ?>"
                   class="bg-cycloid-blue text-white px-4 py-2 rounded-xl text-sm font-semibold hover:bg-blue-700 transition-colors">
                    Acceder
                </a>
            </div>

            <!-- Mobile hamburger -->
            <button @click="open = !open" class="md:hidden p-2 rounded-lg text-cycloid-text hover:bg-gray-100">
                <svg x-show="!open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" x-transition class="md:hidden border-t border-gray-100 bg-white">
        <div class="px-4 py-3 space-y-1 text-sm font-medium">
            <a href="<?= base_url('nosotros') ?>"
               class="block py-2 hover:text-cycloid-blue">Nosotros</a>

            <div x-data="{ sub: false }">
                <button @click="sub = !sub"
                        class="flex items-center justify-between w-full py-2 hover:text-cycloid-blue">
                    Servicios
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="sub" class="pl-4 space-y-1 text-gray-600">
                    <a href="<?= base_url('servicios/consultoria-sst') ?>" class="block py-1 hover:text-cycloid-blue">Consultoría SG-SST</a>
                    <a href="<?= base_url('servicios/riesgo-psicosocial') ?>" class="block py-1 hover:text-cycloid-blue">Riesgo Psicosocial</a>
                    <a href="<?= base_url('servicios/propiedad-horizontal') ?>" class="block py-1 hover:text-cycloid-blue">Propiedad Horizontal</a>
                </div>
            </div>

            <a href="<?= base_url('clientes') ?>" class="block py-2 hover:text-cycloid-blue">Clientes</a>
            <a href="<?= base_url('blog') ?>" class="block py-2 hover:text-cycloid-blue">Blog</a>
            <a href="<?= base_url('contacto') ?>" class="block py-2 hover:text-cycloid-blue">Contacto</a>
            <a href="<?= base_url('admin/login') ?>"
               class="block mt-2 bg-cycloid-blue text-white text-center px-4 py-2 rounded-xl font-semibold">
                Acceder
            </a>
        </div>
    </div>
</nav>
