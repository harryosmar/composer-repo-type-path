<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2018 Wayfair LLC - All rights reserved
 */

namespace App\Tests\unit;

use App\Dummy;
use Package\Dummy1\A;
use Package\Dummy2\B;
use PhpCollection\Map;
use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase {
  /**
   * @test
   */
  public function shouldBeAbleToCreateTestObject() {
    $parentTest = new Dummy(new A(), new B());
    $this->assertInstanceOf(A::class, $parentTest->getA());
    $this->assertInstanceOf(B::class, $parentTest->getB());
    $this->assertNull((new Map(['a' => 1]))->get('b')->getOrElse(null));
  }
}