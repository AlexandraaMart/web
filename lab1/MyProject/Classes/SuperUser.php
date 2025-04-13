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
   
