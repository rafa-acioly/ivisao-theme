<?php

add_theme_support( 'menus' );

/**
 * Remove opções do dashboard principal
 */
 function clean_menu()
 {
  global $menu;
  global $submenu;
  unset($submenu['edit.php'][16]);
  remove_menu_page('upload.php');
  remove_menu_page('link-manager.php');
  //remove_menu_page('edit.php?post_type=page');
  // remove_menu_page('options-general.php');
  remove_menu_page('tools.php');
  // remove_menu_page('edit.php');
  remove_menu_page('edit-comments.php');
  // remove_menu_page('plugins.php');
  //remove_menu_page('themes.php');
  remove_menu_page('users.php');
 }
 add_action('admin_menu', 'clean_menu');

/**
 * Remove opções do navbar do dashboard principal
 */
function clean_bar()
{
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('wp-logo');
  $wp_admin_bar->remove_menu('comments');
  $wp_admin_bar->remove_node('new-media');
  $wp_admin_bar->remove_node('new-user');
  $wp_admin_bar->remove_menu('edit-profile');
}
add_action( 'wp_before_admin_bar_render', 'clean_bar' );

/**
 * Adiciona um menu no dashboard para inserir textos de paginas estaticas
 */
function wpdocs_register_my_custom_menu_page()
{
   add_menu_page(
      null,
      'Conteúdo Geral',
      'edit_posts',
      '/post.php?post=2&action=edit',
      null,
      'dashicons-media-default',
      2
  );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );


function createNavToggleMenu () {
  global $post;
  $menu = wp_get_nav_menu_items('mainMenu');
  $slug = basename(get_permalink());

  foreach ($menu as $item):
    if (strtolower($item->title) === $slug) {
      echo "<a href='{$item->url}' class='nav-item is-tab is-active'>{$item->title}</a>";
    } else {
      echo "<a href='{$item->url}' class='nav-item is-tab'>{$item->title}</a>";
    }
  endforeach;
}
add_action('createToggleActiveMenu', 'createNavToggleMenu');
