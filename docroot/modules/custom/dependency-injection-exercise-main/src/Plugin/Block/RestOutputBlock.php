<?php

namespace Drupal\dependency_injection_exercise\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\dependency_injection_exercise\RestOutput;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a 'RestOutputBlock' block.
 *
 * @Block(
 *  id = "rest_output_block",
 *  admin_label = @Translation("Rest output block"),
 * )
 */
class RestOutputBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The dependency_injection_exercise.rest_output service.
   *
   * @var \Drupal\dependency_injection_exercise\RestOutput
   */
  protected $restOutput;

  /**
   * Constructs a new RestOutputBlock instance.
   *
   * @param array $configuration
   *   The plugin configuration, i.e. an array with configuration values keyed
   *   by configuration option name. The special key 'context' may be used to
   *   initialize the defined contexts by setting it to an array of context
   *   values keyed by context names.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\dependency_injection_exercise\RestOutput $rest_output
   *   The dependency_injection_exercise.rest_output service.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, RestOutput $rest_output) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->restOutput = $rest_output;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('dependency_injection_exercise.rest_output')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {

    $build['wrapper'] = [
      '#type' => 'container',
      '#attributes' => [
        'class' => ['icons-demo'],
      ],
    ];
    $build['wrapper']['output'] = $this->restOutput->getPhotos();

    return $build;
  }

}
