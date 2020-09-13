<?php
$host="localhost";
$username="root";
$password="";
$database="registration";
$conn=mysqli_connect($host,$username,$password,$database);
if(!$conn)
{
    die('Connection aborted');
}


if(isset($_REQUEST["Register"]))
{

    if($_REQUEST["name"]==""||$_REQUEST["username"]==""||$_REQUEST["email"]==""||$_REQUEST["password"]==""||$_REQUEST["cpassword"]=="")
    {
        echo"all details required";
    }
    else
    {
        $sql="insert into users(name,username,email,password) values('".$_REQUEST['name']."','".$_REQUEST['username']."','".$_REQUEST['email']."','".$_REQUEST['password']."')";
        
        if(mysqli_query($conn,$sql))
        {
         echo"reistered sucessfully";
        }
        else
        {
        echo"error";
         }
    }
}
?>
