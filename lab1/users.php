<?php

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php'; 
    // echo str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php';
   
    if (file_exists($file)) {
        require $file;
        
    }
});


use MyProject\Classes\User;
use MyProject\Classes\SuperUser;


$user1 = new User('Sasha', '123', 'pas1');
$user2 = new User('Olga', '1234', 'pas2');
$user3 = new User('Natalya', '12345', 'pas3');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user = new SuperUser('Zoya', 'z123456', 'pas4', 'manager');
$user->showInfo();
$user->getInfo();

echo '<pre>';
echo "Всего обычных пользователей: " . User::$userCount . "\n";
echo "Всего cупер-пользователей: " . SuperUser::$superUserCount . "\n";
echo '</pre>';
