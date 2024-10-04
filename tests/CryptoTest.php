<?php

use PHPUnit\Framework\TestCase;
use Faker\Factory;
use Faker\Generator;

final class CryptoTest extends TestCase
{
  protected $folder;

  public function setUp(): void
  {
    parent::setUp();
    $this->folder = array_diff(scandir('src/Provider'), array('..', '.'));
  }

  public function testCanReturnCryptoCode(): void
  {
    $this->testIterator(static function (Generator $faker) {
        return $faker->cryptoCode();
    });
  }

  public function testCanReturnCryptoName(): void
  {
    $this->testIterator(static function (Generator $faker) {
        return $faker->cryptoCoinName();
    });
  }

  private function testIterator(callable $func): void
  {
    foreach ($this->folder as $folder) {
      $class = 'FakerCryptoPHP\\Provider\\' . $folder . '\\Crypto';
      if (class_exists($class)) {
          $faker = Factory::create();
          $faker->addProvider(new $class($faker));
          $this->assertIsString($func($faker));
      } else {
          $this->fail("Class $class does not exist.");
      }
  }
  }
}