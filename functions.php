<?php
  function theme_scripts() {
      wp_enqueue_style('style', get_template_directory_uri().'/src/css/style.css');
      wp_enqueue_script('script-file', get_template_directory_uri().'/src/js/script.js');
  }
  add_action('wp_enqueue_scripts', 'theme_scripts');

  function theme_support() {
      add_theme_support('title-tag');
      add_theme_support('post-thumbnails');
      add_theme_support('custom-logo');
  }
  add_action('after_setup_theme', 'theme_support');

  function navigation_menu() {
      register_nav_menus(array(
          'primary-menu'=>_('Primary Menu'),
          'footer-menu'=>_('Footer Menu'),
      ));
  }
  add_action('init', 'navigation_menu');

  function nav_link_atts($atts) {
      $atts['class'] = '';
      return $atts;
  }
  add_filter('nav_menu_link_attributes', 'nav_link_atts');

  function custo_excerpt_length(){
      return 15;
  }
  add_filter('excerpt_length', 'custo_excerpt_length');
?>
