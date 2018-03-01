<?php
ini_set('date.timezone','Asia/Shanghai');
require 'model.php';
require 'export.php';
$export=new export();

$datas=\Model\S_info::with('p_info')->get();

if($datas){
    $datas=$datas->toArray();
    $datas=formate_datas($datas);
}else{
    $datas=[];
}

$export->exports($datas);

function formate_datas($data){

    foreach ($data as $key=> $v){

        foreach ($v['p_info'] as $vkey=>$vv){
            $v[$vkey]=$vv;
      }
        $data[$key]=$v;
    }


    return $data;
}


?>