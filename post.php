<?php
ini_set('date.timezone','Asia/Shanghai');
require 'model.php';

  $post=$_POST;////接收 的数据
  $post1='套餐'.$post['packages'].'    城市：'.$post['packageA'].'    '.$post['package'];     //报名营队套餐类型
  $post2=$post['packages1'];//////营队套餐内容选项
   $postall=deal($post);
   $postall['enlist']=$post1;
   $postall['enlist_content']=$post2;
dd($postall);
////处理数据为保存的格式
function deal($data){
  unset($data['packages']);
  unset($data['packageA']);
  unset($data['package']);
  unset($data['packages1']);
 return $data;
}


?>