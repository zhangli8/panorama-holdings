<?php
ini_set('date.timezone','Asia/Shanghai');
require 'model.php';
error_reporting(0);
  $post=$_POST;////接收 的数据
  $post1='套餐:'.$post['packages'].'    城市:'.$post['packageA'].'    营队:'.$post['package'];     //报名营队套餐类型
  $post2=$post['packages1'];//////营队套餐内容选项
   $created_with_p_info=get_p_info($post);///父母及监护人信息
$created_with_p_info['enlist']=$post1;
$created_with_p_info['enlist_content']=$post2;

$created_with_p_s=get_s_info($post);
data_save($created_with_p_info,$created_with_p_s);////保存数据

function get_p_info($data)
   {
       unset($data['name']);
       unset($data['sex']);
       unset($data['e_name']);
       unset($data['birthday']);
       unset($data['passport']);
       unset($data['nationality']);
       unset($data['is_food']);
       unset($data['food_name']);
       unset($data['is_medicine']);
       unset($data['medicine_name']);
       unset($data['is_require']);
       unset($data['require_name']);
       unset($data['packages']);
       unset($data['packageA']);
       unset($data['package']);
       unset($data['packages1']);
       return $data;
   }
function get_s_info($data){
    $array=[];
    $array['name']=$data['name'];
    $array['sex']=$data['sex'];
    $array['e_name']=$data['e_name'];
    $array['birthday']=$data['birthday'];
    $array['passport']=$data['passport'];
    $array['nationality']=$data['nationality'];
    $array['is_food']=$data['is_food'];
    $array['food_name']=$data['food_name'];
    $array['is_medicine']=$data['is_medicine'];
    $array['medicine_name']=$data['medicine_name'];
    $array['is_require']=$data['is_require'];
    $array['require_name']=$data['require_name'];
    return $array;
}
function data_save($p_info,$s_info){
   $obj=\Model\BaseModel::get_Transaction_obj();
    $obj->beginTransaction();//开启事务
try{
     $p_res=\Model\P_info::create($p_info);
     if(!$p_res){
         throw new Exception('失败');
     }


    $s_info['p_info_id']=$p_res->id;
    $s_res=\Model\S_info::create($s_info);
     if(!$s_res){
         throw new Exception('失败');
     }
    $obj->commit();///提交事务
    echo json_encode('ok');
}
catch (Exception $e){
    $obj->rollback();///回滚事务
    echo json_encode('false');
}
}
?>