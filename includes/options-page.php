<?php

if( !defined('ABSPATH') )
{
      die('You cannot be here');
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('after_setup_theme', 'loading_carbon_fields');
add_action('carbon_fields_register_fields', 'create_add_image_page');

function loading_carbon_fields()
{
      \Carbon_Fields\Carbon_Fields::boot();
}

function create_add_image_page()
{
      Container::make('theme_options', __('Add Image'))

            ->set_page_menu_position(30)

            ->set_icon('dashicons-media-text')

            ->add_fields(array(

                  Field::make('checkbox', 'gallery_active', __('Active')),

                  Field::make('text', 'image_name', __('Image Name')),

                  Field::make( 'file', 'crb_file', __( 'File' ) )->set_type( array( 'audio', 'image' )),
            ));
}
