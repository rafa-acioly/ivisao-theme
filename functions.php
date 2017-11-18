<?php

add_theme_support( 'menus' );
add_theme_support('post-thumbnails');
register_nav_menu('mainMenu', 'Menu Principal');

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
  // remove_menu_page('tools.php');
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


function createNavToggleMenu ()
{
  $array_menu = wp_get_nav_menu_items('mainMenu');
  $slug = basename(get_permalink());

  $menu = array();
  $submenu = array();
  foreach ($array_menu as $item_menu) {
      if (empty($item_menu->menu_item_parent)) {
          $menu[$item_menu->ID] = [
            'ID'        => $item_menu->ID,
            'title'     => $item_menu->title,
            'url'       => $item_menu->url,
            'children'  => [],
          ];
      } else {
          $submenu[$item_menu->ID] = [
            'ID'    => $item_menu->ID,
            'title' => $item_menu->title,
            'url'   => $item_menu->url
          ];
          $menu[$item_menu->menu_item_parent]['children'][$item_menu->ID] = $submenu[$item_menu->ID];
      }
  }

  foreach ($menu as $item):
    if (count($item['children']) > 0): ?>
      <div class='navbar-item has-dropdown is-hoverable'>
        <a class='navbar-link'><?= $item['title']; ?></a>
        <div class='navbar-dropdown is-boxed'>
          <?php foreach ($item['children'] as $children): ?>
              <a class='navbar-item' href="<?= $children['url']; ?>"><?= $children['title']; ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    <?php else: ?>
      <div class='navbar-item'><a href="<?= $item['url']; ?>"><?= $item['title']; ?></a></div>
    <?php endif; endforeach;
}
add_action('createToggleActiveMenu', 'createNavToggleMenu');
