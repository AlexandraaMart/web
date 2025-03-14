<?php
require 'MyProject/Classes/User.php';

$user1 = new User('Иван', 'ivan123', 'pass123');
$user2 = new User('Мария', 'mar456', 'pass456');
$user3 = new User('Артем', 'art789', 'pass789');

$user1->showInfo();
echo "<br>";
$user2->showInfo();
echo "<br>";
$user3->showInfo();
?>
