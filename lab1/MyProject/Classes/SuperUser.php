//третье, четвертое задание
<?php
   namespace MyProject\Classes;

   require_once 'User.php';

   class SuperUser extends User {
       public $role;

       public function __construct($name, $login, $password, $role) {
           parent::__construct($name, $login, $password);
           $this->role = $role;
       }

       public function showInfo() {
           echo "Имя: $this->name, Логин: $this->login, Роль: $this->role<br>";
       }
   }
   ?>

//седьмое задание
<?php
declare(strict_types=1);
namespace MyProject\Classes;

require_once 'User.php';
require_once 'SuperUserInterface.php';

class SuperUser extends User implements SuperUserInterface {
    public $role;
    public $password;

    public function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        $this->password = $password;
    }

    public function showInfo() {
        echo "Имя: $this->name, Логин: $this->login, Роль: $this->role<br>";
    }

    public function getInfo(): array {
        return [
            'name' => $this->name,
            'login' => $this->login,
            'password' => $this->password,
            'role' => $this->role
        ];
    }
}
?>

//восьмое задание
<?php
declare(strict_types=1);
namespace MyProject\Classes;

require_once 'User.php';
require_once 'SuperUserInterface.php';

class SuperUser extends User implements SuperUserInterface {
    public $role;
    public $password;
    private static $superUserCount = 0;

    public function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        $this->password = $password;
        self::$superUserCount++;
    }

    public function showInfo() {
        echo "Имя: $this->name, Логин: $this->login, Роль: $this->role<br>";
    }

    public function getInfo(): array {
        return [
            'name' => $this->name,
            'login' => $this->login,
            'password' => $this->password,
            'role' => $this->role
        ];
    }
    
    public static function getSuperUserCount() {
        return self::$superUserCount;
    }
}
?>



   
