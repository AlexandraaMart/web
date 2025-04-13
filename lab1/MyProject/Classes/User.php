
//Первое, второе, третье, четвертое задание
<?php
namespace MyProject\Classes;

require_once 'AbstractUser.php'; // пятое задание

class User {
    public $name;
    public $login;
    private $password;

    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    public function showInfo() {
        echo "Имя: $this->name, Логин: $this->login, Пароль: $this->password<br>";
    }

    public function __destruct() {
           echo "Пользователь $this->login удален.";
       }
}
?>
