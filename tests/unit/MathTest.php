<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2019 Wayfair LLC - All rights reserved
 */

namespace App\Tests\unit;

use Package\Include1\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase {
  /**
   * @test
   */
  public function multiplyShouldBeWorkingProperly() {
    $math = new Math();
    $this->assertEquals(10, $math->multiply(2, 5));
  }
}