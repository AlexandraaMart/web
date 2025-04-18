
//первое, второе задание
<?php

require 'MyProject/Classes/User.php';

$user1 = new User('Алексей', 'alex', '123');
$user2 = new User('Мария', 'maria', '1234');
$user3 = new User('Иван', 'ivan', '12345');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
?>




//третье, четвертое задание
<?php

require_once 'MyProject/Classes/User.php';
require_once 'MyProject/Classes/SuperUser.php';

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

$user1 = new User('Алексей', 'alex', '123');
$user2 = new User('Мария', 'maria', '1234');
$user3 = new User('Иван', 'ivan', '12345');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user = new SuperUser('Сергей', 'serg', '123456', 'Administrator');

$user->showInfo();
?>

//пятое задание
<?php
declare(strict_types=1);

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

spl_autoload_register(function ($class_name) {
    $path = __DIR__.'/'. str_replace('\\', '/', $class_name) . '.php'; 
    if (file_exists($path)) {
        require $path;
    }
});

$user1 = new User('Алексей', 'alex', '123');
$user2 = new User('Мария', 'maria', '1234');
$user3 = new User('Иван', 'ivan', '12345');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user = new SuperUser('Сергей', 'serg', '123456', 'Administrator');

$user->showInfo();
?>




//седьмое задание

<?php
declare(strict_types=1);

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

spl_autoload_register(function ($class_name) {
    $path = __DIR__.'/'. str_replace('\\', '/', $class_name) . '.php'; 
    if (file_exists($path)) {
        require $path;
    }
});

$user1 = new User('Алексей', 'alex', '123');
$user2 = new User('Мария', 'maria', '1234');
//$user3 = new User('Иван', 'ivan', '12345');

$user1->showInfo();
$user2->showInfo();
//$user3->showInfo();

//$user = new SuperUser('Сергей', 'serg', '123456', 'Administrator');
//$user->showInfo();

$superUser = new SuperUser("Иван", "ivan", "12345", "admin");

$info = $superUser->getInfo();
print_r($info)
?>


//восьмое задание
<?php
declare(strict_types=1);

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

spl_autoload_register(function ($class_name) {
    $path = __DIR__.'/'. str_replace('\\', '/', $class_name) . '.php'; 
    if (file_exists($path)) {
        require $path;
    }
});

$user1 = new User('Алексей', 'alex', '123');
$user2 = new User('Мария', 'maria', '1234');
//$user3 = new User('Иван', 'ivan', '12345');

$user1->showInfo();
$user2->showInfo();
//$user3->showInfo();

//$user = new SuperUser('Сергей', 'serg', '123456', 'Administrator');
//$user->showInfo();

$superUser = new SuperUser("Иван", "ivan", "12345", "admin");

$info = $superUser->getInfo();
print_r($info);
echo '<br>';

echo "Всего обычных пользователей: " . User::getUserCount();
echo '<br>';
echo "Всего супер-пользователей: " . SuperUser::getSuperUserCount();
echo '<br>';
?>



