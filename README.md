php-unit-template
============

Running PHPUnit tests
============

When adding new classes always run the following command (Only if you're not using PSR-4):

```php
composer dump-autoload -o
```

For a system-wide installation via Composer, you can run:

```shell
composer global require "phpunit/phpunit=4.8.*"
```

```shell
# For debugging
php -dxdebug.remote_autostart=On vendor/bin/phpunit --bootstrap tests/bootstrap.php tests/CodilityPHP/Test/MySolutions/BinaryGap/BinaryGap.php
php -dxdebug.remote_autostart=On vendor/bin/phpunit --bootstrap tests/bootstrap.php tests/CodilityPHP/Test/MySolutions/BubbleSort/BubbleSort.php

# Without debugging
php vendor/bin/phpunit --bootstrap tests/bootstrap.php tests/CodilityPHP/Test/MySolutions/BinaryGap/BinaryGap.php
```


For Emoji support on Ubuntu based distros , run the following command:

```shell
sudo apt-get install ttf-ancient-fonts package
```

Contribution
============
Feel free to fork this repository and solve something in better, i.e. more optimal way.
