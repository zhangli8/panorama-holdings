<?php
/**
 * Created by PhpStorm.
 * User: YUXIANG
 * Date: 2018/2/26
 * Time: 17:23
 */
require 'model.php';
session_start();
// store session data
if(isset($_POST['code'])){
    if($_POST['code']!=666666){

        echo json_encode('false');
    }else{
        $_SESSION['views']=1;//设置session
        echo json_encode('ok');
    }

}else{
    if(isset($_SESSION['views'])){
        //session_destroy();
        header("location:vote.html");
    }else{
        header("location:validation.html");
    }
}


