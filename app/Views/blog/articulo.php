<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
    /* Soporte para clases generadas por el editor Quill */
    .ql-content .ql-align-center { text-align: center; }
    .ql-content .ql-align-right { text-align: right; }
    .ql-content .ql-align-justify { text-align: justify; }
    .ql-content .ql-size-small { font-size: 0.75em; }
    .ql-content .ql-size-large { font-size: 1.5em; }
    .ql-content .ql-size-huge { font-size: 2.5em; }
    .ql-content .ql-indent-1 { padding-left: 3em; }
    .ql-content .ql-indent-2 { padding-left: 6em; }
    .ql-content .ql-indent-3 { padding-left: 9em; }
    .ql-content .ql-indent-4 { padding-left: 12em; }
    .ql-content .ql-indent-5 { padding-left: 15em; }
    .ql-content blockquote {
        border-left: 4px solid #0345BF;
        padding-left: 1rem;
        margin: 1.25rem 0;
        color: #4b5563;
        font-style: italic;
    }
    .ql-content pre.ql-syntax,
    .ql-content pre {
        background: #1f2937;
        color: #f9fafb;
        padding: 1rem;
        border-radius: 0.5rem;
        overflow-x: auto;
        font-family: ui-monospace, "SF Mono", Menlo, Consolas, monospace;
        font-size: 0.875em;
        margin: 1.25rem 0;
    }
    .ql-content a { color: #0345BF; text-decoration: underline; }
    .ql-content a:hover { color: #00C9DB; }
    .ql-content ul { list-style: disc; padding-left: 1.5rem; }
    .ql-content ol { list-style: decimal; padding-left: 1.5rem; }
    .ql-content h1 { font-size: 2rem; font-weight: 700; margin: 1.5rem 0 0.75rem; color: #0B1437; }
    .ql-content h2 { font-size: 1.5rem; font-weight: 700; margin: 1.25rem 0 0.5rem; color: #0B1437; }
    .ql-content h3 { font-size: 1.25rem; font-weight: 600; margin: 1rem 0 0.5rem; color: #0B1437; }
    .ql-content p { margin: 0.75rem 0; }
</style>

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

        <div class="ql-content prose prose-lg max-w-none text-gray-600 leading-relaxed text-justify">
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
