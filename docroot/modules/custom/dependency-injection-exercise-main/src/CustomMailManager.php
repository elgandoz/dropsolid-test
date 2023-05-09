<?php

namespace Drupal\dependency_injection_exercise;

use Drupal\Core\Mail\MailManager;
use Drupal\Core\Render\RenderContext;

/**
 * Overrides the MailManager service.
 */
class CustomMailManager extends MailManager {

  /**
   * {@inheritdoc}
   */
  public function mail($module, $key, $to, $langcode, $params = [], $reply = NULL, $send = TRUE) {
    // Always use an hardcoded mail.
    $to = 'nope@doesntexist.com';
    return $this->renderer->executeInRenderContext(new RenderContext(), function () use ($module, $key, $to, $langcode, $params, $reply, $send) {
      return $this->doMail($module, $key, $to, $langcode, $params, $reply, $send);
    });
  }

}
