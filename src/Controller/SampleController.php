<?php

/**
 * @file
 * Contains \Drupal\drupal_sample_module\Controller\SampleController.
 */

namespace Drupal\drupal_sample_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class SampleController extends ControllerBase{

  /**
   * print content to the Drupal site
   * @return array 
   *   the printed content array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello World!'),
    );
  }
}
