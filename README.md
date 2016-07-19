php-codility
============

PHP solutions to codility tasks from their lessons.

Codility lessons: https://codility.com/programmers/lessons/

http://mathworld.wolfram.com/

Introduction
============
This repository represents my solutions to codility algorithmic tasks. The plan is to solve easier tasks first, and gradually solve all, even the hardest tasks at last. All tasks are considered completed only when when their performance is optimal, at best possible big O time and space complexity.

Directory structure example
============
<pre>
/lesson x: Lesson name  # Folder for certain lesson 
    solution1.php       # Task1 solution
    solution2.php       # Task2 solution
    solution3.php       # Task3 solution
    lesson.pdf          # Lesson PDF, learn algorithmic basic required to solve tasks
</pre>

Every solution has description according to this example:
```php
/*
 * CODILITY ANALYSIS: https://codility.com/demo/results/demoQV2PE9-UDK/
 * LEVEL: EASY
 * Correctness:	100%
 * Performance:	100%
 * Task score:	100%
 */
function solution($A)
{
    // ... some php code
}
```

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
