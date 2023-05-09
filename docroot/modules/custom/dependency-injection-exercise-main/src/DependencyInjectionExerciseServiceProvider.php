<?php

namespace Drupal\dependency_injection_exercise;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 * Replaces Mail mana services with testing versions.
 */
class DependencyInjectionExerciseServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {

    if ($container->hasDefinition('plugin.manager.mail')) {
      $container->getDefinition('plugin.manager.mail')
        ->setClass(CustomMailManager::class);
    }

  }

}
