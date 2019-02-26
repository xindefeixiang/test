<?php
$active_time =  [9.01, 9.10, 9.20, 9.21, 9.22];
$process_time = [0.30, 0.18, 0.22, 0.47, 0.11];
class Four{
    public $_instance = 0;
    public function getRes($data1,$data2){
        for ($i=0;$i<count($data1)-1;$i++){
             $this->_instance += $data2[$i] + $data1[$i]-$data2[$i+1];
        }
        $res = $this->_instance/count($data1);
        echo $res;die;
    }
}
$Obj = new Four();
$Obj->getRes($active_time,$process_time);