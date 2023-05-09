<?php

namespace Drupal\dependency_injection_exercise\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\dependency_injection_exercise\RestOutput;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Returns responses for Dependecy injection exercise routes.
 */
class RestOutputController extends ControllerBase {

  /**
   * The dependency_injection_exercise.rest_output service.
   *
   * @var \Drupal\dependency_injection_exercise\RestOutput
   */
  protected $restOutput;

  /**
   * The controller constructor.
   *
   * @param \Drupal\dependency_injection_exercise\RestOutput $rest_output
   *   The dependency_injection_exercise.rest_output service.
   */
  public function __construct(RestOutput $rest_output) {
    $this->restOutput = $rest_output;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('dependency_injection_exercise.rest_output')
    );
  }

  /**
   * Builds the response.
   */
  public function showPhotos() {

    $build = [
      '#type' => 'container',
      '#attributes' => [
        'class' => ['icons-demo'],
      ],
    ];
    $build['output'] = $this->restOutput->getPhotos();

    return $build;
  }

}
