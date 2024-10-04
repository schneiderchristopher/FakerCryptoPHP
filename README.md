# Faker Crypto PHP

Faker Crypto PHP is a third-party library for [Faker PHP](https://github.com/fzaninotto/Faker) that provides additional methods for generating cryptocurrency-related data. This library creates mock data realated with cryptocurrency.

## Installation

You can install the library using Composer. Run the following command in your terminal:

```bash
composer require schneiderchristopher/faker-crypto-php
```

## Usage

To use this with Faker, you must add the FakerCryptoPHP\Crypto class to the Faker generator:

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \FakerCryptoPHP\Provider\en_US\Crypto($faker));

$faker->cryptoCode(); // Returns a fake coin code eg: (BTC, ETH)
$faker->cryptoCoinName(); // Returns a fake coin name eg: (Dogecoin, Solana)
```

## Contribution

Feel free to submiting a PR with your language and possible improvements.

Don't forget to run your tests before submitting a PR.

## Credits

https://github.com/jzonta/FakerRestaurant - Most of this repo was based on this.

https://github.com/FakerPHP/Faker - For continuing with Faker.
