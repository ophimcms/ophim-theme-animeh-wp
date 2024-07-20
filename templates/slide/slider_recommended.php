<div class="ah-carousel">
    <div class="margin-10-0 bg-gray-2">
        <div
                class="fs-17 fw-700 padding-0-20 color-gray inline-flex height-40 flex-hozi-center bg-black border-l-t">
            <?= $title ?> </div>
    </div>
    <div class="ah-frame-bg owl-carousel owl-theme">
        <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++ ?>
        <div>
            <a href="<?php the_permalink(); ?>">
                <div>
                    <img src="<?= op_get_thumb_url() ?>"
                         alt="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)" />
                </div>
                <div class="name"><?php the_title(); ?></div>
                <div class="episode_latest"> <?= op_get_episode() ?> </div>
            </a>
        </div>
        <?php endwhile; ?>
    </div>
</div>
