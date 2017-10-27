<?php
namespace Drush\Commands\drupal_settings;

use Drupal\Core\DrupalKernel;
use Drupal\Core\Site\Settings;
use Drush\Commands\DrushCommands;
use Symfony\Component\HttpFoundation\Request;

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
