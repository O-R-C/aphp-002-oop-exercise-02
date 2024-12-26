<?php

declare(strict_types=1);

function autoload(string $className): void
{
  $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
  require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
}

spl_autoload_register('autoload');
