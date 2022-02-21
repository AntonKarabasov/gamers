<?php
require __DIR__ . '/../vendor/autoload.php';

try {
    unset($argv[0]);

    // Составляем полное имя класса, добавив нэймспейс
    $className = '\\Gamer\\Cli\\' . array_shift($argv);
    if (!class_exists($className)) {
        throw  new \Gamer\Exceptions\CliException('Class "' . $className . '" not found');
    }

    // Подготавливаем список аргументов
    $params = [];
    foreach ($argv as $argument) {
        preg_match('/^-(.+)=(.+)$/', $argument, $matches);
        if (!empty($matches)) {
            $paramName = $matches[1];
            $paramValue = $matches[2];

            $params[$paramName] = $paramValue;
        }
    }

    // Создаем экземпляр класса, передав параметры и вызываем метод execute()
    $class = new $className($params);
    $class->execute();
} catch (\Gamer\Exceptions\CliException $e) {
    echo 'Error: ' . $e->getMessage();
}
