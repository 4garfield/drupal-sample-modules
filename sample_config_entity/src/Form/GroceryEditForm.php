<?php

/**
 * @file
 * Contains \Drupal\sample_config_entity\Form\GroceryEditForm.
 */

namespace Drupal\sample_config_entity\Form;

use Drupal\Core\Form\FormStateInterface;

class GroceryEditForm extends GroceryFormBase {

  protected function actions(array $form, FormStateInterface $form_state) {
    $actions = parent::actions($form, $form_state);
    
    $actions['submit']['#value'] = $this->t('Update Grocery');
    return $actions;
  }

}
