<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2018 Wayfair LLC - All rights reserved
 */

namespace App;

use Package\Dummy1\A;
use Package\Dummy2\B;

class Dummy {

  /**
   * @var A
   */
  private $a;
  /**
   * @var B
   */
  private $b;

  public function __construct(A $a, B $b) {
    $this->a = $a;
    $this->b = $b;
  }

  /**
   * @return A
   */
  public function getA() : A {
    return $this->a;
  }

  /**
   * @return B
   */
  public function getB() : B {
    return $this->b;
  }
}