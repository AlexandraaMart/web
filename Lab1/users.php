<?php
use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

spl_autoload_register(function ($class_name) {
    $file = str_replace('\\', '/', $class_name) . '.php';
    if (file_exists($file)) {
        include $file;
    }
});

$user1 = new User('Иван', 'ivan123', 'pass123');
$user2 = new User('Мария', 'mar456', 'pass456');
$user3 = new User('Артем', 'art789', 'pass789');

$user1->showInfo();
echo "<br>";
$user2->showInfo();
echo "<br>";
$user3->showInfo();

$user4 = new SuperUser('Алексей', 'alex789', 'pass653', 'Администратор');
$user4->showInfo();
echo "<br>";
?>
