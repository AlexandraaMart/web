
//первое задание
<?php

require 'MyProject/Classes/User.php';

$user1 = new User('Алексей', 'alex', '123');
$user2 = new User('Мария', 'maria', '1234');
$user3 = new User('Иван', 'ivan', '12345');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
?>
