<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

$gitIgnore = sprintf('%s/.gitignore', realpath(dirname(__DIR__)));
$rules     = file_get_contents($gitIgnore);
$rules     = preg_replace("#[\r\n]+composer.lock#s", '', $rules);
file_put_contents($gitIgnore, $rules);
unlink(__FILE__);
