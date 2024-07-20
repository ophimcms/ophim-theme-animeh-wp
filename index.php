<?php
get_header();
?>
<?php if ( is_active_sidebar('widget-slider-poster') ) {
    dynamic_sidebar( 'widget-slider-poster' );
} else {
    _e('This is widget slider. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
<?php if ( is_active_sidebar('widget-area') ) {
    dynamic_sidebar( 'widget-area' );
} else {
    _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
<?php
add_action('wp_footer', function (){?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/plugins/carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/plugins/carousel/owl.theme.default.min.css">
    <script type="text/javascript">
        let item = 4;
        let documentWidth = $(document).width();
        (documentWidth < 768) ? item = 2: null;
        // (documentWidth > 768 && documentWidth < 1000) ? item = 4: null;
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: item,
                lazyLoad: true,
                center: true,
                loop: true,
                responsiveClass: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                stagePadding: 50,
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [100])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        });
    </script>
    <script src="<?= get_template_directory_uri() ?>/assets/plugins/carousel/owl.carousel.min.js"></script>

<?php }) ?>
<?php
get_footer();
?>
