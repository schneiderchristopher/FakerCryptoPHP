#!/bin/sh
composer dump-autoload -o
./vendor/bin/phpunit --testdox tests