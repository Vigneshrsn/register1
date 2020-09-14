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
if(isset($_POST["Register"]))
{

    if($_POST["name"]==""||$_POST["username"]==""||$_POST["email"]==""||$_POST["password"]==""||$_POST["cpassword"]=="")
    {
        echo"all details required";
    }
    elseif($_POST["password"] != $_POST["cpassword"])
    {
        echo"password not matching";
    }
    else{
        $password=md5($_POST['password']);
        $sql="insert into users(name,username,email,password) values('".$_POST['name']."','".$_POST['username']."','".$_POST['email']."','".md5($_POST['password'])."')";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
         echo"<script>alert('registered sucessfully');</script>";
        }
        else
        {
            // echo"error";
            echo "<script>alert('error in registration');</script>";
         }
    }
}
?>