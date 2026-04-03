<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-10 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-cycloid-cyan text-sm font-semibold uppercase tracking-widest mb-3">Blog</p>
        <h1 class="text-3xl md:text-5xl font-extrabold">Seguridad y Salud en el Trabajo</h1>
        <p class="mt-4 text-gray-300 max-w-2xl">
            Artículos, guías y novedades sobre normativa SST colombiana, riesgo psicosocial y buenas prácticas empresariales.
        </p>
    </div>
</section>

<section class="py-14 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <?php foreach ($articulos as $a): ?>
            <article class="bg-cycloid-bg rounded-2xl overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow group">
                <a href="<?= base_url('blog/' . $a['slug']) ?>">
                    <div class="aspect-video overflow-hidden bg-gray-200">
                        <img src="<?= base_url($a['imagen']) ?>"
                             alt="<?= esc($a['titulo']) ?>"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                             loading="lazy" onerror="this.style.display='none'">
                    </div>
                </a>
                <div class="p-4 sm:p-6">
                    <time class="text-xs text-gray-400 uppercase tracking-wide">
                        <?= date('d M Y', strtotime($a['fecha'])) ?>
                    </time>
                    <h2 class="mt-2 text-lg font-bold text-cycloid-navy leading-snug">
                        <a href="<?= base_url('blog/' . $a['slug']) ?>" class="hover:text-cycloid-blue transition-colors">
                            <?= esc($a['titulo']) ?>
                        </a>
                    </h2>
                    <p class="mt-3 text-sm text-gray-500 leading-relaxed"><?= esc($a['extracto']) ?></p>
                    <a href="<?= base_url('blog/' . $a['slug']) ?>"
                       class="inline-flex items-center gap-1 mt-4 text-cycloid-blue text-sm font-semibold hover:gap-2 transition-all">
                        Leer más <span>→</span>
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
