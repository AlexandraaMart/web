<?php
namespace MyProject\Classes;
class User extends AbstractUser {
    
    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    public function showInfo() {
        echo "Имя: " . $this->name . "\n";
        echo "Логин: " . $this->login . "\n";
        echo "Пароль: ". $this->password . "\n";
    }

    public function __destruct() {
        echo "Пользователь " . $this->login . " удален.\n";
    }
}
?>
