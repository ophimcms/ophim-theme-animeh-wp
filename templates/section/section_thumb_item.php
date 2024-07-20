<div class="movie-item" id="movie-id-<?= get_the_ID(); ?>">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)">
        <div class="episode-latest">
            <span><?= op_get_episode() ?></span>
        </div>
        <div>
            <img src="<?= op_get_thumb_url() ?>"
                 alt="<?php the_title(); ?> - <?= op_get_original_title() ?> (<?= op_get_year() ?>)" />
        </div>
        <div class="score"> <?= op_get_rating() ?> </div>
        <div class="name-movie"> <?php the_title(); ?> </div>
    </a>
</div>
