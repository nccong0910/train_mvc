<?php

class DB{
    
    public $con;
    protected $servername = "localhost";
    protected $username = "usertest1";
    protected $password = "123123";
    protected $dbname = "manage";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
}

?>