<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-cycloid-navy text-white py-14">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4">
            <a href="<?= base_url('/') ?>" class="hover:text-white">Inicio</a>
            <span class="mx-2">›</span>
            <a href="<?= base_url('blog') ?>" class="hover:text-white">Blog</a>
            <span class="mx-2">›</span>
            <span class="text-white"><?= esc($post['titulo']) ?></span>
        </nav>
        <h1 class="text-3xl md:text-4xl font-extrabold leading-tight"><?= esc($post['titulo']) ?></h1>
        <p class="mt-3 text-gray-400 text-sm"><?= date('d \d\e F \d\e Y', strtotime($post['created_at'])) ?></p>
    </div>
</section>

<article class="py-12 sm:py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <?php if (! empty($post['imagen'])): ?>
        <div class="rounded-2xl overflow-hidden mb-6 sm:mb-10 aspect-video bg-gray-100">
            <img src="<?= base_url('assets/img/blog/' . $post['imagen']) ?>"
                 alt="<?= esc($post['titulo']) ?>" class="w-full h-full object-cover">
        </div>
        <?php endif; ?>

        <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">
            <?= $post['contenido'] ?>
        </div>

        <div class="mt-12 pt-8 border-t border-gray-100">
            <a href="<?= base_url('blog') ?>"
               class="inline-flex items-center gap-1 text-cycloid-blue text-sm font-semibold hover:gap-2 transition-all">
                <span>←</span> Volver al blog
            </a>
        </div>
    </div>
</article>

<?= $this->include('partials/contact_cta') ?>
<?= $this->endSection() ?>
