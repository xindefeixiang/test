<?php
class One{
    public function getRes($n,$m){
        $n1 = $n;
        $res = 1;
        for ($i=0;$i<$m-1;$i++){
            if ($n1 == $n){
                $res = $n*$n;
                $n++;
            }else{
                $res = $res*$n1;
            }
        }
        $arr = [];
        $flag = 1;
        for ($i=1;$i<=$res;$i++){
            if ($flag != $m){
                $arr[] = $i;
                $flag++;
            }else{
                $flag=1;
            }
        }
        echo "<pre>";
        print_r($arr);die;
    }
}
$obj = new One();
$obj->getRes(4,3);