<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <link href="<?= get_template_directory_uri() ?>/assets/css/css.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/functions.js"></script>
</head>
<body>
<div id="ah_wrapper">
    <?php include_once THEME_URL.'/templates/header.php' ?>
    <?php if(get_option('ophim_is_ads') == 'on') { ?>
        <div id="top-banner">
            <div id=top_addd style="text-align: center"></div>
        </div>
    <?php } ?>
    <div class="ah_content">
