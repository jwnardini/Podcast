<?php
/**
 * @file
 * next_week_s_episode.features.inc
 */

/**
 * Implements hook_node_info().
 */
function next_week_s_episode_node_info() {
  $items = array(
    'next_week_s_episode' => array(
      'name' => t('Next Week\'s Episode'),
      'base' => 'node_content',
      'description' => t('Upcoming episode'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
