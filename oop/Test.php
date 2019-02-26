<?php
require "Model.php";
class Test extends Model{
    public function getselect(){
       $res = $this->select("select * from users");
       echo "<pre>";
       print_r($res);
       echo "<br>";
        $res = $this->create("insert into xiaodi VALUES (null,'2','小弟弟')");
        echo "<pre>";
        var_dump($res);
        echo "<br>";
        $res = $this->delete("delete from xiaodi where id=1");
        echo "<pre>";
        var_dump($res);
        echo "<br>";
        $res = $this->update("update xiaodi set name='465'");
        echo "<pre>";
        var_dump($res);
        echo "<br>";
    }
}
$obj = new Test();
$obj->getselect();