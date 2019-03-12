<?php
/**
 * @author    Harry Osmar Sitohang <hsitohang@wayfair.com>
 * @copyright 2019 Wayfair LLC - All rights reserved
 */

namespace App\Tests\unit;

use Package\Include2\Greet;
use PHPUnit\Framework\TestCase;

class GreetTest extends TestCase {
  /**
   * @test
   */
  public function shouldBeAbleToGreet() {
    $greet = new Greet();
    $this->assertEquals('hello world', $greet->sayHello());
  }
}