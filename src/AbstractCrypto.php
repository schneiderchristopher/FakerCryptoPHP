<?php

namespace FakerCryptoPHP;

abstract class AbstractCrypto extends \Faker\Provider\Base
{
  /**
   * @var string[] List of 3 digit crypto codes
   */
  protected static $codes = [];

  /**
   * Random crypto 3 digit code
   * @return string
  */
  public function cryptoCode()
  {
    return static::randomElement(static::$codes);
  }
}