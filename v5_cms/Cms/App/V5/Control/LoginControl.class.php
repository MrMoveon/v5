<?php
//测试控制器类
class LoginControl extends Control{
    function login(){
       
    	$this->display();
    }
    function code(){

    	$code=new code();
    	$code->show();
    }
}
?>