<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/7
 * Time: 10:24
 */
namespace Model;
/**
 * 签名助手 2017/11/19
 * Class AliyunMsg
 *
 * @author  wumengmeng <wu_mengmeng@foxmail.com>
 * @package Model
 */
class P_info extends BaseModel{
    protected $table='p_info';
    protected $guarded=[];
public function s_info(){
    return $this->hasMany('Model\S_info','p_info_id');
}
}