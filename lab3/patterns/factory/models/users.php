<?php
namespace Factory\Models;

class Users extends Collection
{
    public function __construct(public ?array $users = null)
    {
        $users ??= [
            new User('dmitry.koterov@gmail.com', 'password', 'Дмитрий', 'Котеров'),
            new User('igorsimdyanov@gmail.com', 'password', 'Игорь', 'Симдянов'),
            new User('anna.sidorova@gmail.com', 'password', 'Анна', 'Сидорова'),
            new User('ivan.petrov@gmail.com', 'password', 'Иван', 'Петров'),
            new User('olga.fedorenko@gmail.com', 'password', 'Ольга', 'Федоренко')
        ];
        parent::__construct($users);
    }
}
?>