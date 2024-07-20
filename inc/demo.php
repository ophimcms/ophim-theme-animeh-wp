<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '<div class="ah_footer">
                    <div class="flex flex-hozi-center flex-space-auto">
                    <div class="logo-footer">
                    <img src="https://ophim6.cc/logo-ophim-3.png" alt="Logo" />
                    </div>
                    <div>
                    <a href="#">
                    <img src="https://animehay.fan/themes/img/ads_click.png?v=1.1.9" alt="contact">
                    </a>
                    </div>
                    </div>
                    </div>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);