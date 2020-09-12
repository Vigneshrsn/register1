<?php
include("connect.php");
if(isset($_REQUEST["Register"]))
{
    if($_REQUEST["name"]==""||$_REQUEST["username"]==""||$_REQUEST["email"]==""||$_REQUEST["password"]==""||$_REQUEST["cpassword"]=="")
    {
        echo"all details required";
    }
    else{
        $sql="insert into users(name,username,email,password) values('".$_REQUEST['name']."','".$_REQUEST['username']."','".$_REQUEST['email']."','".$_REQUEST['password']."')";
        $res=mysql_query($sql);
        
    }
}