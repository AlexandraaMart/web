<?php
require 'settings.php'; // подключаем файл с классом Settings

use Singleton\Settings; // используем пространство имен

$settings = Settings::get(); // получаем экземпляр класса Settings

// Сохраним значения
$settings->integer = 52; 
$settings->string = 'Да здравствует Санкт-Петербург'; 
$settings->boolean = true; 

// Выводим значения на экран
echo "Числовое значение: " . $settings->integer . "<br>"; 
echo "Строковое значение: " . $settings->string . "<br>"; 
echo "Логическое значение: " . ($settings->boolean ? 'true' : 'false') . "<br>"; 
?>
