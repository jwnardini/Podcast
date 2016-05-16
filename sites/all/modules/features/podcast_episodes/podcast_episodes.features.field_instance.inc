<?php
/**
 * @file
 * podcast_episodes.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function podcast_episodes_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-podcast_episode-body'.
  $field_instances['node-podcast_episode-body'] = array(
    'bundle' => 'podcast_episode',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 0,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(
          'trim_length' => 600,
        ),
        'type' => 'text_summary_or_trimmed',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'body',
    'label' => 'Body',
    'required' => FALSE,
    'settings' => array(
      'display_summary' => TRUE,
      'text_processing' => 1,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'module' => 'text',
      'settings' => array(
        'rows' => 20,
        'summary_rows' => 5,
      ),
      'type' => 'text_textarea_with_summary',
      'weight' => 2,
    ),
  );

  // Exported field_instance: 'node-podcast_episode-field_episode'.
  $field_instances['node-podcast_episode-field_episode'] = array(
    'bundle' => 'podcast_episode',
    'deleted' => 0,
    'description' => 'This is where you put the podcast file',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'audiofield',
        'settings' => array(),
        'type' => 'audiofield_embedded',
        'weight' => 1,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'module' => 'audiofield',
        'settings' => array(),
        'type' => 'audiofield_embedded',
        'weight' => 2,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_episode',
    'label' => 'Episode',
    'required' => 1,
    'settings' => array(
      'description_field' => 0,
      'file_directory' => '',
      'file_extensions' => 'mp3',
      'max_filesize' => '',
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 0,
      'module' => 'audiofield',
      'settings' => array(
        'progress_indicator' => 'throbber',
      ),
      'type' => 'audiofield_widget',
      'weight' => 3,
    ),
  );

  // Exported field_instance: 'node-podcast_episode-field_itunes_link'.
  $field_instances['node-podcast_episode-field_itunes_link'] = array(
    'bundle' => 'podcast_episode',
    'default_value' => array(
      0 => array(
        'summary' => '',
        'value' => '<a href="https://itunes.apple.com/us/podcast/what-happending/id1074483687?mt=2">iTunes Link</a>',
        'format' => 'full_html',
      ),
    ),
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 2,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 3,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_itunes_link',
    'label' => 'itunes_link',
    'required' => 1,
    'settings' => array(
      'display_summary' => 0,
      'text_processing' => 1,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'rows' => 20,
        'summary_rows' => 5,
      ),
      'type' => 'text_textarea_with_summary',
      'weight' => 4,
    ),
  );

  // Exported field_instance: 'node-podcast_episode-field_podcast_image'.
  $field_instances['node-podcast_episode-field_podcast_image'] = array(
    'bundle' => 'podcast_episode',
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'image',
        'settings' => array(
          'image_link' => '',
          'image_style' => '',
        ),
        'type' => 'image',
        'weight' => 3,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'module' => 'image',
        'settings' => array(
          'image_link' => '',
          'image_style' => '',
        ),
        'type' => 'image',
        'weight' => 1,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_podcast_image',
    'label' => 'podcast image',
    'required' => 0,
    'settings' => array(
      'alt_field' => 0,
      'default_image' => 0,
      'file_directory' => '',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '500x500',
      'min_resolution' => '',
      'title_field' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'image',
      'settings' => array(
        'preview_image_style' => 'thumbnail',
        'progress_indicator' => 'throbber',
      ),
      'type' => 'image_image',
      'weight' => 1,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Body');
  t('Episode');
  t('This is where you put the podcast file');
  t('itunes_link');
  t('podcast image');

  return $field_instances;
}
