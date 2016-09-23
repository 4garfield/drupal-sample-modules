<?php

namespace Drupal\sample_config_entity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\sample_config_entity\GroceryInterface;

/**
 * @ConfigEntityType(
 *   id = "grocery",
 *   label = @Translation("Grocery"),
 *   admin_permission = "administer grocery",
 *   handlers = {
 *     "list_builder" = "Drupal\sample_config_entity\GroceryListBuilder",
 *     "form" = {
 *       "add" = "Drupal\sample_config_entity\Form\GroceryAddForm",
 *       "edit" = "Drupal\sample_config_entity\Form\GroceryEditForm",
 *       "delete" = "Drupal\sample_config_entity\Form\GroceryDeleteForm",
 *     }
 *   },
 *   config_prefix = "grocery",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "weight" = "weight",
 *   },
 *   links = {
 *     "edit-form" = "/admin/config/system/sample_config_entity/manage/{grocery}",
 *     "delete-form" = "/admin/config/system/sample_config_entity/manage/{grocery}/delete",
 *     "collection" = "/admin/config/system/sample_config_entity",
 *   }
 * )
 */
class Grocery extends ConfigEntityBase implements GroceryInterface {

  /**
   * The grocery ID.
   *
   * @var string
   */
  public $id;

  /**
   * The grocery UUID.
   *
   * @var string
   */
  public $uuid;

  /**
   * The grocery label.
   *
   * @var string
   */
  public $label;

  /**
   * Weight of this grocery.
   *
   * @var int
   */
  protected $weight = 0;

  /**
   * The grocery description.
   *
   * @var text
   */
  protected $desc = '';

  /**
   * The grocery price.
   *
   * @var float
   */
  protected $price;

  /**
   * The grocery produce date.
   *
   * @var string
   */
  protected $date;

  /**
   * The grocery factory homepage.
   *
   * @var uri
   */
  protected $address = '';

  /**
   * The grocery factory email address.
   *
   * @var email
   */
  protected $contact = '';

  public function getWeight() {
    return $this->get('weight');
  }

  public function setWeight($weight) {
    $this->set('weight', $weight);
    return $this;
  }

  public function getDesc() {
    return $this->get('desc');
  }

  public function setDesc($desc) {
    $this->set('desc', $desc);
    return $this;
  }

  public function getPrice() {
    return $this->get('price');
  }

  public function setPrice($price) {
    $this->set('price', $price);
    return $this;
  }

  public function getDate() {
    return $this->get('date');
  }

  public function setDate($date) {
    $this->set('date', $date);
    return $this;
  }

  public function getAddress() {
    return $this->get('address');
  }

  public function setAddress($address) {
    $this->set('address', $address);
    return $this;
  }

  public function getContact() {
    return $this->get('contact');
  }

  public function setContact($contact) {
    $this->set('contact', $contact);
    return $this;
  }

}
