<?php if (empty($tools)) return; ?>
<!-- Nuestras Herramientas -->
<section class="py-16 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header con Otto chaleco -->
        <div class="flex items-center gap-4 mb-10">
            <img src="<?= base_url('img/ottochaleco.jpeg') ?>"
                 alt="Otto - Asistente de campo Cycloid Talent"
                 class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover ring-2 ring-cycloid-cyan/30 shrink-0">
            <div>
                <p class="text-cycloid-blue text-xs font-semibold uppercase tracking-widest mb-1">Tecnología propia</p>
                <h2 class="text-xl sm:text-2xl font-bold text-cycloid-navy">Herramientas que respaldan este servicio</h2>
            </div>
        </div>

        <!-- Tool Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 <?= count($tools) >= 3 ? 'lg:grid-cols-3' : 'lg:grid-cols-2' ?> gap-4">
            <?php foreach ($tools as $tool): ?>
            <div class="flex items-start gap-4 p-5 rounded-2xl bg-cycloid-bg border border-gray-100 hover:border-cycloid-blue/20 hover:shadow-sm transition-all">
                <img src="<?= base_url('img/' . $tool['logo']) ?>"
                     alt="<?= $tool['name'] ?>"
                     class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl object-contain bg-white p-1.5 border border-gray-100 shrink-0">
                <div>
                    <h3 class="font-bold text-cycloid-navy text-sm"><?= $tool['name'] ?></h3>
                    <p class="text-xs text-gray-500 mt-1 leading-relaxed"><?= $tool['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
