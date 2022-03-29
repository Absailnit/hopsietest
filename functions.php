<?php
require_once 'lib/classes/nav-walker-bs5.php';
require_once 'lib/setup.php';
require_once 'lib/assets.php';
require_once 'lib/navigation.php';
require_once 'lib/helpers.php';
// require_once 'lib/language/translation.php'; // translation - uncomment if needed
// Variables

require_once 'lib/classes/nav-walker-bs5.php';
require_once 'lib/setup.php';
require_once 'lib/assets.php';
require_once 'lib/navigation.php';
require_once 'lib/helpers.php';
// require_once 'lib/language/translation.php'; // translation - uncomment if needed

/**
 * Add Bootstrap to theme.
 */
function hopsie_theme_enqueue_scripts()
{
  wp_enqueue_script('bootstrap-jquery', "https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js", array(), '1.0.0', true);
  wp_enqueue_script('bootstrap-bundle', "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js", array('bootstrap-jquery'), '1.0.0', true);

  wp_enqueue_style('bootstrap-css', "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css", '', '1.0.0', 'all');


}

add_action('wp_enqueue_scripts', 'hopsie_theme_enqueue_scripts');


/**Register Nav Menu */

function hp_custom_menus()
{
  register_nav_menus(
    array(
      'main-menu' => 'Main Menu',
      'mobile-menu' => 'Mobile Menu',
      'footer-menu' => 'Footer Menu')
  );
}

add_action('init', 'hp_custom_menus');


/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'register_navwalker');
