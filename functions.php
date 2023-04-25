<?php

function init_template() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme','init_template');

function assets() {
    wp_register_style('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', '', '5.3', 'all');
    wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,500;1,600&display=swap', '', '1.0', 'all');

    wp_enqueue_style('estilos', get_stylesheet_uri(), array('boostrap', 'montserrat'), '1.0', 'all');

    wp_register_script('popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js','','2.11', true);

    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array('jquery', 'popper'), '5.3', true);
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);
}

add_action('wp_enqueue_scripts', 'assets');