<style>
    .single-button-text {
        font-size: 28px !important;
    }

    @media only screen and (max-width: 600px) {
        .single-button-text {
            font-size: 14px !important;
        }

        .hidden-mobile {
            display: none;
        }
    }
</style>

<div class="info-movie">

    <div id="modal" class="modal" style="display: block; visibility: hidden; top: 0px; transition: top 0.3s ease 0s;">
        <div>
            <div><?= op_get_rating() ?> sao / <?= op_get_rating_count() ?> lượt đánh giá</div>
            <a id="close-modal-rated" href="javascript:;">
                <span class="material-icons-round margin-0-5"> close </span>
            </a>
        </div>
        <div>
            <div id="movies-rating-star" class="rated-star flex flex-hozi-center flex-ver-center">
            </div>
        </div>
    </div>

    <?php if (op_get_trailer_url()) {
        parse_str( parse_url( op_get_trailer_url(), PHP_URL_QUERY ), $my_array_of_vars );
        $video_id = $my_array_of_vars['v'];

        ?>
    <div id="modal-trailer" class="modal"
         style="display: block; visibility: hidden; top: 0px; transition: top 0.3s ease 0s;">
        <div>
            <div>Trailer <?php the_title(); ?></div>
            <a id="close-modal-trailer" href="javascript:;">
                <span class="material-icons-round margin-0-5"> close </span>
            </a>
        </div>
        <div>

            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?= $video_id ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    frameborder="0" scrolling="no" allowfullscreen></iframe>
        </div>
    </div>
    <?php     } ?>

    <h1 class="heading_movie"><?php the_title(); ?></h1>
    <div class="head ah-frame-bg">
        <div class="first">
            <img src="<?= op_get_thumb_url() ?>" alt="<?php the_title(); ?>" />
        </div>
        <div class="last">
            <div class="name_other">
                <div>Tên khác</div>
                <div><?= op_get_original_title() ?> </div>
            </div>
            <div class="list_cate">
                <div>Thể loại</div>
                <div>
                    <?= op_get_genres(' ') ?>
                </div>
            </div>
            <div class="list_cate">
                <div>Quốc gia</div>
                <div>
                    <?= op_get_regions() ?>
                </div>
            </div>
            <div class="status">
                <div>Trạng thái</div>
                <div> <?= op_get_episode() ?> <?= op_get_lang() ?> <?= op_get_quality() ?>
                </div>
            </div>
            <div class="duration">
                <div>Thời lượng</div>
                <div> <?= op_get_runtime() ?> </div>
            </div>
            <div class="update_time">
                <div>Phát hành</div>
                <div> <?= op_get_year() ?></div>
            </div>
        </div>
    </div>
    <div class="flex ah-frame-bg flex-wrap">
        <div class="flex flex-wrap flex-1">
              <?php if (watchUrl()) { ?>
            <a href="<?= watchUrl() ?>"
               class="padding-5-15 fs-35 button-default fw-500 flex flex-hozi-center bg-lochinvar" title="Xem Ngay">
                <span class="material-icons-round">play_circle_outline</span> <span class="single-button-text"> XEM PHIM
                        </span>
            </a>
              <?php } ?>
            <?php if (op_get_trailer_url()) { ?>
            <a href="javascript:void(0)" id="toggle_trailer"
               class="bg-green padding-5-15 fs-35 button-default fw-500 fs-15 flex flex-hozi-center"
               title="Theo dõi phim này" style="">
                <span class="material-icons-round"> play_circle_filled </span> <span
                        class="single-button-text hidden-mobile"> TRAILER </span>
            </a>
            <?php } ?>
        </div>
        <div class="last">
            <div id="rated" class="bg-orange padding-5-15 fs-35 button-default fw-500 fs-15 flex flex-hozi-center">
                <span class="material-icons-round"> stars </span> <span class="single-button-text hidden-mobile"> CHẤM
                        ĐIỂM </span>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="list_episode ah-frame-bg">
            <div class="heading flex flex-space-auto fw-700">
                <span>Danh sách tập</span>
                <span id="newest-ep-is-readed" class="fs-13"></span>
            </div>
            <div class="list-item-episode scroll-bar">
                <?php if (watchUrl()) : ?>
              <?php $episodeList = episodeList() ;foreach  (reset($episodeList)['server_data'] as $list) {
                        echo '<a href="' . hrefEpisode($list["name"],array_key_first(episodeList())). '"
                                              >
                                                ' . $list['name'] . '
                                            </a> 
                                        ';
                    } ?>
                <?php endif ?>

            </div>
        </div>
        <div class="desc ah-frame-bg">
            <div>
                <h2 class="heading"> Nội dung </h2>
            </div>
            <div>

                 <?php if (op_get_showtime_movies()) { ?>
                <p>
                    <strong>
                <p>
                    <span style="color:#FFA500"><?= op_get_showtime_movies() ?> <p>
                    </strong>
                </p>
                <?php } ?>

                <?php if (op_get_notify()) { ?>
                <p>
                    <strong>
                <p>
                    <span style="color:#FFA500"><?= op_get_notify() ?> <p>
                    </strong>
                </p>
                <?php } ?>
                <p class="Director">
                    <strong>Đạo diễn:</strong>
                    <?= op_get_directors(10,', ') ?>
                </p>
                <p class="Cast">
                    <strong>Diễn viên:</strong>
                    <?= op_get_actors(10,', ') ?>
                </p>
                <p class="heading"></p>
                <div>
                    <p><?php the_content();?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="ah-frame-bg">
        <div>
            <h2 class="heading"> Tags </h2>
        </div>
        <div class="">
            <?= op_get_tags(', ') ?>
        </div>
    </div>
    <div class="ah-frame-bg">
        <div class="flex flex-space-auto">
            <div class="fw-700 fs-16 color-yellow-2 flex flex-hozi-center">
                <span class="material-icons-round margin-0-5"> comment </span>Bình luận
            </div>
        </div>
        <div id="comments" class="margin-t-10">
            <div style="width: 100%; background-color: #fff">
                <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                 data-numposts="5" data-colorscheme="light" data-lazy="true">
            </div>
            </div>
        </div>
    </div>

    <div class="ah-frame-bg">
        <div class="heading flex flex-space-auto fw-700">
            <span>Có thể bạn muốn xem!</span>
        </div>
        <div class="movies-list">
            <?php
            $postType = 'ophim';
            $taxonomyName = 'ophim_genres';
            $taxonomy = get_the_terms(get_the_id(), $taxonomyName);
            if ($taxonomy) {
                $category_ids = array();
                foreach ($taxonomy as $individual_category) $category_ids[] = $individual_category->term_id;
                $args = array('post_type' => $postType, 'post__not_in' => array(get_the_id()), 'posts_per_page' => 10, 'tax_query' => array(array('taxonomy' => $taxonomyName, 'field' => 'term_id', 'terms' => $category_ids,),));
                $my_query = new wp_query($args);

                if ($my_query->have_posts()):
                    while ($my_query->have_posts()):$my_query->the_post();
                     include THEMETEMPLADE.'/section/section_thumb_item.php';
                    endwhile;
                endif;
                wp_reset_query();
            }
            ?>
        </div>
    </div>

