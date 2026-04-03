<?php if (empty($tools)) return; ?>
<!-- Nuestras Herramientas -->
<section class="py-14 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header compacto -->
        <div class="flex items-center gap-3 mb-8">
            <img src="<?= base_url('img/ottochaleco.jpeg') ?>"
                 alt="Otto"
                 style="width:48px;height:48px;border-radius:50%;object-fit:cover;border:2px solid #00C6FF;">
            <div>
                <p class="text-cycloid-blue text-xs font-semibold uppercase tracking-widest">Tecnología propia</p>
                <h2 class="text-lg sm:text-xl font-bold text-cycloid-navy">Herramientas que respaldan este servicio</h2>
            </div>
        </div>

        <!-- Tool Cards centradas -->
        <div class="grid grid-cols-1 sm:grid-cols-2 <?= count($tools) >= 3 ? 'lg:grid-cols-' . min(count($tools), 4) : 'lg:grid-cols-2' ?> gap-5">
            <?php foreach ($tools as $tool): ?>
            <div class="flex flex-col items-center text-center p-6 rounded-2xl bg-cycloid-bg border border-gray-100 hover:border-cycloid-blue/20 hover:shadow-md transition-all">
                <img src="<?= base_url('img/' . $tool['logo']) ?>"
                     alt="<?= $tool['name'] ?>"
                     style="width:80px;height:80px;object-fit:contain;"
                     class="mb-4">
                <h3 class="font-bold text-cycloid-navy text-sm mb-1"><?= $tool['name'] ?></h3>
                <p class="text-xs text-gray-500 leading-relaxed"><?= $tool['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
