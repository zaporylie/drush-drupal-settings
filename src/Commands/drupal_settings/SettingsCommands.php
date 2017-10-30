<?php
namespace Drush\Commands\drupal_settings;

use Drupal\Core\Site\Settings;
use Drush\Commands\DrushCommands;

/**
 * Command file for setting-get.
 */
class SettingsCommands extends DrushCommands {

  /**
   * Command description here.
   *
   * @command setting-get
   * @param $setting Setting.
   * @usage settings-get hash_salt
   *   Get setting hash_salt
   * @bootstrap configuration
   */
  public function commandName($setting) {
    print_r(Settings::get($setting));
  }

}
