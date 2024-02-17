<?php

// Load styles | scripts | files
function blocks_files()
{
  // Load JS
  wp_enqueue_script('blocks-javascript', get_theme_file_uri('./build/index.js'), array(), '1.0', true);

  // Load main CSS rules
  wp_enqueue_style('main_styles', get_stylesheet_uri());

  // Load additional styles
  wp_enqueue_style('additional_styles', get_theme_file_uri('./build/style-index.css'));
}

add_action('wp_enqueue_scripts', 'blocks_files');