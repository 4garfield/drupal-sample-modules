<?php
/**
 * @file
 * Contains \Drupal\sample_block\Plugin\Block\SampleBlock.
 */
namespace Drupal\sample_block\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;
/**
 * @Block(
 *   id = "sample_block",
 *   admin_label = @Translation("Sample Block"),
 * )
 */
class SampleBlock extends BlockBase implements BlockPluginInterface {
  /**
   * {@inheritdoc}
   */
  public function build() {
  	$config = $this->getConfiguration();
    $name = $config['sample_block_settings'];
    return array(
      '#markup' => $this->t('Hello World!  -by @name', array(
          '@name' => $name,
        )
      ),
    );
  }
  /**
   * add configuration to the block form
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);
    $config = $this->getConfiguration();
    $form['sample_block_author'] = array (
      '#type' => 'textfield',
      '#title' => $this->t('authered by'),
      '#description' => $this->t('the author of the quote'),
      '#default_value' => isset($config['sample_block_settings']) ? $config['sample_block_settings'] : 'Drupal',
    );
    return $form;
  }
  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->setConfigurationValue('sample_block_settings', $form_state->getValue('sample_block_author'));
  }
}
