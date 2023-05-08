<?php

namespace Drupal\config_import_locale;

use Drupal\locale\LocaleConfigManager;

/**
 * This class extends the LocaleConfigManager in Drupal\locale.
 *
 * The only function that is overwritten is isSupported,
 * to not override config with translations
 * depending on config_import_locale config.
 *
 * @see \Drupal\locale\LocaleConfigManager
 */
class ConfigImportLocaleConfigManager extends LocaleConfigManager {

  /**
   * Whether the given configuration is supported for interface translation.
   *
   * @param string $name
   *   The configuration name.
   *
   * @return bool
   *   TRUE if interface translation is supported.
   */
  public function isSupported($name) {
    // Load our config.
    $config = \Drupal::config('config_import_locale.settings');
    $overwrite = $config->get('overwrite_interface_translation');

    switch ($overwrite) {
      case 'nothing':
        // Never replace config.
        return FALSE;

      default:
        return parent::isSupported($name);
    }
  }

}
