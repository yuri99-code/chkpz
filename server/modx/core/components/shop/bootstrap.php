<?php

/**
 * @var \MODX\Revolution\modX $modx
 * @var array $namespace
 */

use Shop\Shop;
use xPDO\xPDO;

// Add the service
try {
    // Add the package and model classes
    $modx->addPackage('Shop\\Model\\', $namespace['path'] . 'src/', null, 'Shop\\');

    if (class_exists('Shop\\Shop')) {
        $modx->services->add('Shop', function($c) use ($modx) {
            return new Shop($modx);
        });
    }
}
catch (\Exception $e) {
    $modx->log(xPDO::LOG_LEVEL_ERROR, $e->getMessage());
}
