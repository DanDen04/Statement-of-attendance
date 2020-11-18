<?php

class DataBase extends DataBaseConfig {
    private $connect = null;


    public function getConnection() {
        $this->connect = mysqli_connect($this->host, $this->login, $this->password, $this->dbName)
            or die("Ошибка" . mysqli_error($this->connect));

        return $this->connect;
    }


    public function closeConnection() {
        mysql_close($this->connect);
    }
}