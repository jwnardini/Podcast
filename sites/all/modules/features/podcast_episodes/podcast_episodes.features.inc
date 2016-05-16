<?php
/**
 * @file
 * podcast_episodes.features.inc
 */

/**
 * Implements hook_node_info().
 */
function podcast_episodes_node_info() {
  $items = array(
    'podcast_episode' => array(
      'name' => t('Podcast Episode'),
      'base' => 'node_content',
      'description' => t('Post'),
      'has_title' => '1',
      'title_label' => t('Podcast'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
