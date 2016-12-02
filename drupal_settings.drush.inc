<?php
/*
 * @file
 * Customize this file as desired. See https://github.com/drush-ops/drush/blob/8.x/examples/policy.drush.inc for documentation.
 */

function drupal_settings_drush_command() {
  $items['setting-get'] = array(
    'description' => 'Get setting.',
    'core' => array('8+'),
    'arguments' => array(
      'setting' => "Setting",
    ),
    'examples' => array(
      'drush setting-get hash_salt' => 'Get setting hash_salt',
    ),
  );
  return $items;
}

function drush_drupal_settings_setting_get($setting) {
  print_r(\Drupal\Core\Site\Settings::get($setting));
}
