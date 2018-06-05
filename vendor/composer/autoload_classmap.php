<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'CarlosOCarvalho\\Auditing\\Console\\DeleteCommand' => $baseDir . '/src/Console/DeleteCommand.php',
    'CarlosOCarvalho\\Auditing\\Console\\IndexCommand' => $baseDir . '/src/Console/IndexCommand.php',
    'CarlosOCarvalho\\Auditing\\Drivers\\ElasticSearch' => $baseDir . '/src/Drivers/ElasticSearch.php',
    'CarlosOCarvalho\\Auditing\\Jobs\\AuditDeleteQueuedModels' => $baseDir . '/src/Jobs/AuditDeleteQueuedModels.php',
    'CarlosOCarvalho\\Auditing\\Jobs\\AuditIndexQueuedModels' => $baseDir . '/src/Jobs/AuditIndexQueuedModels.php',
    'CarlosOCarvalho\\Auditing\\Traits\\ElasticSearchAuditable' => $baseDir . '/src/Traits/ElasticSearchAuditable.php',
);
