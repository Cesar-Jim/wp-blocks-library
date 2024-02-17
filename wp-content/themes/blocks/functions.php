<?php

function blocks_files()
{
  // Load main CSS rules
  wp_enqueue_style('main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'blocks_files');