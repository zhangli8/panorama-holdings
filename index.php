<?php
ini_set('date.timezone','Asia/Shanghai');
require 'model.php';
require 'export.php';
$export=new export();
$datas= $datas=[['order_sn'=>'6909759053412631','pro_name'=>'测试学校','nickname'=>'陈翔宇','name'=>'翔宇','phone'=>'15000694560','address'=>'dadad','pro_info'=>'产品名称','fa_huo_info'=>'发货信息','note'=>'备注','is_sao_miao'=>'是否扫描'],['order_sn'=>'6909759053412631','pro_name'=>'测试学校','nickname'=>'陈翔宇','name'=>'翔宇','phone'=>'15000694560','address'=>'dadad','pro_info'=>'产品名称','fa_huo_info'=>'发货信息','note'=>'备注','is_sao_miao'=>'是否扫描']];   //示例数组

$export->exports($datas);




?>