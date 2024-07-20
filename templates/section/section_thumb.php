<div class="margin-10-0 bg-gray-2 flex flex-space-auto">
    <div class="fs-17 fw-700 padding-0-20 color-gray inline-flex height-40 flex-hozi-center bg-black border-l-t"><?= $title; ?></div>
    <?php if($slug) : ?>
        <div class="margin-r-5 fw-500">
            <a href="<?= $slug; ?>" class="bg-blue padding-5-10 border-default">Toàn bộ</a>
        </div>
    <?php endif ?>
</div>
<div class="movies-list ah-frame-bg">
    <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++;
        include THEMETEMPLADE.'/section/section_thumb_item.php';
    endwhile; ?>
</div>
