<?php
/**
 * @file
 * about_what_happending.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function about_what_happending_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu_about-wh:node/10.
  $menu_links['main-menu_about-wh:node/10'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'node/10',
    'router_path' => 'node/%',
    'link_title' => 'About WH',
    'options' => array(
      'identifier' => 'main-menu_about-wh:node/10',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('About WH');

  return $menu_links;
}
