<?php

require __DIR__ . '/vendor/autoload.php';

$container = require __DIR__ . '/app/config/containers.php';
$container = new Pimple\Container($container);

//se o argumento passado é fresh dropa a tabela
if (!empty($argv[1]) && $argv[1] === 'fresh') {
    $container['db']->exec('DROP DATABASE IF EXISTS `'. $c['settings']['db']['database'] .'`');
    echo "Database was dropped." . PHP_EOL;
}

$files = scandir(__DIR__ . '/database');

foreach ($files as $file) {
    if (!is_dir(__DIR__ . '/database/' . $file)) {
        $sql = file_get_contents(__DIR__ . '/database/' . $file);
        $container['db']->exec($sql);
        echo $file . ' is migrated! ' . PHP_EOL;
    }
}