
//Первое задание
<?php

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
}
?>
