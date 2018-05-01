<?php

/*
Один из способов работы с конфигурационными файлами - это динамическое определение типа файла на основе расширения и выбор соответствующего парсера. После парсинга данные преобразуются в единый вид, и из приложения работа с ними идет независимо от источника. Пример реализации:

$config = Config::factory("path/to/ini");
$config->getValue('host');

$config = Config::factory("path/to/xml");
$config->getValue('host');

Для простоты наша реализация работает только с плоскими конфигурационными файлами, то есть с key и value.
Config.php

    Реализуйте статическую функцию factory у класса Config, которая на основе расширения файла выбирает правильный парсер, производит парсинг данных (см. интерфейсы) и возвращает инстанс класса Config.

*/

namespace App;

require_once 'ConfigInterface.php';
require_once 'IniConfigParser.php';
require_once 'XmlConfigParser.php';
require_once 'YamlConfigParser.php';

class Config implements ConfigInterface
{
    private $data;
    private $fromType;

    // BEGIN (write your solution here)
    const MAPPING = [
        'ini' => 'App\IniConfigParser',
        'xml' => 'App\XmlConfigParser',
        'yml' => 'App\YamlConfigParser',
    ];

    public static function factory($filepath, array $options = [])
    {
        $extension = pathinfo($filepath, PATHINFO_EXTENSION);
        $klass = self::MAPPING[$extension];
        $data = $klass::parse($filepath, $options);
        return new self($extension, $data);
    }
    // END

    public function __construct($fromType, array $data)
    {
        $this->fromType = $fromType;
        $this->data = $data;
    }

    public function getFromType()
    {
        return $this->fromType;
    }

    public function getValue($key)
    {
        return $this->data[$key];
    }
}

