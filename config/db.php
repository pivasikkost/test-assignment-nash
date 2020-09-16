<?php

$dbLocalPath = __DIR__ . '/local/db.php';
$dbLocal = file_exists($dbLocalPath) ? include $dbLocalPath : array();

$db = [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=pivasikkost',
    'username' => 'pivasikkost',
    'password' => 'root',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

return !empty($dbLocal) ?  array_merge($db, $dbLocal) : $db;
