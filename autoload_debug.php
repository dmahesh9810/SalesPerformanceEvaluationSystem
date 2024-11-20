<?php

require_once __DIR__ . '/vendor/autoload.php';

echo "Included Files:\n";
print_r(get_included_files());

echo "PSR-4 Mappings:\n";
$psr4Loader = require __DIR__ . '/vendor/composer/autoload_psr4.php';
print_r($psr4Loader);
