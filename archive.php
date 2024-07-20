<?php
get_header();
?>
<?php
get_header();
?>
<div class="margin-10-0 bg-gray-2">
    <div class="fs-17 fw-700 padding-0-20 color-gray inline-flex height-40 flex-hozi-center bg-black border-l-t">
        <?= single_tag_title(); ?> </div>
</div>
<div class="movies-list">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <div class="row" style="margin-bottom: 20px">
                <div class="col-md-12 blogShort">

                    <a href="<?php the_permalink(); ?>"><img style="width: 150px;margin-right: 15px" src="<?= op_remove_domain(get_the_post_thumbnail_url()) ?>"
                                                             alt="<?php the_title(); ?>" class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
                    <br>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <article>
                        <p>
                            <?php the_excerpt(); ?>
                        </p></article>
                    <a class="btn btn-blog pull-right marginBottom10" href="<?php the_permalink(); ?>">Xem thêm</a>
                </div>

            </div>
        <?php }
        wp_reset_postdata();
    } ?>
</div>
<?php ophim_pagination(); ?>
<?php
get_footer();
?>

<?php
get_footer();
?>
