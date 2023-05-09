<?php

namespace Drupal\dependency_injection_exercise;

use Drupal\Core\DependencyInjection\DependencySerializationTrait;
use Drupal\Core\Language\LanguageManager;
use Drupal\Core\Language\LanguageDefault;

/**
 * Class extending the language support on language-unaware sites.
 */
class LanguageManagerDecorator extends LanguageManager {
  use DependencySerializationTrait;

  /**
   * Original service object.
   *
   * @var \Drupal\Core\Language\LanguageManager
   */
  protected $originalService;

  /**
   * Original service object.
   *
   * @var \Drupal\Core\Language\LanguageDefault
   */
  protected $defaultLanguage;

  /**
   * Constructs the language manager.
   *
   * @param \Drupal\Core\Language\LanguageManager $original_service
   *   The original service.
   * @param \Drupal\Core\Language\LanguageDefault $default_language
   *   The default language.
   */
  public function __construct(LanguageManager $original_service, LanguageDefault $default_language) {
    $this->originalService = $original_service;
    parent::__construct($default_language);
  }

  /**
   * {@inheritdoc}
   */
  public function isMultilingual() {
    return FALSE;
  }

  /**
   * Add a new function to the service.
   */
  public function newFunction($some) {
    return NULL;
  }

}
