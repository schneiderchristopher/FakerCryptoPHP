<?php

namespace FakerCryptoPHP;

abstract class AbstractCrypto extends \Faker\Provider\Base
{
  /**
   * Random crypto 3 digit code
   * @return string
  */
  public function cryptoCode()
  {
    return static::randomElement(static::$codes);
  }
}