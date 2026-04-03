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
        <?php if (empty($posts)): ?>
            <div class="text-center text-gray-500 py-16">
                <p class="text-lg">Próximamente publicaremos artículos aquí.</p>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <?php foreach ($posts as $p): ?>
                <article class="bg-cycloid-bg rounded-2xl overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow group">
                    <a href="<?= base_url('blog/' . $p['slug']) ?>">
                        <div class="aspect-video overflow-hidden bg-gray-200">
                            <?php if (! empty($p['imagen'])): ?>
                                <img src="<?= base_url('assets/img/blog/' . $p['imagen']) ?>"
                                     alt="<?= esc($p['titulo']) ?>"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                     loading="lazy">
                            <?php endif; ?>
                        </div>
                    </a>
                    <div class="p-4 sm:p-6">
                        <time class="text-xs text-gray-400 uppercase tracking-wide">
                            <?= date('d M Y', strtotime($p['created_at'])) ?>
                        </time>
                        <h2 class="mt-2 text-lg font-bold text-cycloid-navy leading-snug">
                            <a href="<?= base_url('blog/' . $p['slug']) ?>" class="hover:text-cycloid-blue transition-colors">
                                <?= esc($p['titulo']) ?>
                            </a>
                        </h2>
                        <?php if (! empty($p['extracto'])): ?>
                            <p class="mt-3 text-sm text-gray-500 leading-relaxed"><?= esc($p['extracto']) ?></p>
                        <?php endif; ?>
                        <a href="<?= base_url('blog/' . $p['slug']) ?>"
                           class="inline-flex items-center gap-1 mt-4 text-cycloid-blue text-sm font-semibold hover:gap-2 transition-all">
                            Leer más <span>→</span>
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
