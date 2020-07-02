<?php
class Database {
 
    private $host;
    private $user;
    private $pass;
    private $name;
    private $link;
    private $error;
    private $errno;
    private $query;
 
    function __construct($host, $user, $pass, $name = "", $conn = 1) {
        $this -> host = $host;
        $this -> user = $user;
        $this -> pass = $pass;
        if (!empty($name)) $this -> name = $name;      
        if ($conn == 1) $this -> connect();
    }
 
    function __destruct() {
        @mysql_close($this->link);
    }
 
    public function connect() {
        if ($this -> link = mysql_connect($this -> host, $this -> user, $this -> pass)) {
            if (!empty($this -> name)) {
                if (!mysql_select_db($this -> name)) $this -> exception("Could not connect to the database!");
            }
        } else {
            $this -> exception("Could not create database connection!");
        }
    }
 
    public function close() {
        @mysql_close($this->link);
    }
 
    public function query($sql) {
        if ($this->query = @mysql_query($sql)) {
            return $this->query;
        } else {
            $this->exception("Could not query database!");
            return false;
        }
    }
 
    public function last_id() {
        if ($id = mysql_insert_id()) {
            return $id;
        } else {
            return false;
        }
    }

 
}
?>