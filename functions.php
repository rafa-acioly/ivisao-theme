<?php

add_theme_support( 'menus' );

// Clear Menu Side
function clean_menu() {
  global $menu;
  global $submenu;
  unset($submenu['edit.php'][16]);
  remove_menu_page ('upload.php');
  remove_menu_page ('link-manager.php');
  remove_menu_page ('edit.php?post_type=page');
  // remove_menu_page ('options-general.php');
  remove_menu_page ('tools.php');
  remove_menu_page ('edit.php');
  remove_menu_page ('edit-comments.php');
  // remove_menu_page ('plugins.php');
  remove_menu_page ('themes.php');
  remove_menu_page ('users.php');
}
add_action ('admin_menu', 'clean_menu');
