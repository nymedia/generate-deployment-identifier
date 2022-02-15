<?php

// Support being run from a vendor directory, but also from the project root.
$paths = [
  __DIR__ . '/../../autoload.php',
  __DIR__ . '/vendor/autoload.php',
];
foreach ($paths as $path) {
  if (!file_exists($path)) {
    continue;
  }
  require_once $path;
}

echo (new \eiriksm\GitInfo\GitInfo())->getShortHash();
