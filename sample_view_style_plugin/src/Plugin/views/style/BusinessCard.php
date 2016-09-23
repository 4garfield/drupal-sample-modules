<?php

/**
 * @file
 * Definition of Drupal\sample_view_style_plugin\Plugin\views\style\BusinessCard.
 */

namespace Drupal\sample_view_style_plugin\Plugin\views\style;

use Drupal\core\form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to display a business card
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "card",
 *   title = @Translation("Business Card"),
 *   help = @Translation("Display the results as a business card."),
 *   theme = "views_business_card",
 *   display_types = { "normal" }
 * )
 *
 */
class BusinessCard extends StylePluginBase {

  /**
   * Does the style plugin allows to use row style plugins.
   */
  protected $usesRowPlugin = TRUE;

  /**
   * Does the style plugin support custom css class for the rows.
   */
  protected $usesRowClass = TRUE;

  /**
   * Does the style plugin support grouping of rows.
   */
  protected $usesGrouping = FALSE;

  /**
   * Does the style plugin for itself support to add fields to it's output.
   */
  protected $usesFields = TRUE;

  /**
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    
    $options['card_field'] = array('default' => '');
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);
    
    $options = $this->displayHandler->getFieldLabels(TRUE);
    $form['card_field'] = array(
      '#type' => 'select',
      '#title' => $this->t('The tab navigation field'),
      '#description' => $this->t('Select the field that will be used inside the business card.'),
      '#default_value' => $this->options['card_field'],
      '#options' => $options,
    );
  }

}
