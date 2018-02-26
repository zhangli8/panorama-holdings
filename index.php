<?php
ini_set('date.timezone','Asia/Shanghai');
require 'model.php';
require 'export.php';
$export=new export();
$datas=\Model\S_info::all();
if($datas){
    $datas=$datas->toArray();
}else{
    $datas=[];
}



$export->exports($datas);




?>