</div>

<?php
add_action('wp_footer', function (){?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css"
          integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"
            integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/jquery.raty.js"></script>
    <link href="<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/jquery.raty.css" rel="stylesheet" type="text/css" />

    <script>
        var rated = false;
        $('#movies-rating-star').raty({
            score: <?= op_get_rating() ?>,
        number: 10,
            numberMax: 10,
            hints: ['quá tệ', 'tệ', 'không hay', 'không hay lắm', 'bình thường', 'xem được', 'có vẻ hay', 'hay',
            'rất hay', 'siêu phẩm'
        ],
            starOff: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-off.png',
            starOn: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-on.png',
            starHalf: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-half.png',
            click: function(score, evt) {
            if (rated) return
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php')?>',
                type: 'POST',
                data: {
                    action: "ratemovie",
                    rating: score,
                    postid: '<?php echo get_the_ID(); ?>',
                },
            }).done(function (res) {
                rated = true;
                $('#movies-rating-star').data('raty').readOnly(true);
                $.toast({
                    heading: 'Thông báo',
                    text: 'Đánh giá của bạn đã được gửi đi!',
                    position: 'bottom-right',
                    icon: 'info',
                    loader: true,
                    loaderBg: '#9EC600',
                    bgColor: '#212121',
                    textColor: 'white'
                })
            });


        }
        });
    </script>
    
    

<?php }) ?>