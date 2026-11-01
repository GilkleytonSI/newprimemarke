<?php
$esc = static fn($v): string => htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
$img = (string)($project['image'] ?? '');
if (str_starts_with($img, 'public/assets/')) $img = base_url($img);
$techs = implode(', ', $project['technologies'] ?? []);
?>
<div class="portfolio-item glass-card rounded-2xl overflow-hidden hover-glow transition-all duration-300 group"
    data-category="<?= $esc($project['category']) ?>" data-aos="fade-up"
    data-title="<?= $esc($project['title']) ?>" data-type="<?= $esc($project['type']) ?>"
    data-img="<?= $esc($img) ?>" data-desc="<?= $esc($project['description']) ?>"
    data-tech="<?= $esc($techs) ?>" data-link="<?= $esc($project['link']) ?>">
    <div class="relative h-60 overflow-hidden">
        <?php if ($img !== ''): ?>
        <img src="<?= $esc($img) ?>" alt="<?= $esc($project['title']) ?>" loading="lazy"
             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <?php else: ?><div class="w-full h-full bg-bgSec flex items-center justify-center text-primary"><i class="fa-solid fa-laptop-code text-5xl"></i></div><?php endif; ?>
        <div class="absolute inset-0 bg-bgMain/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <button type="button" class="open-modal-btn w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white glow-btn hover:scale-110 transition-transform" aria-label="Ver detalhes de <?= $esc($project['title']) ?>">
                <i class="fa-solid fa-arrow-right pointer-events-none"></i>
            </button>
        </div>
    </div>
    <div class="p-6">
        <span class="text-primary text-xs font-bold uppercase tracking-wider block mb-2"><?= $esc($project['type']) ?></span>
        <h3 class="text-xl font-bold mb-2"><?= $esc($project['title']) ?></h3>
        <p class="text-grayLight text-sm mb-4 line-clamp-2"><?= $esc($project['description']) ?></p>
        <button type="button" class="open-modal-btn text-sm font-medium hover:text-primary transition flex items-center gap-2">Ver projeto <i class="fa-solid fa-chevron-right text-xs pointer-events-none"></i></button>
    </div>
</div>
