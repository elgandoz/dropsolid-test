<?php

namespace Drupal\dependency_injection_exercise;

use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;
use Drupal\Core\Breadcrumb\Breadcrumb;
use Drupal\Core\Link;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Defines a Custom Breadcrumb builder.
 */
class CustomBreadcrumbBuilder implements BreadcrumbBuilderInterface {
  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function applies(RouteMatchInterface $route_match) {
    return $route_match->getRouteName() == 'dependency_injection_exercise.rest_output_controller_photos';
  }

  /**
   * {@inheritdoc}
   */
  public function build(RouteMatchInterface $route_match) {
    $breadcrumb = new Breadcrumb();
    $breadcrumb->addCacheContexts(['route']);
    $breadcrumb->addLink(Link::createFromRoute($this->t('Home'), '<front>'));
    $breadcrumb->addLink(Link::createFromRoute($this->t('Dropsolid'), '<none>'));
    $breadcrumb->addLink(Link::createFromRoute($this->t('Examples'), '<none>'));
    $breadcrumb->addLink(Link::createFromRoute($this->t('Photos'), 'dependency_injection_exercise.rest_output_controller_photos'));

    return $breadcrumb;
  }

}
