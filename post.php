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
       $array=[];
        $array['p_name']=$data['p_name'];
        $array['p_e_name']=$data['p_e_name'];
        $array['P_birthday']=$data['P_birthday'];
        $array['relation']=$data['relation'];
        $array['p_nationality']=$data['p_nationality'];
        $array['p_port_num']=$data['p_port_num'];
        $array['P_phone']=$data['P_phone'];
        $array['is_migrate']=$data['is_migrate'];
        $array['is_abroad']=$data['is_abroad'];
        $array['p_email']=$data['p_email'];
        $array['p_address']=$data['p_address'];
        $array['post_code']=$data['post_code'];
        $array['emergent_number']=$data['emergent_number'];
        $array['emergent_relation']=$data['emergent_relation'];
        $array['emergent_phone']=$data['emergent_phone'];
        $array['emergent_wechat']=$data['emergent_wechat'];
       /*unset($data['name']);
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
       unset($data['packages1']);*/
       return $array;
   }
function get_s_info($data){
  $num=$data['num'];//学院数量;
    $new_array=[];
    for ($i=1; $i<=$num; $i++)
    {

        $array['name']=$data['name'.$i];
        $array['sex']=$data['sex'.$i];
        $array['e_name']=$data['e_name'.$i];
        $array['birthday']=$data['birthday'.$i];
        $array['passport']=$data['passport'.$i];
        $array['nationality']=$data['nationality'.$i];
        $array['is_food']=$data['is_food'.$i];
        $array['food_name']=$data['food_name'.$i];
        $array['is_medicine']=$data['is_medicine'.$i];
        $array['medicine_name']=$data['medicine_name'.$i];
        $array['is_require']=$data['is_require'.$i];
        $array['require_name']=$data['require_name'.$i];
        $new_array[]=$array;
    }



    return $new_array;
}
function data_save($p_info,$s_info){
   $obj=\Model\BaseModel::get_Transaction_obj();
    $obj->beginTransaction();//开启事务
try{
     $p_res=\Model\P_info::create($p_info);
     if(!$p_res){
         throw new Exception('失败');
     }

   foreach ($s_info as $key=> $v){
         $v['p_info_id']=$p_res->id;
       $s_info[$key]=$v;
   }

    $s_res=\Model\S_info::Insert($s_info);

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