<?php

$environmentsLocalPath = __DIR__ . '/local/environments.php';
if (file_exists($environmentsLocalPath)) {
    include $environmentsLocalPath;
}