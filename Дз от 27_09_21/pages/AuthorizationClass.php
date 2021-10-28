<?php

class AuthorizationClass
{
    public $hostname;
    public $username;
    public $password;
    public $db;

    public function __construct($hostname, $username, $password, $db)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
        $this->db_connect();
        mysqli_set_charset($this->db_connect(), 'utf8');
    }
    public function db_connect()
    {
       return mysqli_connect($this->hostname, $this->username, $this->password, $this->db);
    }
    public function select($connect) {
        return mysqli_query($connect, 'select * from `users`');
    }
    public function arrSelect($array)
    {
        return mysqli_fetch_all($array, MYSQLI_ASSOC);
    }
    public function getUser($login, $password, $array) {
        foreach ($array as $value) {
            if($login === $value['Login']){
                if ($password === $value['Password']){
                    echo 'авторизация успешна';
                    return true;
                }
                else{
                    echo 'пароль неверен';
                    return false;
                }
            }
            else{
                echo 'Пользователь не найден' . $value;
                return false;
            }
        }
    }
}