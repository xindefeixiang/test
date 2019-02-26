<?php
require "DB.php";
class Model{
    public $db;
    public function __construct()
    {
        $this->db = DB::instance();
    }
    //create方法
    public function create($sql){
        $res = $this->db->_db->exec($sql);
        if ($res){
            return true;
        }
        return false;
    }
    //select方法
    public function select($sql){
        $res = $this->db->_db->query($sql);
        if (empty($res)){
            return false;
        }
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find($sql){
        $res = $this->db->_db->query($sql);
        if (empty($res)){
            return false;
        }
        return $res->fetch(PDO::FETCH_ASSOC);
    }
    //update
    public function update($sql){
        $res = $this->db->_db->exec($sql);
        if (!$res){
            return false;
        }
        return true;
    }
    public function delete($sql){
        $res = $this->db->_db->exec($sql);
        if (!$res){
            return false;
        }
        return ['rows'=>1,'status'=>'ok'];
    }
}