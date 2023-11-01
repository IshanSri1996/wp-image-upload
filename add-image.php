<?php 
/*
Plugin Name: Add Image
Description: Used to add images
Version: 1.0
Author URI: Ishan Sriyakhan
*/
if( !defined('ABSPATH') )
{
      die('You cannot be here');
}

if( !class_exists('ImagePlugin') )
{



            class ImagePlugin{


                  public function __construct()
                  {

                        define('IMAGE_PLUGIN_PATH', plugin_dir_path( __FILE__ ));

                        define('IMAGE_PLUGIN_URL', plugin_dir_url( __FILE__ ));

                        require_once(IMAGE_PLUGIN_PATH . '/vendor/autoload.php');

                  }

                  public function initialize()
                  {
                        include_once IMAGE_PLUGIN_PATH . 'includes/utilities.php';

                        include_once IMAGE_PLUGIN_PATH . 'includes/options-page.php';

                        include_once IMAGE_PLUGIN_PATH . 'includes/add-image.php';
                  }


            }

            $contactPlugin = new ImagePlugin;
            $contactPlugin->initialize();

}