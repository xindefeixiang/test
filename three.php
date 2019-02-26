<?php
class Three{
    public function getRes($data){
        for ($i=1;$i<count($data);$i++){
            for ($j=0;$j<count($data)-$i;$j++){
                $str1 = $data[$j].$data[$j+1];
                $str2 = $data[$j+1].$data[$j];
                if ($str1<$str2){
                    $tt = $data[$j];
                    $data[$j] = $data[$j+1];
                    $data[$j+1] = $tt;
                }
            }
        }
        echo "<pre>";
        print_r($data);die;
    }
}
$obj = new Three();
$obj->getRes([1,5,3,4]);