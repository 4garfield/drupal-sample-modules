<?php

/**
 * @file
 * Contains \Drupal\sample_config_entity\Form\GroceryAddForm.
 */

namespace Drupal\sample_config_entity\Form;

use Drupal\Core\Form\FormStateInterface;

class GroceryAddForm extends GroceryFormBase {

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    drupal_set_message( $this->t( 'grocery %name was created.', array('%name' => $this->entity->label()) ) );
  }

  /**
   * {@inheritdoc}
   */
  public function actions(array $form, FormStateInterface $form_state) {
    $actions = parent::actions($form, $form_state);

    $actions['submit']['#value'] = $this->t('Create new grocery');
    return $actions;
  }

}
