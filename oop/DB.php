<?php
class DB{
    private static $_instance;
    public $_db;
    private function __construct()
    {
        $this->_db = new PDO('mysql:dbname=workone;host=127.0.0.1','root','DRsXT5ZJ6Oi55LPQ');
        return $this->_db;
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public static function instance(){
        if (!(self::$_instance instanceof self)){
            self::$_instance = new  self();
        }
        return self::$_instance;
    }
}