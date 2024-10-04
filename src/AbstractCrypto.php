<?php

namespace FakerCryptoPHP;

abstract class AbstractCrypto extends \Faker\Provider\Base
{
  /**
   * @var string[] List of 3 digit crypto codes
   */
  protected static $codes = [];

  /**
   * @var string[] List of crypto coins names
   */
  protected static $cryptoCoinNames = [];

  /**
   * Returns a random crypto 3 digit code
   * @return string
  */
  public function cryptoCode()
  {
    return static::randomElement(static::$codes);
  }

  /**
   * Returns a random crypto coin name
   * @return string
   */
  public function cryptoCoinName()
  {
    return static::randomElement(static::$cryptoCoinNames);
  }
}