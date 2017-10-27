<?php
namespace Drupal\Commands;

use Drush\Commands\DrushCommands;

/**
 *
 * In addition to a commandfile like this one, you need a drush.services.yml
 * in root of your module.
 *
 * See these files for an example of injecting Drupal services:
 *   - http://cgit.drupalcode.org/devel/tree/src/Commands/DevelCommands.php
 *   - http://cgit.drupalcode.org/devel/tree/drush.services.yml
 */
class DrupalSettingsCommands extends DrushCommands {

  /**
   * Get setting.
   *
   * @command setting:get
   * @param $aetting setting
   * @param array $options An associative array of options whose values come from cli, aliases, config, etc.
   * @usage drush setting-get hash_salt
   *   Get setting hash_salt
   * @aliases setting-get
   */
  public function get($setting) {
    print_r(\Drupal\Core\Site\Settings::get($setting));
  }


}
