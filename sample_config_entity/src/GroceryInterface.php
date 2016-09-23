<?php

namespace Drupal\sample_config_entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface defining a grocery entity.
 */
interface GroceryInterface extends ConfigEntityInterface {

  public function getWeight();

  public function setWeight($weight);

  public function getDesc();

  public function setDesc($desc);

  public function getPrice();

  public function setPrice($price);

  public function getDate();

  public function setDate($date);

  public function getAddress();

  public function setAddress($address);

  public function getContact();

  public function setContact($contact);

}
