<?php
namespace MyProject\Classes;

abstract class AbstractUser {
    protected $name;
    protected $login;
    protected $password;

    abstract public function showInfo();
}
?>
