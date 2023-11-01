<?php

if (!defined('ABSPATH')) {
      die('You cannot be here');
}

add_shortcode('gallery', 'show_gallery');

function show_gallery()
{
      include IMAGE_PLUGIN_PATH . '/includes/templates/gallery.php';
}