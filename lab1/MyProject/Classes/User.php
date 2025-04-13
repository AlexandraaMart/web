
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

//восьмое задание
<?php
declare(strict_types=1);
namespace MyProject\Classes;

require_once 'AbstractUser.php';

class User {
    public $name;
    public $login;
    private $password;
    private static $userCount = 0;

    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        self::$userCount++;
    }

    public function showInfo() {
        echo "Имя: $this->name, Логин: $this->login, Пароль: $this->password<br>";
    }
    
    public function __destruct() {
           echo "Пользователь $this->login удален.";
       }
       
    public static function getUserCount() {
        return self::$userCount;
    }
}
?>

