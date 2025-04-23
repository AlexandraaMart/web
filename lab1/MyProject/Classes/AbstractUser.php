<?php
declare(strict_types=1);
namespace MyProject\Classes;

abstract class AbstractUser {
    protected $name;
    protected $login;
    protected $password;

    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    abstract public function showInfo();
    
    public function __destruct() {
        echo "Пользователь $this->login удален.";
    }
}
?>


